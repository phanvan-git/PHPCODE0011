
<?php
include_once __DIR__ .'/connect.php';

$sql = <<<EOT
SELECT *
	FROM hinhthucthanhtoan;


EOT;
$result=mysqli_query($conn,$sql);
$data=[];
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $data[]=array(
        'ma' => $row['httt_ma'],
        'ten' => $row['httt_ten']



    );



}


?>
 <table border=1>
 
 <tr>
    <td>Mã</td>
    <td>Tên</td>
 </tr>
 <?php foreach( $data as $dt): ?>
 <tr>
    <td> <?= $dt['ma']  ?></td>
    <td> <?= $dt['ten']  ?></td>
 
 </tr>
 
 <?php endforeach ?>
 </table>
