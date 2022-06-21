<?php
    class categoryAdmin{
        var $conn=null;
        public function __construct()
        {
            $this->conn = DB::getInstance();
        }
        function renderAll(){
            $result = $this->conn->query('SELECT * FROM danhmuc');
            return $result;
        }
        public function getById($id){
            $result= $this->conn->query("select * from loai where maloai=${id}");
            return $result;
        }
        public function delete(){
            $id=$_GET['id'];
           
            $query="delete from loai where mahh=?";
            $stmt=$this->conn->prepare($query);
            $stmt->execute(array($id));
            if($stmt){
                echo "<script>alert('Xóa thành công')</script>";
               echo "<script>window.location.href='index.php?controller=productAdmin&action=product'</script>";
            }else{
                echo "Xóa thất bại";
            }
        }
        public function edit(){
            if(($_SERVER['REQUEST_METHOD']=='POST')){
               
                
                
                $query = "UPDATE loai SET tenloai=?,idmenu=? WHERE maloai=?";
                $stmt = $this->conn->prepare($query);
                $tenloai=$_POST['tenloai'];
                $idmenu=(int)$_POST['idmenu'];
               
                $arr=array($tenloai,$_POST['maloai']);
                
                $stmt->execute($arr);

                
                if($stmt->rowCount()>0){
                    echo '<script>alert("Sửa thành công")</script>';
                    echo "<script>window.location.href='index.php?controller=categoryAdmin&action=category';</script>";
                }else{
                    echo "<script>alert('Sửa thất bại');</script>";
                }

            }
        }
    }
