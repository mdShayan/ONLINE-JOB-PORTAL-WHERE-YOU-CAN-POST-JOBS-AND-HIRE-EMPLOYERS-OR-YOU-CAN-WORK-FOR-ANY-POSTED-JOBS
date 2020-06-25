<?php
if (session_status() != PHP_SESSION_NONE) {
  session_destroy();
  }
session_start();


$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'getyourwork');


if (isset($_POST['reg_user'])) {
 
  $username = mysqli_real_escape_string($db, $_POST['cname']);
  $email = mysqli_real_escape_string($db, $_POST['cemail']);
  $password_1 = mysqli_real_escape_string($db, $_POST['cpass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['confirmpass']);


  if (empty($username)) { header('location: createnew1.php'); }
  else if (empty($email)) { 
    array_push($errors, "Email is required");
    header('location: createnew1.php'); 
  }
  else if (empty($password_1)) { array_push($errors, "Password is required"); 
    header('location: createnew1.php');
  }
  else if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  header('location: createnew1.php');
  }
  else{
      $user_check_query = "SELECT * FROM reg_table WHERE c_name='$username' OR c_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['c_name'] === $username) {
      array_push($errors, "Username already exists");
      echo "Username already exists";
    }

    if ($user['c_email'] === $email) {
      array_push($errors, "email already exists");
      echo "email already exists";
    }
  }

  if (count($errors) == 0) {
    $password = $password_1;

    $query = "INSERT INTO reg_table (c_name, c_email, c_pass) 
          VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['c_name'] = $username;
    $_SESSION['c_email'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['c_name']);
  $password = mysqli_real_escape_string($db, $_POST['c_pass']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM reg_table WHERE c_email='$username' AND c_pass='$password'";
  	$results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      while($row = $results->fetch_assoc()) 
      {
      $_SESSION['c_name'] = $row['c_name'];
      }
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
      #echo "Login Successfull";
    }else {
      array_push($errors, "Wrong username/password combination");
      header('location: login12.php');
    }
  }
}

if (isset($_POST['Submit'])) 
{ 
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $p_name = mysqli_real_escape_string($db, $_POST['p_name']);
  $p_skills = mysqli_real_escape_string($db, $_POST['p_skills']);
  $p_email = mysqli_real_escape_string($db, $_POST['p_email']);
  $p_when = mysqli_real_escape_string($db, $_POST['p_when']);

  $query = "INSERT INTO p_details (fname,p_name,p_skills,p_email,p_when) 
          VALUES('$fname','$p_name', '$p_skills', '$p_email','$p_when')";

    if(mysqli_query($db, $query))
    {
    header('location: dashboard.php');
    }
  }
if (isset($_POST['alog'])) {
  $username = mysqli_real_escape_string($db, $_POST['a_name']);
  $password = mysqli_real_escape_string($db, $_POST['a_pass']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $query = "SELECT * FROM admin WHERE name='$username' AND pass='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      while($row = $results->fetch_assoc()) 
      {
      $_SESSION['c_name'] = $row['name'];
      }
      $_SESSION['success'] = "You are now logged in";
      header('location: alog.php');
      #echo "Login Successfull";
    }
    }
}

?>







