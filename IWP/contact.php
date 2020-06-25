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
	.company_address{
	padding-top:26px;
}
.company_address p{
	font-size:1em;
	color:#7D7F7E;
	padding: 2px 0;
}
.company_address p span{
	text-decoration:underline;
	color:black;
	cursor:pointer;
}
.company_address p span:hover{
	color:blue;
}
.address_company{
	padding-left: 15px;
}
.contact-form{
	position:relative;
	padding-bottom:30px;
}
.contact-form div{
	padding:5px 0;
}
.contact-form span{
	display:block;
	font-size:0.8125em;
	color: black;
	padding-bottom:5px;
}
.contact-form input[type="text"],.contact-form textarea{
		    padding:8px;
			display:block;
			width:98%;
			border: none;
			outline:none;
			color:#464646;
			font-size:0.8125em;
			border:1px solid black;
			-webkit-appearance:none;
}
.contact-form textarea{
		resize:none;
		height:120px;		
}
.contact-form input[type="submit"]{
	background: black;
	color: #FFF;
	padding: 5px 20px;
	display: inline-block;
	font-size: 1.5em;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
	margin-top: 0.2em;
	border: none;
	cursor: pointer;
	text-transform:uppercase;
}
.contact-form input[type="submit"]:hover{
	background:#5A0F16;
	color:#fff;
}
.contact-form input[type="submit"]:active{
	color:#000;
}
.contact-pad{
	padding-left: 15px;
	padding-right: 100px;
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

<h2 align="left">&nbsp;&nbsp;Contact</h2>
<h4 Style = "color:#7D7F7E;">&nbsp&nbsp&nbsp Weekdays only</h4>
<p Style = "color:#7D7F7E;">&nbsp&nbsp&nbsp Phone: (91) 2587413691,2587413692</p>

<div class="address_company">
<div class="company_address">
				     	<h3>Office Location :</h3>
						    	<p>VIT  University</p>
						   		<p>Near Katpadi Road, Vellore,</p>
						   		<p>Tamil Nadu </p>
				   		<p>Phone:(+91) 9812340757</p>
				   		
				 	 	<p>Email: <span>support@getyourwork.com</span></p>
				   		<p>Follow on: <table border="0">
            <tr>
              <td><a href="#"><img src="fb.jpg" height="35" width="35"></a></td>
              <td><a href="#"><img src="linkdin.jpg" height="35" width="35"></a></td>
              <td><a href="#"><img src="images.jpg" height="35" width="35"></a></td>
              <td><a href="#"><img src="twit.jpg" height="35" width="35"></a></td>
            </tr>
          </table></p>
				   </div>
			</div>
<div class="contact-pad">
<div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="contact1.php">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form>

</div>
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