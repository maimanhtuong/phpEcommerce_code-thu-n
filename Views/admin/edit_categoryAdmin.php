<?php
$categories=new categoryAdmin();
$result=$categories->getById($_GET['id']);
$row= $result->fetch();

?>
<div class="container">
<form data-parsley-validate action="index.php?controller=productAdmin&action=edit" enctype="multipart/form-data" method='post'>
  
  <div class="input-group mb-3">
    <div class="input-group mb-3">
      <span class="input-group-text" >ID</span>
      <input type="number" name="maloai" value="<?php echo $row['maloai']?>" readonly>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text ">Tên loại</span>
      <input type="text" name="tenloai" class="form-control" value="<?php echo $row['tenloai']?>" required >
    </div>
    <div class="input-group">
      <span class="input-group-text ">Id Menu</span>
      <input type="number" name="idmenu" class="form-control" value="<?php echo $row['idmenu']?>" required >
    </div>

  
 
  
  
  <button class="btn btn-primary mb-5" type="submit">Edit</button>

</form>
</div>