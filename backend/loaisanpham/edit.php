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

        $id=$_GET['id'];
        $sqledit=<<<EOT
        SELECT * FROM loaisanpham WHERE lsp_ma=$id;


EOT;
        $resultedit=mysqli_query($conn,$sqledit);
        $rowedit=mysqli_fetch_array($resultedit,MYSQLI_ASSOC);
       

        ?>
        <form action="" name="fromadd" method="post">
             
            <div class="form-group">
            <label for="exampleInputEmail1">Edit mã</label>
            <input type="text" class="form-control" id="lsp_ma" aria-describedby="emailHelp" name="lsp_ma" value="<?=$rowedit['lsp_ma']   ?>">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Edit tên</label>
            <input type="text" class="form-control" id="lsp_ten" aria-describedby="emailHelp" name="lsp_ten" value="<?=$rowedit['lsp_ten']   ?>">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Edit mô tả</label>
            <textarea class="form-control" name="lsp_mota" "><?=$rowedit['lsp_mota']   ?> </textarea>
            </div>
            <button class="btn btn-primary" name="btnlsp">Thêm LSP</button>
             
         </form>

        <?php
        if(isset($_POST['btnlsp'])){
            $lsp_ma=$_POST['lsp_ma'];
            $lsp_ten=$_POST['lsp_ten'];
            $lsp_mota=$_POST['lsp_mota'];
            $sqlupdate=<<<EOT
            UPDATE loaisanpham
            SET lsp_ten='$lsp_ten',lsp_mota='$lsp_mota'
            WHERE lsp_ma='$lsp_ma'


EOT;
            mysqli_query($conn,$sqlupdate);
            echo'<script>location.href="index.php"</script>';
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