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
   <!-- dinh dang cho toan he thong start -->
   <?php
    include_once __DIR__.'/../layout/meta.php';

    ?>
   <!-- dinh dang cho toan he thong end -->
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
        


             <form action="" name="fromadd" method="post">
             
             <div class="form-group">
            <label for="exampleInputEmail1">Hình thức thanh toán </label>
            <input type="text" class="form-control" id="htt_ten" aria-describedby="emailHelp" name="httt_ten">
           
            </div>
            <button class="btn btn-primary" name="btnhttt">Thêm HTT</button>
             
             </form>

            <?php
            include_once __DIR__.'/../../connect.php';

           if(isset($_POST['btnhttt'])){
            $httt_ten=$_POST['httt_ten'];
            $sql="INSERT INTO hinhthucthanhtoan(httt_ten)VALUES ('$httt_ten')";
            mysqli_query($conn,$sql);



           header("location:index.php");
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