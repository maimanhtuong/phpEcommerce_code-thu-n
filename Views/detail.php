<?php
$id = $_GET['id'];
$conn = new hanghoa();
$result = $conn->getById($id);
while ($row = $result->fetch()) {
    $tenhh = $row['tenhh'];
    $dongia = number_format($row['dongia']);
    $mota = $row['mota'];
    $hinh = $row['hinh'];
    $mahh = $row['mahh'];
    $nhom = $row['Nhom'];
    $giamgia = number_format($row['giamgia']);
}
?>
<section class="col-12">
    <div class="">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="hidden-form" >
                    <form id="hidden-form" method="post" action="#" target="_self">
                        <input  type="hidden" name='pid' id='ninpid'>
                        <input  type="hidden" name='star' id='ninstar'>
                    </form>
                </div>
                <form action="index.php?controller=cart&action=add_cart&id=<?php echo $id ?>" method="post" class="col-12 row">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->
                    <div class="preview col-md-6">
                        <div class="tab-content">


                            <div class="tab-pane active" id=""><img src="./Content/image/<?php echo $hinh; ?>" alt="" width="200px" height="350px">
                            </div>

                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">

                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $id ?>" />
                        <h3 class="product-title"> </h3>

                            <?php

                            $rating = new rating();
                            $avg = $rating->getRating();
                            $rating_star=$avg[$id];
                            echo $avg[$id];
                            if (isset($_SESSION['username'])) {
                                $username = $_SESSION['username'];
                            }

                            if (isset($_POST['star'])) {
                                $star = $_POST['star'];
                                $pid = $_POST['pid'];
                                $rating->setRating($pid, $star, $username);
                            }
                            $rating_star=$rating->getRatingByUser($id,$username);
                            

                            ?>
                        <div id="rating" data-id="<?= $id ?>">
                            <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    $img = $i <= round($rating_star) ? 'star' : 'star-blank';
                                    echo "<img data-set='{$i}' src='./Content/image/{$img}.png' width='20px' height='20px'>";
                                }
                            ?>
                        </div>
                        <p class="product-description">

                        </p>
                        <h4 style="text-decoration:line-through; color:grey;font-size:small"></h4>
                        <?php
                        if ($giamgia != 0) {
                            echo  "Price: <h4 class='price' style='text-decoration:line-through; color:grey;font-size:small'>  $dongia đ</h4>";
                            echo   "<h4 style='color: red;'> $giamgia đ</h4>";
                        } else echo "Price: <h4 class='price' > $dongia đ</h4>"
                        ?>
                        <!-- <h4 class="price">Giá bán:<?php ($dongia) ?> đ</h4>
                        <h4 ><?php echo $giamgia ?>đ</h4> -->

                        <h5 class="colors">Màu:
                            <select name="mausac" class="form-control" style="width:150px;">
                                <?php
                                echo $nhom;
                                $colors = $conn->getListColor($nhom);
                                while ($row1 = $colors->fetch()) : ?>
                                    <option value="<?php echo $row1['mausac'] ?>"><?php echo $row1['mausac'] ?></option>
                                <?php endwhile; ?>

                            </select><br>

                            Kích Thước:
                            <?php

                            $size = $conn->getListSize($nhom);
                            while ($row = $size->fetch()) : // 35 36 37
                            ?>
                                <!-- <button type="button" onclick="chonsize(<?php echo $row['size']; ?>)" class="btn btn-default-hong btn-circle">
                                   <?php
                                    echo $row['size']; //35
                                    ?>
                                </button> -->

                                <input style="margin-left: 10px;" type="radio" name="size" value="<?php echo $row['size'] ?>" required>
                                <?php
                                echo $row['size'];
                                ?>

                            <?php endwhile; ?>
                            </br></br>
                            Số Lượng:

                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" required />


                        </h5>

                        <div class="action">

                            <button class="add-to-cart btn btn-default" type="submit" data-toggle="modal" data-target="#myModal"> MUA NGAY</button>

                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>

<script>
    var stars = {
        i: function() {
            docket = document.getElementById('rating');
            for (let i of docket.getElementsByTagName('img')) {
                i.addEventListener('click', function() {
                    let all = this.parentElement.getElementsByTagName('img');
                    let set = this.dataset.set,
                        i = 1;
                    for (let j of all) {
                        j.src = i <= set ? './Content/image/star.png' : './Content/image/star-blank.png';
                        i++;
                    }
                    document.getElementById('ninpid').value = this.parentElement.dataset.id;
                    document.getElementById('ninstar').value = set;
                    document.getElementById('hidden-form').submit();






                });
            }
        }
    }
    window.addEventListener('DOMContentLoaded', function() {
        stars.i();
    })
</script>