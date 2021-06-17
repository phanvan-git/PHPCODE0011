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
        


             <?php
             include_once __DIR__.'/../../connect.php';
             $sqlloaisp="SELECT * FROM loaisanpham";
             $resultlsp=mysqli_query($conn,$sqlloaisp);
            $dataloaisp=[];
            while($row=mysqli_fetch_array($resultlsp, MYSQLI_ASSOC)){
                $dataloaisp[]= array(
                    'lsp_ma' => $row['lsp_ma'],
                    'lsp_ten' => $row['lsp_ten'],
                   

                );
            }

            ?>



             <form action="" name="fromadd" method="post">
             
             <div class="form-group">
                <label for="exampleInputEmail1">Sản Phẩm mã</label>
                <input type="text" class="form-control" id="sp_ma" aria-describedby="emailHelp" name="sp_ma">
            
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="text" class="form-control" id="sp_ten" aria-describedby="emailHelp" name="sp_ten">
            
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Gía sản phẩm</label>
                <input type="text" class="form-control" id="sp_gia" aria-describedby="emailHelp" name="sp_gia">
            
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Gía cũ sản phẩm</label>
                <input type="text" class="form-control" id="sp_giacu" aria-describedby="emailHelp" name="sp_giacu">
            
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Sản phẩm ô tả ngắn</label>
                <textarea class="form-control" id="sp_motangan"  name="sp_motangan"> </textarea>
            
            </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Sản phẩm ô tả chi tiết</label>
                <textarea class="form-control" id="sp_mota_chitiet"  name="sp_mota_chitiet"> </textarea>
            
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ngày cập nhật sản phẩm</label>
                <input type="text" class="form-control" id=" sp_ngaycapnhat" aria-describedby="emailHelp" name=" sp_ngaycapnhat">
            
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                <input type="text" class="form-control" id="sp_soluong" aria-describedby="emailHelp" name="sp_soluong">
            
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Loại sản phẩm</label>
 
                <select name="lsp_ma" id="lsp_ma" class="form-control">
                <?php foreach($dataloaisp as $lsp):   ?>
                <option value="<?php $lsp['lsp_ma'] ?>"> <?=  $lsp['lsp_ten']  ?></option>


                <?php endforeach;  ?>

                </select>
                
             
            
            </div>
            <button class="btn btn-primary" name="btnsp">Thêm LSP</button>
             
             </form>

           <?php
            

           if(isset($_POST['btnsp'])){
            
            $sp_ten=$_POST['sp_ten'];
            $sp_gia=$_POST['sp_gia'];
            $sp_giacu=$_POST['sp_giacu'];
            $sp_motangan=$_POST['sp_motangan'];
            $sp_mota_chitiet=$_POST['sp_mota_chitiet'];
            $sp_ngaycapnhat=$_POST['sp_ngaycapnhat'];
            $sp_soluong=$_POST['sp_soluong'];
            $lsp_ma=$_POST['lsp_ma'];
            $nsx_ma=NULL;
            $km_ma=NULL;
            $sqlsp=<<<EOT
            INSERT INTO sanpham
            ( sp_ten, sp_gia, sp_giacu, sp_mota_ngan, sp_mota_chitiet, sp_ngaycapnhat, sp_soluong, lsp_ma, nsx_ma, km_ma)
            VALUES ( $sp_ten, $sp_gia,$sp_giacu,$sp_motangan, $sp_mota_chitiet, $sp_ngaycapnhat, $sp_soluong,$lsp_ma, $nsx_ma,$km_ma)



EOT;
            mysqli_query($conn,$sqlsp);
            echo '<script>location.href="index.php</script>';
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