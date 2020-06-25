<?php 
  session_start(); 
  if (!isset($_SESSION['c_name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login1.php');
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
<title>GetYourWork-Post-project</title>
<link rel="stylesheet" type="text/css" href="mstyle.css">
<link rel="stylesheet" type="text/css" href="astyle.css">

<style type="text/css">
  h4,h5{
    color: white;
  }
  .bgimage{
  color:lightgrey;
  background-image: url(blog-rm-silvia-min.jpeg);
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
<div class="bgimage" align="center">
<h1 class="des1"><br><br><br>Tell us what you need done<br></h1>
<h3 class="des1">Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the <br> freelancer only when you are 100% satisfied with their work.<br><br><br><br><br><br></h3>
</div>
<hr/>
<div class="hire-page">
  <div class="form">
    <form action="iwanttohire1.php" method="post" class="hiring-form">
    <h4>
      Choose a name for your project:</h4><br>
      <input type="text" placeholder="eg. Build a website" name="project_name">
      <h4>Tell us more about your project<br><br>Start with a bit about yourself or your business, and include an overview of what you need done.</h4>
      <textarea class="textarea_class" placeholder="Describe your project here...." name="project_desc" rows="5" cols="40"></textarea>
      <h4>What skills are required?<br><br>
        Enter up to 5 skills that best describe your project. Freelancers will use these skills to find projects they are most interested and experienced in.
      </h4>
      <input type="text" name="project_skills" placeholder="What skills are required?"><br>
      <h4>Enter Registered Email ID:
      </h4>
      <input type="text" name="c_email" placeholder="Registered Email ID"><br>
      
      <button>Post Project</button>
  
    </form>
  </div>
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