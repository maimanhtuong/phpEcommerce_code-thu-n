<?php
    $ctrl= $_GET['controller']??'order';
    $action= $_GET['action']??'addOrder';
    switch($action){
        
        case 'order':
            if(isset($_SESSION['username'])){
                
                include 'Views/order.php';
            }
            else{
                echo "<script>alert('Bạn phải đăng nhập để thực hiện chức năng này')</script>";
                echo "<script>window.location.href='index.php?controller=login&action=loginView'</script>";
            }
            break;
        case 'addOrder':
            if(isset($_SESSION['username'])){
                echo '<pre>';
                var_dump($_SESSION);
                echo '<pre>';

                $db=new order();
                $smtm=$db->addOrder(($_GET['tongtien']),$_SESSION['makh']);
                
                if($smtm){
                    include 'Views/orderSuccess.php';
                    unset($_SESSION['cart']);
                }
                else{
                    echo "<script>alert('Đặt hàng thất bại')</script>";
                    echo "<script>window.location.href='index.php?controller=order&action=orderView'</script>";
                }
                
            }
            
            break;
        }
    
?>