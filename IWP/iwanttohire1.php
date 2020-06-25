<?php

$pname = "";
$pskills    = "";
$pdesc = "";
$email ="";


$db = mysqli_connect('localhost', 'root', '', 'getyourwork');

$pname = mysqli_real_escape_string($db, $_POST['project_name']);
$pdesc = mysqli_real_escape_string($db, $_POST['project_desc']);
$pskills = mysqli_real_escape_string($db, $_POST['project_skills']);
$email = mysqli_real_escape_string($db, $_POST['c_email']);

$query = "INSERT INTO wanttohire (p_name, p_desc, p_skills, c_email) VALUES('$pname', '$pdesc', '$pskills','$email')";
mysqli_query($db, $query);
header('location: iwth_confirm.php');
?>