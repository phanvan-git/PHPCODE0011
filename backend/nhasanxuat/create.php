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
        <form action="" method="post">
        
        <div class="form-group">
            <label for="exampleInputEmail1">Thêm nhà sx</label>
            <input type="text" class="form-control" name="nsx_ten" aria-describedby="emailHelp">
          
        </div>
        <button class="btn btn-primary" name="btnnsx">Thêm</button>
        
        
        </form>
        <?php
         include_once __DIR__.'/../../connect.php';
        if(isset($_POST['btnnsx'])){

            $nsx_ten=$_POST['nsx_ten'];
            $sql="INSERT INTO nhasanxuat(nsx_ten)VALUES('$nsx_ten')";
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