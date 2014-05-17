<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
 	
    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">
  <style id="holderjs-style" type="text/css"></style></head>
<!-- NAVBAR
================================================== -->
  <body style="">
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="home.html">Home</a></li>
                <li><a href="about us.html">About Us</a></li>
                
                <li class="dropdown">
                  <a href="http://getbootstrap.com/examples/carousel/#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li  ><a href="sign-in.php">Sign In</a></li>
                    <li class="active"><a href="register.php">Sign up</a></li>
                    <li><a href="profile.php">Profile</a></li>
                     <li><a href="sign-out.php">Sign Out</a></li>
                     </ul>
                </li>
                <li  ><a href="flashback.html">Flashback</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="faq.html">FAQ's</a></li>
                <li><a href="contact us.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
       <?php
	   ob_start();
		session_start();
		require 'db_connect.php';
			
		
		if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
			if(isset($_POST['firstName'])&&isset($_POST['lastName'])&&isset($_POST['Username'])&&isset($_POST['re_pass'])&&isset($_POST['password'])/*
			&&isset($_POST['gender'])&&isset($_POST['phoneno'])&&isset($_POST['email'])&&isset($_POST['register'])*/){
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$Username = $_POST['Username'];
				$Password= $_POST['password'];
				$repass = $_POST['re_pass'];
				/*$gender = $_POST['gender'];
				$phone = $_POST['phoneNo'];
				$mail = $_POST['email'];
				$register = $_POST['register'];*/
		if(!empty($firstName)&&!empty($lastName)&&!empty($Username)&&!empty($Password)&&!empty($repass)/*&&!empty($gender)&&!empty($phone)&&!empty($mail)*/	
		){
			if($Password == $repass){
				$query = "SELECT `userName` FROM `login` WHERE `userName`='$Username'";
				$query_run= mysql_query($query);
				if(mysql_num_rows($query_run)>=1){
					echo "Username aready exists.Enter a new username.";
					}
				else{
					$query = "INSERT INTO `alum_personal_info` (userName,first_Name,last_Name) VALUES ('$Username','$firstName','$lastName')";
					if ($query_run = mysql_query($query)){
						$query = "INSERT INTO `login` (userName,password) VALUES ('$Username','$Password')";
					if ($query_run = mysql_query($query)){
						header('Location: profile.php');}}
						else 
						echo "Sorry some issues occured. Your Registration failed.";
					}
			}else
			 echo "Passwords do not match.";
			}
			else
			   echo "All entries are required.";
				}else
				echo "Fill up the form.";		
		?>
        <div align="center" class="signIn">
    	<form id="form1" name="form1" method="post" action="register.php">
	
			<strong>First Name </strong><input type="text" name="firstName"/><br/><br/>
            <strong>Last Name </strong><input type="text" name="lastName"/><br/><br/><br/>
            
            <strong>Username</strong><input type="text" name="Username"/><br/><br/>
            <strong>New Password</strong><input type="password" name="password"/><br/><br/>
            <strong>Retype password</strong><input type="password" name="re_pass"/><br/><br/><br/>
            <!--
            <input type="radio" name="gender" value="male"> Male 
			<input type="radio" name="gender" value="female"> Female<br/><br/><br/>
            <h4>CONTACT INFORMATION:</h4><br/>            
            <strong>Pnone No. </strong><input type="tel" name="Phoneno" /><br/><br/>
            <strong>Email id </strong><input type="email" name="email" /><br/><br/><br/>
            
            <h4>Register As</h4>
            <input type="radio" name="register" value="Alumni"> Alumni<br> 
			<input type="radio" name="register" value="Admin"> Admin<br/> 
			<input type="radio" name="register" value="Faculty"> Faculty<br/> 
			<input type="radio" name="register" value="Student"> Student<br/><br/>
            -->
            <input type="submit" value="Register" /><br/>
         </form>
        
        </div>
   
        
        
		<?php
			}
		     else{
				echo "You are already registered and logged in.";}
		
		?>
          
  
		
		<hr>
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2014 Company, Inc. · <a href="home.html">Home</a> · <a href="about us.html">About us</a> · <a href="#">My Accounts</a> · <a href="#">Events</a>  · <a href="flashback.html">Flashback</a>  · <a href="faq.html">FAQs</a> · <a href="contact us.html">Contact Us</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./home_files/jquery.min.js"></script>
    <script src="./home_files/bootstrap.min.js"></script>
    <script src="./home_files/docs.min.js"></script>
  

</body></html>
