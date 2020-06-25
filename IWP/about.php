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
<title>GetYourWork- About</title>
<style>

body {
  margin: 0;
}


.header {
    background-color: #f1f1f1;
    padding: 15px;
	
}


.topnav {
    overflow: hidden;
    background-color: black;
}

.topnav .cs1 a {
    float: right;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


.topnav a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.button {
    background-color: #777;
    border: none;
    color: white;
    padding: 10px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.btn {
	padding: 15px;
}

.des1{
     padding: 15px;
     text-align: center;
     font-style: italic;
     font-variant: small-caps;
     font-size: 20px;
}
.l_cake{
     padding: 30px 50px 10px 50px;
}

footer{
    background-color: black;
	padding: 20px 25px 270px 25px;
}
 .footer-top {
    color: black;
    padding: 14px 16px;
    text-decoration: none;
	
}
.f_location {
    
	float: left;
    color: white;
    padding: 14px 16px;
    text-decoration: none;
	
}

.f_customer {
    
  float: left;
    color: white;
    padding: 14px 60px;
    text-decoration: none;
  
}

.f_contact {
    
  float: right;
    color: white;
    padding: 14px 16px;
    text-decoration: none;
  
}
.h3color{
  color: grey;
}

.bgimage{
  background-image: url(gluten-chocolate-cake.jpg);
}
</style>
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
<div class="des1">
  <h2 align="center"> About</h2>
<img src="work.jpeg" width="700">

<p align="center">
  Freelancer job is one where a person works for themselves, rather than for a company.
</p>
<p align="center">
 Users can get the work done with high quality on cheap price
</p>
<p align="center">
 Essentially, a freelance job is one where a person works for themselves, rather than for a company.<br>While freelancers do take on contract work for companies and organizations, they are ultimately self-employed.
</p>
<p align="center">
When the user uploads the task, he/she gets many quotations from different users for the following work.<br>He/she can choose the best from the following quotations.<br>This can lead to easy employment and work is done easily by just sitting at home and uploading
respective task.
</p>

<p align="center">
With the use of login id and password users can get logged into the system.<br>After
logging in user can upload task, <br>he/she can also view the task uploaded by others and can
also auction the following task.
<br>
</p>
</div>
<br>
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