<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row">
        <div class="col-lg-8 text-right">
            <h3 class="mb-5 font-weight-bold" style="color: red;">DANH SÁCH SẢN PHẨM</h3>
        </div>


    </div>
    <!--Grid row-->
    <div class="row">
        <?php
        // $keyword = $_POST['search'] ?? '';
        // $hh = new hanghoa();
        // $results = $hh->getListSearch($keyword);

        $pByCategory=new category();
       $results= $pByCategory->getById($id);
        while ($set = $results->fetch()) :
        ?>

            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">

                <div class="view overlay z-depth-1-half">
                    <img src="<?php echo 'Content/image/' . $set['hinh']; ?>" class="img-fluid" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h5 class="my-4 font-weight-bold" style="" >
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

</section>