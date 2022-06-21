<?php
class order{
    var $conn=null;
    public function __construct()
    {
        $this->conn = DB::getInstance();
    }
    public function getByName($username){
        $query="select * from khachhang1 where username='$username'";
        
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        $result=$stmt->fetch();
        return $result;
  
    }
    public function addOrder($tongtien,$id){
        $id= intval($id);
        $tongtien=str_replace(',','',$tongtien);
        $tongtien= intval($tongtien);
        var_dump($id);
        var_dump($tongtien);
        $query="insert into hoadon1(makh,ngaydat,tongtien)
        values(?,?,?)";
        $stmt=$this->conn->prepare($query);
        $stmt->execute(array(($id),date('Y-m-d'),($tongtien)));
        return $stmt;
        
    }

    }


?>