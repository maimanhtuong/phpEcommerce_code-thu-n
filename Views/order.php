<?php
  $order= new order();
  $result=$order->getByName($_SESSION['username']);
  
 
?>
<div class="table-responsive">

  <form  method="post">
    <table class="table table-bordered" border="0">


      <tr>
        <td colspan="4">
          <h2 style="color: red;">HÓA ĐƠN</h2>
        </td>
      </tr>
      <tr>
        <td colspan="2">Số Hóa đơn: </td>
        <td colspan="2"> Ngày lập:<?php echo date('d/m/Y') ?></td> 
      </tr>
      <tr>
        <td colspan="2">Họ và tên:<?php echo $result['tenkh']?></td>
        <td colspan="2">Mã khách hàng:<?php echo $result['makh']?></td>
      </tr>
      <tr>
        <td colspan="2">Địa chỉ:<?php echo $result['diachi']?> </td>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">Số điện thoại:<?php echo $result['sodienthoai']?> </td>
        <td colspan="2"></td>
      </tr>
      
    </table>
    <!-- Thông tin sản phầm -->
    <table class="table table-bordered">
      <thead>

        <tr class="table-success">
          <th>Số TT</th>
          <th>Thông Tin Sản Phẩm</th>
          <th>Tùy Chọn Của Bạn</th>
          <th>Giá</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $i = 1;
        if (isset($_SESSION['cart'])) {
          foreach ($_SESSION['cart'] as $key => $value) {
        ?>
            <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $value['tenhh']?></td>
              <td>Màu:<?php echo $value['mausac']?> Size:<?php echo $value['size']?> </td>
              <td>Đơn Giá:<?php echo $value['dongia']?> - Số Lượng:<?php echo $value['soluong']?> <br />
              </td>
            </tr>
        <?php }
        } ?>
        <tr>
          <td colspan="3">
            <b>Tổng Tiền</b>
            
          </td>
          <td style="float: right;">
          <?php 
              $tongtien = 0;
              foreach ($_SESSION['cart'] as $key => $value) {
                $tongtien += $value['soluong'] * $value['dongia'];
              }
              $tongtien= number_format($tongtien);
              echo $tongtien;
            ?>
            <b> <sup><u>đ</u></sup></b>
          </td>

        </tr>
      </tbody>
    </table>
    <button class="justify-center btn btn-danger" type="submit" formaction="index.php?controller=order&action=addOrder&tongtien=<?php echo $tongtien?>" >Đặt hàng</button>
  </form>
</div>
</div>