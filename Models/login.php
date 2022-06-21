<?php

  class login{
      var $conn=null;
      public function __construct()
      {
          $this->conn = DB::getInstance();
      }
      public function loginn($username,$password){
            echo $username;
            echo $password;
            $query="select * from khachhang1 where username='$username' and matkhau='$password'";
            $result= $this->conn->query($query);
            
            if($result->rowCount()>0){
                $row=$result->fetch();
                $_SESSION['username']=$row['username'];
                $_SESSION['makh']=$row['makh'];
                $_SESSION['password']=$row['matkhau'];
                return true;
            }else{
                return false;
            }
            
      }
  }  
?>