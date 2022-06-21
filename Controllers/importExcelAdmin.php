<?php
    $action= $_GET['action']??'importView';
    switch($action){
        case 'importView':
         include 'Views/admin/importExcelAdmin.php';
         break;
         case 'import':
             $fileExcel= new importExcelAdmin();
             $fileExcel->import();
             break;
    }
?>