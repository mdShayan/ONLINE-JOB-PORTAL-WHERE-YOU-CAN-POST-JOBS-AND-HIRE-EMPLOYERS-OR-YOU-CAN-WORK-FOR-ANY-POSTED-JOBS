<?php

$uname = "";
$uemail    = "";
$uphone = "";
$msg ="";


$db = mysqli_connect('localhost', 'root', '', 'getyourwork');

$uname = mysqli_real_escape_string($db, $_POST['userName']);
$uemail = mysqli_real_escape_string($db, $_POST['userEmail']);
$uphone = mysqli_real_escape_string($db, $_POST['userPhone']);
$msg = mysqli_real_escape_string($db, $_POST['userMsg']);

$query = "INSERT INTO contact (u_name, u_email, u_phone, u_msg) VALUES('$uname', '$uemail', '$uphone','$msg')";
mysqli_query($db, $query);
header('location: contact.php');
?>