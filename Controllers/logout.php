<?php
 $ctrl= $_GET['controller']??'logout';
switch($ctrl){
    case 'logout':
        echo "<script>alert('log out your account?')</script>";
        unset($_SESSION['username']);
        unset($_SESSION['vaitro']);
        unset($_SESSION['password']);
        echo "<script>window.location.href='index.php'</script>";
        break;
}
?>
