<?php
$conn = mysqli_connect('localhost','root','','salomon') or die ("Khong ket noi dc csdl");



$conn->query("SET NAMES 'utf8'"); 
$conn->query("SET CHARACTER SET UTF8");  
$conn->query("SET SESSION collation_connection = 'utf8_general_ci'");


?>