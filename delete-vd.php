
<?php
include_once __DIR__ .'/connect.php';

$sql = <<<EOT
UPDATE hinhthucthanhtoan
SET httt_ten = 'điện thoạiiiii'
WHERE httt_ma =1;


EOT;

// var_dump($sql);
// die;

mysqli_query($conn,$sql);


?>
