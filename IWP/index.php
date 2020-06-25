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
<title>GetYourWork</title>
<link rel="stylesheet" type="text/css" href="mstyle.css">
<style>
.bgimage{
	color:lightgrey;
  background-image: url(pexels-photo-1509428.jpeg);
}
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content= 180>
</head>
<body bgcolor="lightgray">

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
<div class="bgimage" align="center">
<h1 class="des1"><br><br><br>Hire expert freelancers <br> for any job, online</h1>
<p class="des1">Millions of small businesses use Freelancer <br> to turn their ideas into reality.<br><br><br><br><br><br></p>
</div>
<hr/>
<div class="btn" align=center>
<a href="iwanttohire.php" class="button">I want to Hire</a>
<a href="iwanttowork.php" class="button">I want to Work</a>
</div>
<hr/>

<div>
  <h2 align="center">Need Work Done?</h2>
  
  <table align="center" border="0">
    <tr>
      <td align="center"><img src="job search sites_0.jpg" height="150" width="250"></td>
      <td align="center"><img src="choosefreelancer.jpg" height="150" width="250"></td>
    </tr>
    <tr>
      <th align="center"><h3>Post a job</h3></th>
      <th align="center"><h3>Choose freelancers</h3></th>
    </tr>
    <tr>
      <td align="center">It's easy. Simply post a job you need<br>completed and receive competitive bids<br>from freelancers within minutes.</td>
      <td align="center">Whatever your needs, there will be a<br>freelancer to get it done: from web design,<br>mobile app development, virtual<br>assistants, product manufacturing, and<br>graphic design (and a whole lot more)</td>
    </tr>
  </table>
  <hr/>
</div>

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
