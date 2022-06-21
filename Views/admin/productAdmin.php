<?php
$hh=new hanghoa();
$result=$hh->renderAll();
?>
<h2 class="justify-center">TRANG DANH SÁCH SẢN PHẨM (ADMIN)</h2>
<div >
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary"><a style="color: white;" href="index.php?controller=productAdmin&action=addView">Add Product</a></button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Giảm giá</th>
                        <th>Hình ảnh</th>
                        <th>Nhóm</th>
                        <th>Mã loại</th>
                        <th>Đặc biệt</th>
                        <th>Lượt xem</th>
                        <th>Ngày lập</th>
                        <th>Mô tả</th>
                        <th>Số lượng tồn</th>
                        <th>Màu sắc</th>
                        <th>Size</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($product=$result->fetch()) { ?>
                        <tr>
                            <td><?php echo $product['mahh']; ?></td>
                            <td><?php echo $product['tenhh']; ?></td>
                            <td><?php echo $product['dongia']; ?></td>
                            <td><?php echo $product['giamgia']; ?></td>
                            <td><img src="<?php echo 'Content/image/'.$product['hinh']; ?>" width="100px" height="100px"></td>
                            <td><?php echo $product['Nhom']; ?></td>
                            <td><?php echo $product['maloai']; ?></td>
                            <td><?php echo $product['dacbiet']; ?></td>
                            <td><?php echo $product['soluotxem']; ?></td>
                            <td><?php echo $product['ngaylap']; ?></td>
                            <td><?php echo $product['mota']; ?></td>
                            <td><?php echo $product['soluongton']; ?></td>
                            <td><?php echo $product['mausac']; ?></td>
                            <td><?php echo $product['size']; ?></td>
                            <td >
                                <a  href="index.php?controller=productAdmin&action=editView&id=<?php echo $product['mahh'] ?>" class="btn btn-primary mb-2">Sửa</a><br>
                                <a  href="index.php?controller=productAdmin&action=delete&id=<?php echo $product['mahh'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Xóa</a>
                                <!-- <a id="delete-button" class="btn btn-danger">Xóa</a> -->
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

           
        </div>
    </div>
</div>