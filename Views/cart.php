<?php
echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";
?>
<div class="table-responsive">

  <table class="table table-bordered">
    <thead>
      <tr>
        <td colspan="5">
          <h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2>
        </td>
      </tr>
      <tr class="table-success">
        <th>Số TT</th>
        <th>Thông Tin Sản Phẩm</th>
        <th>Tùy Chọn Của Bạn</th>
        <th colspan="2">Giá</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 0 ?>
      <?php foreach ($_SESSION['cart'] as $key => $value) {$i++?>
        <form method="post" >
          <tr>
            <td><?php echo $i; ?></td>
            <td class="d-flex"><img width="50px" height="50px" src="./Content/image/<?php echo $value['hinh'] ?>">
              <p><?php echo $value['tenhh'] ?></p>
            </td>
            <td>Màu:<?php echo $value['mausac'] ?><br>
              Size: <?php echo $value['size'] ?></td>
            <td>Đơn Giá:<?php echo number_format($value['dongia']) ?>
              - Số Lượng: <input min=1 type="text" name="sl" id="sl" value="<?php echo $value['soluong']?>"/><br />
              <p style="float: right;"> Thành Tiền: <u><?php $thanhtien = $value['dongia'] * $value['soluong'];
                                                        echo number_format($thanhtien); ?>đ</u></p>
            </td>
            <td><a class="btn btn-danger" href="index.php?controller=cart&action=delete&id=<? echo $value['mahh'] ?>">Xóa</a>
             
              <button class="btn btn-info" type="submit" name="sua" formaction="index.php?controller=cart&action=update&id=<?php echo $value['mahh'] ?>">Sửa</button>
            <?php }; ?>
            </td>
          </tr>
          <tr>
        
        <td colspan="3">
          <b>Tổng Tiền:
          </b>
        </td>
        <td style="float: right;">
          <b> <u><?php
                  $tongtien = 0;
                  foreach ($_SESSION['cart'] as $key => $value) {
                    $tongtien += $value['dongia'] * $value['soluong'];
                  }
                  echo number_format($tongtien);
                  ?>đ</u></b>
        </td>

        <td><button type="submit" formaction="index.php?controller=order&action=order"  name="order">Thanh toán</button></td>
        </tr>
      </form>
    </tbody>
  </table>

</div>
</div>