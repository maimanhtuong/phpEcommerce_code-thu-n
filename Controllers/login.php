<?php
// Path: PHP2 CO LY\Controllers\login.php
// Compare this snippet from PHP2 CO LY\Models\connect.php:


if(isset($_GET['action'])){
    $action=$_GET['action'];
}
else{
    $action='login';

    
}
switch($action){
    case 'loginView':
        include 'Views/login.php';
        break;
    case 'login':
        if(isset($_POST['submit'])){
           $username=$_POST['username'];
           $password=md5($_POST['password']);
          
        $db=new login();
          $result= $db->loginn($username,$password);
            if($result==true){
                echo "<script>Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                  )</script>";
                echo "<script>window.location.href='index.php?controller=home&action=home'</script>";
                
            }
            else{
                echo "<script>alert('Đăng nhập thất bại')</script>";
                echo "<script>window.location.href='index.php?controller=login&action=loginView'</script>";
            }
           }
        }




?>