<?php
    class user{
        var $conn=null;
        public function __construct()
        {
            $this->conn = DB::getInstance();
        }
        function register($tenkh,$username,$cypt,$email,$diachi,$sodt){
            
            $query="insert into khachhang1(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro)
            values(?,?,?,?,?,?,?,default)
            ";
            $stmt=$this->conn->prepare($query);
            $stmt->execute(array(null,$tenkh,$username,$cypt,$email,$diachi,$sodt));
                if($stmt){
                    echo "<script>alert('Đăng ký thành công')</script>";
                }else{
                    echo "Đăng ký thất bại";
                }
        }
    }
