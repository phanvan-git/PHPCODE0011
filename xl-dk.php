<?php
$username_send=$_POST['username'];
$password_send=$_POST['password'];
$fullname_send=$_POST['fullname'];
$render=isset($_POST['rdnam']) ? $_POST['rdnam']: 'no';

?>
<?= $username_send    ?> <br>
<?= $password_send   ?> <br>
<?= $fullname_send   ?> <br>
<?= $render   ?>