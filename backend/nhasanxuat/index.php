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
             $sql="SELECT * FROM nhasanxuat";
             $result=mysqli_query($conn,$sql);
            $data=[];
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $data[]= array(
                    'nsx_ma' => $row['nsx_ma'],
                    'nsx_ten' => $row['nsx_ten']

                );
            }

            
            ?>
            <a class="btn btn-primary" href="create.php">Thêm mới NSX</a>
             <table class="table table-bordered">
        
                <tr class="text-center">
                    <th>Mã số</th>
                    <th>Tên NSX</th>
                    <th>Action</th>
                </tr>
                <?php foreach($data as $nsx): ?>
                <tr class="text-center">
                    <td><?= $nsx['nsx_ma'] ?></td>
                    <td><?= $nsx['nsx_ten'] ?></td>
                    <td>
                        <a class="btn btn-danger" href="delete.php?id=<?=$nsx['nsx_ma']?>">Xoa</a>
                        <a href="edit.php?id=<?=$nsx['nsx_ma']?>" class="btn btn-primary">Sua</a>
                    </td>
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