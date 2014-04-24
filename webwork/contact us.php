<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
 	
    <title>Contact Us</title>

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
                     <li><a href="#">Sign Out</a></li>               
                    </ul>
                </li>
                <li><a href="flashback.html">Flashback</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">FAQ's</a></li>
                <li  class="active"><a href="contact us.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    
     <!--content here--> 
	<?php
	   
	   if(isset($_POST['subject'])&&isset($_POST['from'])&&isset($_POST['body'])){
		$to = 'someone@something.org';
		$subject = $_POST['subject'];
		$body = $_POST['body'];
		$headers = 'FROM: '.$_POST['from']; 
		if(!empty($subject) && !empty($body) && !empty($from)){
		 mail($to , $subject ,$body , $headers);
		 echo "Thanks for contacting us.";
	   }
	   }
	?>
     
     <h1> Contact Us</h1>
      <div style="padding-left:30px; " class="row">
      <div class="col-md-offset-1 col-md-6">
     <form action="contact us.php" method="post"><strong>
      YOUR EMAIL : <br><input type="text" name="from"><br><br>
      SUBJECT : <br><input type="text" name="subject"><br><br>
      MESSAGE : <br><textarea rows="3" cols="30" name="body"></textarea><br><br>
      <input type="submit" value="SUBMIT"> </strong>       
     </form>
     </div>
     <div class="col-md-5">
     <h3 > Alumni Centre</h3>
     <p>IIPS, Davv, Takshila Campus<br>
	Khandwa Road, Indore<br>
	Indore, India, 452001<br>
	<h3>Join us on facebook</h3>
     <p><a href="https://www.facebook.com/alumni.iips?fref=ts"> Alumni Facebook page</a><br>
     </p>
      </p></div>
           </div>
      <!--end of content-->
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
