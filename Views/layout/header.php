<section class="col-12">

  <div class="col-12">
    <div class="row">
      <nav class="navbar navbar-expand-lg n navbar-light bg-light" style="margin-bottom: 0px; ">

        <!-- Right -->
        <ul class="navbar-nav ml-auto">
          <li>
            <form class="form-inline" action="index.php?controller=home&action=search" method="post">
              <div class="input-group">
                <div class="input-group-prepend">
                  
                  <input type="text" name="search" class="form-control" placeholder="Tìm Kiếm" />
                  <button class="input-group-text" style="height: 35px;" type="submit" id="btsearch">Tìm kiếm</button>
                </div>

            </form>
          </li>
          <li class="nav-item">
            <a href="index.php">home</a>
            <a href="index.php?controller=register" class="nav-link">Đăng Ký</a>
          </li>
         <?php
         
         if(!isset($_SESSION['username'])){
           ?>
           <li class="nav-item">
             <a href="index.php?controller=login&action=loginView" class="nav-link">Đặng Nhập</a>
           </li>
        <?php }
        
        else{
        ?> 
           <li class="nav-item">
             <a href="index.php?controller=logout" class="nav-link">Đặng Xuất</a>
           </li>
         <?php }
         ?>
         
          <li class="d-flex">
            <a href="index.php?controller=cart&action=cart" class="nav-link"><img src="./Content/image/cartx2.png" width="30px" height="30px" alt=""></a>
            
            <p style="color: red;">(
              <?php
            $a=$_SESSION['cart'];
            echo count($a);
            ?>
            )</p>
          </li>
          <li>
            <?php
            // muốn lấy giá trị trong session thì phải kiểm tra
            if (isset($_SESSION['username']) && isset($_SESSION['password'])) :

              $name = $_SESSION['username'];
              $pass = $_SESSION['password'];

            ?>
              <p>Hello
              <h4 style="color: red; margin-top: 20px; margin-left: 0px;"><?php echo $name; ?></h4>
              </p <?php
                else :
                  echo '<p style="color: red; margin-top: 20px; margin-left: 0px;"><?php echo "Xin chào"?></p>';
                  ?> <?php
                    endif;
                      ?> </li>
              <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
             Danh mục sản phẩm
            </a>
            <div class="dropdown-menu">
              <?php
              $category = new category();
              $result = $category->getAll();
              while ($row = $result->fetch()) {
              ?>
              <a class="dropdown-item" href="index.php?controller=category&action=category&id=<?php echo $row['maloai'] ?>"><?php echo $row['tenloai'] ?></a>
              <?php } ?>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
             ADMIN
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="index.php?controller=productAdmin">List Product</a>
              <a class="dropdown-item" href="index.php?controller=categoryAdmin">List Categories</a>
              <a class="dropdown-item" href="index.php?controller=chartAdmin">Chart</a>
              <a class="dropdown-item" href="index.php?controller=importExcelAdmin">Import file Excel</a>
              <a class="dropdown-item" href="index.php?controller=mailAdmin">Email</a>
            </div>
          </li>

        </ul>
      </nav>
    </div>
  </div>

</section>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./Content/image/c1.png" alt="">
    </div>
    <div class="carousel-item">
      <img src="./Content/image/c2.png" alt="">
    </div>
    <div class="carousel-item">
      <img src="./Content/image/c3.png" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<img width="100%" src="./Content/image/poster.gif" alt="">