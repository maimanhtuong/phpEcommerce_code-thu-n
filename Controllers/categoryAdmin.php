<?php
   $action= $_GET['action']??'category';
   switch($action){
       case 'category':
        include 'Views/admin/categoryAdmin.php';
        break;
        case 'editView':
            include 'Views/admin/edit_categoryAdmin.php';
            break;
        case 'edit':
            $CA= new categoryAdmin();
            $CA->edit();
            break;
        case 'delete':
            $CA= new categoryAdmin();
            $CA->delete();
            break;   
   }
