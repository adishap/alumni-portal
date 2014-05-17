<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
 	
    <title>Profile</title>

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
                    <li><a href="sign-in.php">Sign In</a></li>
                    <li><a href="register.php">Sign up</a></li>
                   <li><a href="profile.php">Profile</a></li>
                     <li><a href="sign-out.php">Sign Out</a></li></ul>
                </li>
                <li><a href="flashback.html">Flashback</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="faq.html">FAQ's</a></li>
                <li><a href="contact us.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <?php
			ob_start();
			session_start();
			require 'db_connect.php';
			
		
			if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
				header("location: sign-in.php");
				exit();
			}
			else{
				$user_id = $_SESSION['user_id'];
				?>
          <h2>    
       <?php
			echo "Welcome ".getaluminfo('first_Name','alum_personal_info')." ".getaluminfo('last_Name','alum_personal_info')."  !!";
		?></h2>
        <font size="-1">
       <?php
             echo ucfirst(getaluminfo('first_Name','alum_personal_info'))." ".ucfirst(getaluminfo('last_Name','alum_personal_info')). " \n ";	
			 
			 if(isset($_POST['phone-no']) || isset($_POST['mail'])){
				 if(!empty($_POST['phone-no'])){
					 updateinfo('phone_no', 'alum_personal_info' ,$_POST['phone-no']);}
				if(!empty($_POST['mail'])){
					 updateinfo('email_Id', 'alum_personal_info' ,$_POST['mail']);}
				}
			
			if(isset($_POST['pass']) && isset($_POST['pass']) && isset($_POST['newpass'])){
				if(!empty($_POST['pass'])&&!empty($_POST['newpass'])&&!empty($_POST['renew'])){
					if($_POST['pass'] == getaluminfo('password','login') ){
						if ($_POST['newpass'] == $_POST['renew']){
							$renew = $_POST['renew'];
							$query = "UPDATE login SET `password`='".$renew."' WHERE userName='{$_SESSION['user_id']}'";
							if ($query_run = mysql_query($query))
							{
								echo "Password updated.";
							}
								else
								 echo"Problem in updating password";
							}
							else
							echo "new password and entered password are not same.";
						}
						else
						echo "password doesn't match.";
					}
			}
				
		?>
        <form action="profile.php" method="post">
        	<h4>UPDATE INFORMATION</h4>
        	Phone No. :<input type="tel" name="phone-no"><br><br>
            Email Id :<input type="email" name="mail"><br><br><br>
            
            <h4>CHANGE PASSWORD</h4><br><br>
            Password : <input type="password" name="pass"><br><br>
            New Password : <input type="text" name="newpass"><br><br>
            Retype Password : <input type="text" name="renew"><br><br>
            
            <input type="submit" value="Update">
           
        </form>
        <?php
		
			}
		?> </font>       
               

      </div>
   		
  
		
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
