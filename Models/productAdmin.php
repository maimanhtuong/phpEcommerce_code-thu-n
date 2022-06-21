<?php
class productAdmin
{
    var $conn = null;
    public function __construct()
    {
        $this->conn = DB::getInstance();
    }
    public function delete()
    {
        $id = $_GET['id'];
        $query1="DELETE FROM cthoadon1 WHERE mahh=?";
        $stmt1=$this->conn->prepare($query1);
        $stmt1->execute(array($id));





        $query2 = "delete from hanghoa where mahh=?";
        $stmt2 = $this->conn->prepare($query2);
        $stmt2->execute(array($id));
        if ($stmt2 && $stmt1) {
            echo "<script>alert('Xóa thành công')</script>";
            echo "<script>window.location.href='index.php?controller=productAdmin&action=product'</script>";
        } else {
            echo "Xóa thất bại";
        }
    }

    public function uploadFile(){
         //load file vao thu muc upload
         $target_dir = "./Content/image/";
         $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
         $uploadOk = 1;
         $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

         // Check if image file is a actual image or fake image
         if (isset($_POST["submit"])) {
             $check = getimagesize($_FILES["hinh"]["tmp_name"]);
             if ($check !== false) {
                 echo "File is an image - " . $check["mime"] . ".";
                 $uploadOk = 1;
             } else {
                 echo "File is not an image.";
                 $uploadOk = 0;
             }
         }

         // Check if file already exists
         if (file_exists($target_file)) {
             
             echo "Sorry, file already exists.";
             echo $target_file;
             $uploadOk = 0;
         }

         // Check file size
         if ($_FILES["hinh"]["size"] > 700000) {
             echo "Sorry, your file is too large.";
             $uploadOk = 0;
         }

         // Allow certain file formats
         if (
             $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
             && $imageFileType != "gif"
         ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
             $uploadOk = 0;
         }

         // Check if $uploadOk is set to 0 by an error
         if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
         } else {
             if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                 echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
             } else {
                 echo "Sorry, there was an error uploading your file.";
             }
         }

         if($uploadOk == 1){
             return true;
         }else{
             return false;
         }
    }
    public function edit()
    {
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {



            $query = "UPDATE hanghoa SET tenhh=?, dongia=?,giamgia=?,hinh=?,Nhom=?,maloai=?,dacbiet=?,soluotxem=?,mota=?,soluongton=?,mausac=?,size=? WHERE mahh=?";
            $stmt = $this->conn->prepare($query);
            $tenhh = $_POST['tenhh'];
            $dongia = (float)$_POST['dongia'];
            $giamgia = (float)($_POST['giamgia']);
            $hinh = $_FILES['hinh']['name'];
            $nhom = (int)$_POST['Nhom'];
            $maloai= (int)($_POST['maloai']);

            $dacbiet = (int)($_POST['dacbiet']);
            $soluotxem = (int)($_POST['soluotxem']);
            $mota = $_POST['mota'];
            $soluongton = (int)($_POST['soluongton']);
            $mausac = $_POST['mausac'];
            $size = (int)($_POST['size']);
            $mahh = (int)($_POST['mahh']);
            $arr = array($tenhh, $dongia, $giamgia, $hinh, $nhom,$maloai, $dacbiet, $soluotxem, $mota, $soluongton, $mausac, $size, $mahh);

            $stmt->execute($arr);

            //=====================================================
          //upload file
          $PA= new productAdmin();
            $uploadOk = $PA->uploadFile();


            //KET LUAN

            if ($stmt->rowCount() > 0 && $uploadOk == true) {
                echo "<script>Swal.fire(
                        'Update succsessful!',
                        'You clicked the button!',
                        'success'
                      )</script>";
                echo "<script>window.location.href='index.php?controller=productAdmin&action=product';</script>";
            } else {
                echo "<script>Swal.fire(
                    'Add fail!',
                    'You clicked the button!',
                    'error'</script>";
            }
        }
    }

    function add(){
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            $query = "INSERT INTO hanghoa (tenhh, dongia, giamgia, hinh, Nhom, maloai, dacbiet, soluotxem,ngaylap, mota, soluongton, mausac, size) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $tenhh = $_POST['tenhh'];
            $dongia = (float)$_POST['dongia'];
            $giamgia = (float)($_POST['giamgia']);
            $hinh = $_FILES['hinh']['name'];
            $nhom = (int)$_POST['Nhom'];
            $maloai= (int)($_POST['maloai']);
            $dacbiet = (int)($_POST['dacbiet']);
            $soluotxem = (int)($_POST['soluotxem']);
            $ngaylap=date("Y-m-d");
            $mota = $_POST['mota'];
            $soluongton = (int)($_POST['soluongton']);
            $mausac = $_POST['mausac'];
            $size = (int)($_POST['size']);
            $arr = array($tenhh, $dongia, $giamgia, $hinh, $nhom, $maloai, $dacbiet, $soluotxem, $ngaylap,$mota, $soluongton, $mausac, $size);
            
            
            $stmt->execute($arr);
           
            if($stmt->rowCount() > 0){
                echo "<script>Swal.fire(
                        'Add succsessful!',
                        'You clicked the button!',
                        'success'
                      )</script>";
                      
            }
            //=====================================================
            //load file vao thu muc upload
            $PA= new productAdmin();
            $uploadOk = $PA->uploadFile();
            if($stmt->rowCount() > 0 && $uploadOk == true){
                echo "<script>Swal.fire(
                        'Add succsessful!',
                        'You clicked the button!',
                        'success'
                      )</script>";
                echo "<script>window.location.href='index.php?controller=productAdmin&action=product';</script>";
            
            }
            else{
            echo "<script>Swal.fire(
                'Add fail!',
                'You clicked the button!',
                'error'</script>";
            }
        }
    }
}
