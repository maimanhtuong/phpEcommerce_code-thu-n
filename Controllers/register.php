<?php
    $ctrl = $_GET['controller']??'register';
    $action = $_GET['action']??'addUser';
    switch($ctrl){
        case 'register':
            include 'Views/register.php';
            break;
       
    }
    switch($action){
        case 'addUser':
            if(isset($_POST['submit'])){
                $tenkh=$_POST['tenkh'];
                $diachi=$_POST['diachi'];
                $sodt=$_POST['sodt'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $email=$_POST['email'];
                $cypt=md5($password);
                $db=new user();
                $db->register($tenkh,$username,$cypt,$email,$diachi,$sodt);   



            }
    }
?>