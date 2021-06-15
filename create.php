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
        <form action="" method="post" id="frmcreate">
        
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
            $erorrs=[];
           
            if(empty($nsx_ten)){
                $erorrs['$nsx_ten'][]=[
                    'rule' => 'required',
                    'rule_value'    => true,
                    'value' => $nsx_ten,
                    'msg'   => 'Vui long nhap ten nha san xuat'
                ];
            }
            // min
            if(!empty($nsx_ten) && strlen($nsx_ten)<3){
                $erorrs['nsx_ten'][]=[
                    'rule' => 'minlength',
                    'rule_value'    => 3,
                    'value' => $nsx_ten,
                    'msg'   => 'Vui long khong nhap it hon 3 ky tu'




                ];
            }
            // max
            if(!empty($nsx_ten) && strlen($nsx_ten)>50){
                $erorrs['nsx_ten'][]=[
                    'rule' => 'maxlength',
                    'rule_value'    => 50,
                    'value' => $nsx_ten,
                    'msg'   => 'Vui long nhập không quá 50 ký tự'


                ];


            }

            if(empty($erorrs)){
                $sql="INSERT INTO nhasanxuat(nsx_ten)VALUES('$nsx_ten')";
                mysqli_query($conn,$sql);
                header("location:index.php");
            }


           

            
            



        }




        ?>
        <?php  if(!empty($erorrs)):   ?>
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
               
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
            <ul>
              <?php foreach($erorrs as $field):    ?>

                    <?php foreach($field as $rule):    ?>
                    
                        <li><?= $rule['msg']  ?></li>
                    

                    <?php endforeach;  ?>
              <?php endforeach;  ?>
            </ul>
           </div>
        <?php  endif;  ?>





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

// $(function(){
//     $('#frmcreate').validate({
//         rules:{
//             nsx_ten:{
//                 required:true,
//                 minlength:3,
//                 maxlength:50
//             }
           



//         },
//         messages:{
//            nsx_ten:{
//             required: "Vui lòng nhập thông tin nhà sản xuất",
//             minlength: "Vui long nhập ít nhất 3 ký tự",
//             maxlength: "Vui lòng không nhập không quá 50 ký tự"
//            }




//         },
//         errorElement: "em",
//         errorPlacement: function(error, element) {
//             // Thêm class `invalid-feedback` cho field đang có lỗi
//             error.addClass("invalid-feedback");
//             if (element.prop("type") === "checkbox") {
//             error.insertAfter(element.parent("label"));
//             } else {
//             error.insertAfter(element);
//             }
//         },
//         success: function(label, element) {},
//         highlight: function(element, errorClass, validClass) {
//             $(element).addClass("is-invalid").removeClass("is-valid");
//         },
//         unhighlight: function(element, errorClass, validClass) {
//             $(element).addClass("is-valid").removeClass("is-invalid");
//         }






//     });




// });





</script>

</body>
</html>