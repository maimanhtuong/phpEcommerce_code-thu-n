<?php
    $ctr=$_GET['controller']??'category';
    $action= $_GET['action']??'category';
    $id= $_GET['id']??'';

    switch($action){
        case 'category':
            include 'Views/productByCategory.php';
            break;
          
    }
?>