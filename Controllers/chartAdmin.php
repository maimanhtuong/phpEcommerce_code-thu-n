<?php
    $action= $_GET['action']??'chart';
    switch ($action){
        case 'chart':
            include 'Views/admin/chart.php';
            break;
        
        
    }
?>