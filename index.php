<?php
    // include "./Models/connect.php";
    // include "./Models/hanghoa.php";
    // include "./Models/cart.php";
    // include "./Models/user.php";
    // include "./Models/login.php";
    // include "./Models/order.php";
    // include "./Models/productAdmin.php";
    spl_autoload_register('loadClass');
    function loadClass($className){
        $path = "Models/";
        include $path.$className.".php";
        
    }
    session_start();
    
    //session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- parsley -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <!-- sweet alert 2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Document</title>
<link rel="stylesheet" href="./Content/CSS/Tour.css">
<!--  -->


<body>

    <?php
    include_once("Views/layout/header.php");
    
    ?>

<div class="container">
    <div class="row">
        <?php
            $ctrl='home';
            if(isset($_GET['controller']))
            {
                $ctrl=$_GET['controller'];
            }
            
            include_once("Controllers/".$ctrl.".php");
            
            
            ?>
       </div>
      
   </div>
   <?php
    include_once("Views/layout/footer.php");

    ?>
</body>

</html>