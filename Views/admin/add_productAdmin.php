
<div class="container">
<form data-parsley-validate action="index.php?controller=productAdmin&action=add" enctype="multipart/form-data" method='post'>
  
  <div class="input-group mb-3">
    
    <div class="input-group">
      <span class="input-group-text ">Tên sản phẩm</span>
      <input type="text" name="tenhh" class="form-control"  required >
    </div>

  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Giá</span>
    </div>
    <input type="number" name="dongia" class="form-control"  >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Giảm giá</span>
    </div>
    <input type="number" name="giamgia" class="form-control"  >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Hình ảnh</span>
    </div>
   
    <input type="file" name="hinh" required >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Nhóm</span>
    </div>
    <input type="number" name="Nhom" class="form-control" >
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Mã loại</span>
    </div>
    <select name="maloai" class="form-control" >
      <?php
        $hh= new hanghoa();
        $result= $hh->getListMaLoai();
       
        while($row= $result->fetch()){
      ?>
      <option value="<?php echo $row['maloai']?>" selected><?php echo $row['tenloai']?></option>
      <?php } ?>

    </select>
  </div>
  
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Đặc biệt</span>
    </div>
    <input type="text" name="dacbiet" class="form-control" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Lượt xem</span>
    </div>
    <input type="number" name="soluotxem" class="form-control" >
  </div>
  
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Mô tả</span>
    </div>
    <input type="text" name="mota" class="form-control" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Số lượng tồn</span>
    </div>
    <input type="number" name="soluongton" class="form-control"  >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Màu sắc</span>
    </div>
    <input type="text" name="mausac" class="form-control"  >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Size</span>
    </div>
    <input type="number" name="size" class="form-control"  >
  </div>
  <button class="btn btn-primary mb-5" type="submit">Add</button>

</form>
</div>




                        
                        