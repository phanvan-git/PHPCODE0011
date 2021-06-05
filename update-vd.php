
<?php
include_once __DIR__ .'/connect.php';
$ten=$_POST['ten'];
$ma=$_POST['ma'];

$sql = <<<EOT
UPDATE hinhthucthanhtoan
SET httt_ten = '$ten'
WHERE httt_ma =$ma;


EOT;

// var_dump($sql);
// die;

mysqli_query($conn,$sql);


?>
