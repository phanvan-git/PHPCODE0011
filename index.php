<?php
echo '<font style="color:red">Hello wworld</font> ';

$name ='Phan van ';
$job= 'student';
echo '<br/> name: '.$name. ' job ' .$job .'<br/>';


$old ="22";
echo "I am <strong>$old</strong>";
//herd doc
$sql =<<<EOT
SELECT lsp.lsp_ten, COUNT(*) sl, SUM(sp.sp_soluong) tong
FROM sanpham AS sp
JOIN loaisanpham AS lsp ON sp.lsp_ma = lsp.lsp_ma
GROUP BY lsp.lsp_ten
HAVING SUM(sp.sp_soluong)>50

EOT;
echo "<br/> info: $sql";


// echo"<br/> ////////jjjjjjj//////////////////////////////////";
// $ten='van';
// $ngaysinh="13";
// $cmnd="5454543";
// $tuoi="22";



// echo '<ul>';
// echo "<li>ten minh la: $ten</li>";
// echo "<li>ten minh la: $ngaysinh</li>";
// echo "<li>ten minh la: $cmnd</li>";
// echo "<li>ten minh la: $tuoi</li>";
// echo '</ul>';
echo"<br/> ///////////////////////////////////////////////";

$chitiet  =array(
    'ct_ten'    =>  'van',
    'ct_ngaysinh'    =>  '15',
    'ct_cmnd'    =>  '32122',
    'ct_tuoi'    =>  '21'
);
$chitiet1  = [
    'ct_ten'    =>  'van',
    'ct_ngaysinh'    =>  '15',
    'ct_cmnd'    =>  '32122',
    'ct_tuoi'    =>  '21'
];
$chitiet2  = [
    'ct_ten'    =>  'van',
    'ct_ngaysinh'    =>  '15',
    'ct_cmnd'    =>  '32122',
    'ct_tuoi'    =>  '21'
];
$dskh = [
    $chitiet,
    $chitiet1,
    $chitiet2
];

?>
<table border="1">
    <tr>
       <th>Ten</th> 
       <th>ngay sinh</th> 
       <th>cmnd</th> 
       <th>tuoi</th> 
    </tr>
    <?php foreach ($dskh as $ds) { ?>
    <tr>
        <td><?= $ds['ct_ten'] ?></td>
        <td><?= $ds['ct_ngaysinh'] ?></td>
        <td><?= $ds['ct_cmnd'] ?></td>
        <td><?= $ds['ct_ten'] ?></td>
    </tr>
    <?php } ?>
</table>