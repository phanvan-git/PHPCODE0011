
<?php
include_once __DIR__ .'/connect.php';
$ten=$_POST['ten'];
$sql = <<<EOT
INSERT INTO hinhthucthanhtoan(httt_ten)VALUE('$ten');


EOT;
mysqli_query($conn,$sql);

echo ("Da them thanh cong!");

?>
