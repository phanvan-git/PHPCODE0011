<?php
$username=$_GET['username'];
$password=$_GET['password'];
$remember=isset($_GET['ghi_nho']) ? $_GET['ghi_nho']: 'no';


?>
<?= $username    ?> <br>
<?= $password    ?> <br>
<?= $remember    ?>