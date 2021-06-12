<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- dinh dang cho toan he thong start -->
   <?php
    include_once __DIR__.'/../layout/style.php';

    ?>
   <!-- dinh dang cho toan he thong end -->
   <!-- dinh dang cho toan he thong meta start -->
   <?php
    include_once __DIR__.'/../layout/meta.php';

    ?>
   <!-- dinh dang cho toan he thong meta end -->
<style>

div{
    border:1px solid red;
}

</style>
</head>
<body>
    
<?php
    include_once __DIR__.'/../layout/partials/header.php';

?>

<!-- container-start -->
<div class="container-fluid">

    <div class="row">
        <!-- slidebar-start -->
        <?php
             include_once __DIR__.'/../layout/partials/slidbar.php';

        ?>
        <!-- slidebar-end -->
        <!-- main-start -->
       

        <div class="col-md-9">
           <?php
             include_once __DIR__.'/../../connect.php';
             $sql="SELECT * FROM loaisanpham";
             $result=mysqli_query($conn,$sql);
            $data=[];
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $data[]= array(
                    'lsp_ma' => $row['lsp_ma'],
                    'lsp_ten' => $row['lsp_ten']

                );
            }

            ?>
            <a class="btn btn-primary" href="create.php">Thêm sản phẩm</a>
            <table class="table table-bordered">
            <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Action</th>
            
            </tr>
            <?php foreach($data as $lsp): ?>
            <tr>
            <td><?= $lsp['lsp_ma']   ?></td>
            <td><?= $lsp['lsp_ten']   ?></td>
            <td><a class="btn btn-primary" href="edit.php?lsp_ma=<?= $lsp['lsp_ma']   ?>">Sua</a>
            <a class="btn btn-danger" href="delete.php?lsp_ma=<?=$lsp['lsp_ma']?>">Xoa</a></td>
            </tr>
            <?php endforeach; ?>

            
            
            
            </table>
        </div>
        
         <!-- main-end -->


    </div>



</div>
<!-- container-end -->
<div class="row">
    <!-- footer-start -->
         <?php
             include_once __DIR__.'/../layout/partials/footer.php';

        ?>
    <!-- footer-end-->



</div>



 <!-- dinh dang cho toan he thong start -->
 <?php
    include_once __DIR__.'/../layout/scripts.php';

?>
   <!-- dinh dang cho toan he thong end -->



</body>
</html>