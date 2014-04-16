<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
 	
    <title>Sign-in</title>

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
                    <li  class="active"><a href="sign-in.php">Sign In</a></li>
                    <li><a href="register.php">Sign up</a></li>
                    <li><a href="#">Update Profile</a></li></ul>
                </li>
                <li  ><a href="flashback.html">Flashback</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">FAQ's</a></li>
                <li><a href="contact us.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
       <?php
		$usename = $_POST['username'];
		$password = $_POST['password'];
		
		?>
        <div align="center" class="signIn">
    	<form id="form1" name="form1" method="post" action="sign-in.php">
	
			<strong>Username : </strong><input type="text" name="username" /><br/><br/>
            <strong>Password : </strong><input type="password" name="password"/><br/><br/>
            <input type="submit" value="Sign In" /><br/>
             <a href="#">Create Account</a>
           
            
	
		</form>
        
        </div>
   
  
		
		<hr>
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2014 Company, Inc. · <a href="home.html">Home</a> · <a href="about us.html">About us</a> · <a href="#">My Accounts</a> · <a href="#">Events</a>  · <a href="flashback.html">Flashback</a>  · <a href="#">FAQs</a> · <a href="contact us.html">Contact Us</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./home_files/jquery.min.js"></script>
    <script src="./home_files/bootstrap.min.js"></script>
    <script src="./home_files/docs.min.js"></script>
  

</body></html>
