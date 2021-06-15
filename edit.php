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
            include_once __DIR__ .'/../../connect.php';
            $id=$_GET['id'];
            $sqledit=<<<EOT
            SELECT * FROM nhasanxuat WHERE nsx_ma=$id;
EOT;
            $resulteidt=mysqli_query($conn,$sqledit);
            $rowedit=mysqli_fetch_array($resulteidt,MYSQLI_ASSOC);

        ?>
         <form action="" method="post" id="frmedit">
        
        <div class="form-group">
            <label for="exampleInputEmail1">Edit mã</label>
            <input type="text" class="form-control" name="nsx_ma" aria-describedby="emailHelp " value="<?= $rowedit['nsx_ma']?>">
          
            <label for="exampleInputEmail1">Edit tên</label>
            <input type="text" class="form-control" name="nsx_ten" aria-describedby="emailHelp " value="<?= $rowedit['nsx_ten']  ?>">
          
        </div>
        <button class="btn btn-primary" name="btnnsx">Thêm</button>
        
        
        </form>
        <?php
       
        if(isset($_POST['btnnsx'])){
            $nsx_ma=$_POST['nsx_ma'];
            $nsx_ten=$_POST['nsx_ten'];
            $sqlupdate=<<<EOT
            UPDATE nhasanxuat
            SET nsx_ten='$nsx_ten'
            WHERE nsx_ma='$nsx_ma'


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

<script>
$(function(){
    $('#frmcreate').validate({
        rules:{
            nsx_ten:{
                required:true,
                minlength:3,
                maxlength:10
            }
           



        },
        messages:{
           nsx_ten:{
            required: "Vui lòng nhập thông tin nhà sản xuất",
            minlength: "Vui long nhập ít nhất 3 ký tự",
            maxlength: "Vui lòng không chỉnh sửa quá 10 ký tự"
           }




        },
        errorElement: "em",
        errorPlacement: function(error, element) {
            // Thêm class `invalid-feedback` cho field đang có lỗi
            error.addClass("invalid-feedback");
            if (element.prop("type") === "checkbox") {
            error.insertAfter(element.parent("label"));
            } else {
            error.insertAfter(element);
            }
        },
        success: function(label, element) {},
        highlight: function(element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }






    });




});





</script>

</body>
</html>