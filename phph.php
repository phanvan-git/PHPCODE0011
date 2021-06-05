<?php


$kh_1= [
   "kh_ht" => 'a',
   "kh_gt" => 'nam',
   "kh_diemlt" => 9,
   "kh_diemth" => 9,

];
$kh_2= [
   "kh_ht" => 'b',
   "kh_gt" => 'nu',
   "kh_diemlt" => 10,
   "kh_diemth" => 10,

];

$list= [
    $kh_1,
    $kh_2
];


?>


<ul>
<?php foreach($list as $l): ?>
<li>Hoten: <?= $l["kh_ht"]  ?></li>
<li>Gioitinh: <?= $l["kh_gt"]  ?></li>
<?php endforeach ?>
</ul>
<br>

<ul>
<?php for($i=0; $i<count($list) ;$i++): ?>
<li>Hoten: <?= $list[$i]["kh_ht"]  ?></li>
<li>Gioitinh: <?= $list[$i]["kh_gt"]  ?></li>

<?php endfor ?>
</ul>


