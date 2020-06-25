<?php 
  session_start(); 
  if (!isset($_SESSION['c_name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: a_login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['c_name']);
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content= 600;>
<title>GetYourWork-Contact</title>
<link rel="stylesheet" type="text/css" href="mstyle.css">
<link rel="stylesheet" type="text/css" href="astyle.css">

<style type="text/css">
  h4,h5{
    color: white;
  }
  
.des1{
  color: black;
}
</style>

</head>
<body>
  <div class="header">
 <img height = "150px" width = "150px" src = "gw.jpg" alt = "image not available"></img>
  <h1 style = "margin-top:-100px; margin-left:180px;font-size:50px;">GetYourWork</h1>
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
  <div class="cs1">
    <?php  if (isset($_SESSION['c_name'])) : ?>
      <a href="index.php?logout='1'" style="color: red;">logout</a>
      <a href="dashboard.php">Welcome <strong><?php echo $_SESSION['c_name']; ?></strong></a>
    <?php endif ?>
    <?php  if (!isset($_SESSION['c_name'])) : ?>
      <a href="login1.php">User-login</a>
     <a href="a_login.php">Admin-login</a>
    <?php endif ?>
  </div>
</div>
<hr/>
<h2 align="center">Admin Page</h2>
<div class="hire-page">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "getyourwork";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
    $sql = "SELECT * FROM contact";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
       {
          echo "<html>
          <head>
          <style>
          h1
          {
          color:black;
           }
          table
          {
           border:2px solid black;
           border-radius:10px;
           color:black;
          }
          td
          {
            color:black;
          }
           </style>
          </head>
          <body>";
          echo "<h1><u>Contact Us Form</u></h1>";
          echo "<table border='1' cellpadding='12'>";
          echo "<tr>
          <th>Name</th>
          <th>Email ID</th>
          <th>Mobile </th>
          <th>Subject</th>
               </tr>";
               while($row = $result->fetch_assoc()) 
                {
                  echo "<tr>";
                  echo "<td>" . $row["u_name"]."</td>";
                  echo "<td>" . $row["u_email"]."</td>";
                  echo "<td>" . $row["u_phone"]."</td>";
                  echo "<td>" . $row["u_msg"]."</td>";
                  echo "</tr>";
                }
                echo "</table>";
        } 
        else 
        {
           echo "<h1>No Information Available .</h1>";
         }
?>
</div>

<hr/>
<footer>
 <div class="footer-top">
        <div class="f_location">
          <h3 class="h3color">Location</h3>
          <p>VIT University,<br>Vellore</p>
          <br>
          <br>
          <table border="0">
            <tr>
              <td><a href="#"><img src="fb.jpg" height="35" width="35"></a></td>
              <td><a href="#"><img src="linkdin.jpg" height="35" width="35"></a></td>
              <td><a href="#"><img src="images.jpg" height="35" width="35"></a></td>
              <td><a href="#"><img src="twit.jpg" height="35" width="35"></a></td>
            </tr>
          </table>
          
        </div>
        <div class="f_customer">
          <h3 class="h3color">Customer service</h3>
          <p><a href="mailto:support@getyourwork.com">support@getyourwork.com</a><br>(Or)<br> Help: <a href="#">http://www.getyourwork.com/help</a> </p>
          <h3 class="h3color">Phone</h3>
          <h5>1800-635-568</h5>
        </div>
                <div class="f_contact">
            <h3 class="h3color">Contact us</h3>
          <input type="text" name="c_email" value="Email">
          <br>
          <br>
          <textarea name="c_message" rows="5" cols="40">Enter your message here</textarea><br>
         <br>
          <input type="submit">
        </div>        
  

</footer>
</body>
</html>