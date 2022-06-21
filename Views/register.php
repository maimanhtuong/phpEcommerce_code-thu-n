<?php

?>

<!--  -->
<div class="container"> 
 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-5 well well-sm col-md-offset-4"> 
   <legend><a href="http://hocwebgiare.com/"><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!
   </legend> 
   <form  action="index.php?controller=register&action=addUser" method="post" class="form" role="form"> 
    <div class="row"> 
     <div class="col-xs-4 col-md-4"> <label for="tenkh">Tên Khách Hàng:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="tenkh" placeholder="Tên khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="diachi" placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="sodt" placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
     </div> 
     <div class="col-xs-8 col-md-8"><input class="form-control" name="username" placeholder="Tên đăng nhập" required="" type="text"> 
     </div> 
    </div><label for="email">Email:</label> <input class="form-control" name="email" placeholder="Email" type="email">
     <input class="form-control" name="password" placeholder="Mật khẩu" type="password">
      <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
      
   
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"> Đăng ký</button> 
   </form> 
  </div> 
 </div>
</div>