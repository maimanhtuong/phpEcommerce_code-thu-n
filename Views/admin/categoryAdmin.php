<?php
   $categories= new categoryAdmin();
   $result=$categories->renderAll(); 
?>
<h2>QUẢN LÝ LOẠI HÀNG HÓA</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên loại</th>
                        <th>ID Menu</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $category) { ?>
                        <tr>
                            <td><?php echo $category['maloai']; ?></td>
                            <td><?php echo $category['tenloai']; ?></td>
                            <td><?php echo $category['idmenu']; ?></td>
                            <td>
                                <a href="index.php?controller=categoryAdmin&action=editView&id=<?php echo $category['maloai'] ?>" class="btn btn-primary">Sửa</a>
                            
                                <a href="index.php?controller=categoryAdmin&action=delete&id=<?php echo $category['maloai'] ?>" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>