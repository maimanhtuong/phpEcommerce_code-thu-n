<?php
    $action= $_GET['action']??'cart';
    switch ($action){
        case 'cart':
            include 'Views/cart.php';
            break;
        case 'add_cart':

            if($_SERVER['REQUEST_METHOD']=='POST'){
                $mahh=$_POST['mahh'];
                $mausac=$_POST['mausac'];
                $soluong=$_POST['soluong'];
                $size=$_POST['size'];
                $cart= new cart();
                $cart->add_item($mahh,$soluong,$mausac,$size);
                echo '<meta http-equiv="refresh" content="0;url=index.php?controller=cart&action=cart"/>';
            }
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                unset($_SESSION['cart'][$id]);
                echo '<meta http-equiv="refresh" content="0;url=index.php?controller=cart&action=cart"/>';
            }

            break;
            case 'update':
                if(isset($_SERVER['REQUEST_METHOD'])=='POST'){
                    $id=$_GET['id'];
                        $soluong=$_POST['sl'];
                        $cart= new cart();
                        $cart->updateItem($id,$soluong);
                        echo '<meta http-equiv="refresh" content="0;url=index.php?controller=cart&action=cart"/>';
                }
                break;
    }
?>