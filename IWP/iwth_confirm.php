<?php 
  session_start(); 

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
<title>GetYourWork- Contact</title>
<link rel="stylesheet" type="text/css" href="mstyle.css">
<link rel="stylesheet" type="text/css" href="lstyle.css">
<style type="text/css">
.bgimage
{
	color:lightgrey;
  	background-image: url(BrownWood.jpg);
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

<br>
<div class="bgimage" align="center">
<h1 class="des1"><br><br><br>Successfully Posted the Job. <br></h1>
<p class="des1">We'll let you know as soon as someone bids for the job. <br><br><br><br><br><br></p>
</div>
<br>

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