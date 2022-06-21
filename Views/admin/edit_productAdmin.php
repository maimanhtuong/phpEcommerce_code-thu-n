<?php
$id = $_GET['id'] ?? '';
$hh=new hanghoa();
$result=$hh->getById($id);
$row= $result->fetch();

?>
<div class="container">
<form data-parsley-validate action="index.php?controller=productAdmin&action=edit" enctype="multipart/form-data" method='post'>
  
  <div class="input-group mb-3">
    <div class="input-group mb-3">
      <span class="input-group-text" >Mã sản phẩm</span>
      <input type="number" name="mahh" value="<?php echo $row['mahh']?>" readonly>
    </div>
    <div class="input-group">
      <span class="input-group-text ">Tên sản phẩm</span>
      <input type="text" name="tenhh" class="form-control" value="<?php echo $row['tenhh']?>" required >
    </div>

  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Giá</span>
    </div>
    <input type="number" name="dongia" class="form-control" value="<?php echo $row['dongia']?>" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Giảm giá</span>
    </div>
    <input type="number" name="giamgia" class="form-control" value="<?php echo $row['giamgia']?>" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Hình ảnh</span>
    </div>
    <image  src="Content/image/<?php echo $row['hinh']?>" width="100px" hieght="100px" >
    <input type="file" name="hinh" required >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Nhóm</span>
    </div>
    <input type="number" name="Nhom" class="form-control" value="<?php echo $row['Nhom']?>" >
  </div>
  
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Mã loại</span>
    </div>
    <select name="maloai" class="form-control" >
      <?php
        $hh= new hanghoa();
        $result= $hh->getListMaLoai();
       
        while($rows= $result->fetch()){
      ?>
      <option value="<?php echo $rows['maloai']?>" selected><?php echo $rows['tenloai']?></option>
      <?php } ?>

    </select>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Đặc biệt</span>
    </div>
    <input type="text" name="dacbiet" class="form-control" value="<?php echo $row['dacbiet']?>" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Lượt xem</span>
    </div>
    <input type="number" name="soluotxem" class="form-control" value="<?php echo $row['soluotxem']?>" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Ngày lập</span>
    </div>
    <input type="date" name="ngaylap" class="form-control" value="<?php echo $row['ngaylap']?>" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Mô tả</span>
    </div>
    <input type="text" name="mota" class="form-control" value="<?php echo $row['mota']?>" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Số lượng tồn</span>
    </div>
    <input type="number" name="soluongton" class="form-control" value="<?php echo $row['soluongton']?>" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Màu sắc</span>
    </div>
    <input type="text" name="mausac" class="form-control" value="<?php echo $row['mausac']?>" >
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text "style="width: 130px;">Size</span>
    </div>
    <input type="number" name="size" class="form-control" value="<?php echo $row['size']?>" >
  </div>
  <button class="btn btn-primary mb-5" type="submit">Edit</button>

</form>
</div>

                        
                        