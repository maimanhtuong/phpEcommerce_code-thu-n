<?php
    $action= $_GET['action']??'mailView';

    switch($action){
        case 'mailView':
            include 'Views/admin/mailAdmin.php';
            break;
        case 'sendMail':
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $mail= new mailAdmin();
                $mail->sendMail();
            }
            break;
    }
?>