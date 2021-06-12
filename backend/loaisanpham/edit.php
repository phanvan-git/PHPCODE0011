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

        $lsp_ma=$_GET['lsp_ma'];
        $sqlselect="SELECT * FROM loaisanpham WHERE lsp_ma=$lsp_ma;";
        $resultselect=mysqli_query($conn,$sqlselect);
        $loaisanpham= mysqli_fetch_array($resultselect,MYSQLI_ASSOC);

        ?>
        <form action="" method="post">
        
        <div class="form-group">
            <label for="exampleInputEmail1">Mã</label>
            <input type="text" class="form-control" name="lsp_ma" aria-describedby="emailHelp" value="<?=$loaisanpham['lsp_ma']   ?>">
            <label for="exampleInputEmail1">Loại sản phẩm</label>
            <input type="text" class="form-control" name="lsp_ten" aria-describedby="emailHelp" value="<?=$loaisanpham['lsp_ten']   ?>">
          
        </div>
        <button class="btn btn-primary" name="btnnsx">Thêm</button>
        
        
        </form>
        <?php

            if(isset($_POST['btnnsx'])){
                $lsp_ma=$_POST['lsp_ma'];
                $lsp_ten=$_POST['lsp_ten'];
                $sqlupdate="UPDATE loaisanpham SET lsp_ten='$lsp_ten' WHERE lsp_ma='$lsp_ma'";
                mysqli_query($conn,$sqlupdate);
                echo'<script>location.href="index.php";</script>';




            }



        ?>





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