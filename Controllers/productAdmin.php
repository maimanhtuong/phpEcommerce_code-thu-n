<?php
   $action= $_GET['action']??'product';
   switch($action){
       case 'product':
        include 'Views/admin/productAdmin.php';
        break;
        case 'editView':
            include 'Views/admin/edit_productAdmin.php';
            break;
        case 'edit':
            $PA= new productAdmin();
            $PA->edit();
            break;
        case 'delete':
            $PA= new productAdmin();
            $PA->delete();
            break; 
        case 'addView':
            include 'Views/admin/add_productAdmin.php';
            break;
        case 'add':
            $PA= new productAdmin();
            $PA->add();
            break;  
   }
