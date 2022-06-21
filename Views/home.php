
<link rel="stylesheet" href="./Content/CSS/chat.css">
<link rel="stylesheet" href="./Content/CSS/style1.css">
<?php 
       include_once("Views/bot2.php");
       ?>
<!--Section: Examples-->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row">
        <div class="col-lg-8 text-right">
            <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM MỚI NHẤT</h3>
        </div>
        <div class="col-lg-4 text-right mt-4">
            <a href="index.php?action=home&act=sanpham">
                <span style="color: gray;">Xem chi tiết</span>
        </div>
        </a>


    </div>
    <!--Grid row-->
    <div class="row">

        <!-- đỗ sản phẩm mới nhất ở đây, muốn đỗ được 8 sp, mà 8sp mới nằm trong lớp hàng hóa
        muốn xài được pt của lớp hàng hóa thì phải tạo đối tượng, đối tượng->pt
     -->
        <?php
        $hh = new HangHoa();
        $results = $hh->getNewest(); // trả về là 8 sp, 8 sản phẩm này gán cho $results
        while ($set = $results->fetch()) :
            //$set=[21,giay cao got,60000,0,24,jpg,3,7,1.....]
            // {
        ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">

                <div class="view overlay z-depth-1-half">
                    <img src="<?php echo 'Content/image/' . $set['hinh']; ?>" class="img-fluid" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h5 class="my-4 font-weight-bold" style="color: red;"><?php echo number_format($set['dongia']); ?><sup><u>đ</u></sup></br>
                </h5>
                <a href="index.php?controller=home&action=detail&id=<?php echo $set['mahh']; ?>">
                    <span><?php echo $set['tenhh'] . '-' . $set['mausac']; ?></span></br></a>
                <button class="btn btn-outline-info"> <a href="index.php?controller=home&action=detail&id=<? echo $set['mahh'] ?>">Detail</a> </button>

                <h5>Số lượt xem:<?php echo $set['soluotxem']; ?></h5>

            </div>
        <?php
        // }
        endwhile;
        ?>
    </div>

    <!--Grid row-->

</section>
<!-- end sản phẩm mới nhất -->
<!-- sản phẩm khuyến mãi -->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row">
        <div class="col-lg-8 text-right">
            <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM KHUYẾN MÃI</h3>
        </div>
        <div class="col-lg-4 text-right mt-4">
            <a href="index.php?action=home&act=khuyenmai">
                <span style="color: gray;">Xem chi tiết</span>
        </div>
        </a>

    </div>
    <!--Grid row-->
    <div class="row">
        <?php
        $results = $hh->getSales();
        while ($set = $results->fetch()) :
        ?>

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">

                <div class="view overlay z-depth-1-half">
                    <img src="<?php echo 'Content/image/' . $set['hinh']; ?>" class="img-fluid" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h5 class="my-4 font-weight-bold">
                    <font color="red"><?php echo number_format($set['giamgia']); ?><sup><u>đ</u></sup></font>
                    <strike><?php echo number_format($set['dongia']); ?></strike><sup><u>đ</u></sup>
                </h5>

                <a href="">
                    <span><?php echo $set['tenhh'] . '-' . $set['mausac']; ?></span></br></a>
                <button class="btn btn-outline-info"> <a href="index.php?controller=home&action=detail&id=<? echo $set['mahh'] ?>">Detail</a> </button>
                <h5>Số lượt xem:<?php echo $set['soluotxem']; ?></h5>

            </div>
        <?php
        endwhile;
        ?>
    </div>

    <!--Grid row-->

</section>
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row">
        <div class="col-lg-8 text-right">
            <h3 class="mb-5 font-weight-bold" style="color: red;">TẤT CẢ SẢN PHẨM</h3>
        </div>
        <div class="col-lg-4 text-right mt-4">


        </div>
        <!--Grid row-->
        <div class="row">
            <?php
            $page = $_GET['page'] ?? 1;
            $limit = 5;
            $NumProduct = $hh->getNumProduct();
            $NumPage = ceil($NumProduct / $limit);
            $results = $hh->getListByPage($page, $limit);
            while ($set = $results->fetch()) :
            ?>

                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-3 text-left">

                    <div class="view overlay z-depth-1-half">
                        <img src="<?php echo 'Content/image/' . $set['hinh']; ?>" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>

                    <h5 class="my-4 font-weight-bold">
                    <font color="red">
                        <?php if ($set['giamgia'] > 0) {
                            echo number_format($set['giamgia']);
                            echo "<sup>đ</sup>";

                            $dongia=number_format($set['dongia']);
                            echo "  <u style='text-decoration: line-through;color: black;font-size:medium'>${dongia}</u>";
                            echo "<sup>đ</sup>";

                        } else {
                            $dongia = number_format($set['dongia']);
                            echo $dongia;
                            echo "<sup>đ</sup>";
                        }; ?>
                    </font> 
                    </h5>

                    <a href="">
                        <span><?php echo $set['tenhh'] . '-' . $set['mausac']; ?></span></br></a>
                    <button class="btn btn-outline-info"> <a href="index.php?controller=home&action=detail&id=<? echo $set['mahh'] ?>">Detail</a> </button>
                    <h5>Số lượt xem:<?php echo $set['soluotxem']; ?></h5>

                </div>
            <?php
            endwhile;


            ?>

           




        </div>

        <!--Grid row-->
        <ul class="pagination">
            <?php
            if($page>1 && $NumPage>1){
                echo "<li class='page-item'><a class='page-link' href='index.php?controller=home&action=home&page=".($page-1)."'>Previous</a></li>";
            }
            ?>
            <?php for ($i = 0; $i < $NumPage; $i++) { ?>
                <li class="page-item"><a class="page-link" href="index.php?controller=home&action=home&page=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
            <?php } ?>
            <?php
            if($page<$NumPage && $NumPage>1){
                echo "<li class='page-item'><a class='page-link' href='index.php?controller=home&action=home&page=".($page+1)."'>Next</a></li>";
            }
            ?>
        
        </ul>

</section>


