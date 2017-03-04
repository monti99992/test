<?php
session_start();
error_reporting(E_ALL);
ob_implicit_flush(true);
include_once "class.curl.php";
include_once "class.sms.php";
include_once "cprint.php";
if(isset($_POST) and !empty($_POST)){
  $smsapp=new sms();
  $smsapp->setGateway('way2sms');
  $ret=$smsapp->login($_POST['username'],$_POST['password']);
  if ($ret==1){
    $_SESSION['user']=$_POST;
  }else{
    $_SESSION['msg']="You entered wrong credentials Way2SMS";
  }
}
if(isset($_SESSION['user']) and !empty($_SESSION['user'])){
  header('Location:index.php');
}
 ?>


 <!DOCTYPE HTML>
 <html>
 <head>
 <title>Way2SMS Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
 Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
 <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
 <!-- Custom CSS -->
 <link href="css/style.css" rel='stylesheet' type='text/css' />
 <!-- Graph CSS -->
 <link href="css/font-awesome.css" rel="stylesheet">
 <!-- jQuery -->
 <!-- lined-icons -->
 <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
 <!-- //lined-icons -->
 <!-- chart -->
 <script src="js/Chart.js"></script>
 <!-- //chart -->
 <!--animate-->
 <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
 <script src="js/wow.min.js"></script>
 	<script>
 		 new WOW().init();
 	</script>
 <!--//end-animate-->
 <!----webfonts--->
 <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
 <!---//webfonts--->
  <!-- Meters graphs -->
 <script src="js/jquery-1.10.2.min.js"></script>
 <!-- Placed js at the end of the document so the pages load faster -->

 </head>

  <body class="sign-in-up">
     <section>
 			<div id="page-wrapper" class="sign-in-wrapper">
 				<div class="graphs">
 					<div class="sign-in-form">
 						<div class="sign-in-form-top">
 							<p><span>Send SMS</span> <a href="index.php">Way2SMS</a></p>
 						</div>
 						<div class="signin">
 							<div class="signin-rit">
 								<div class="clearfix"><?php
 									//$mess = isset($_REQUEST['mess']) ? $_REQUEST['mess'] : null;
 									//if($mess == 1) {
 									//	echo 'your message was sent successfully. thanks'; }
 									?> </div>
 							</div>
 							<form action="" method="post">
                <?php if (isset($_SESSION['msg'])): ?>
                  <div class="log-input">
     							<div class="log-input-left">
     							<div class="alert alert-danger">
                    <?= $_SESSION['msg'] ?>
     							</div>
     							<div class="clearfix"> </div>
     							</div>
     							</div>
                <?php endif; ?>
 							<div class="log-input">
 							<div class="log-input-left">
 							<input type="text" class="user" name="username" maxlength="10" pattern="\d{10}" required  placeholder="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
 							<div class="clearfix"> </div>
 							</div>
 							</div>
 							<div class="log-input">
 							<div class="log-input-left">
 							<input type="password" class="user" name="password"  required placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
 							<div class="clearfix" style="margin:5px;"> </div>
 							</div>
 							</div>

 							<input class="button" type="submit" value="Submit">

 							</form>

 						</div>

 					</div>
 				</div>
 			</div>
      <?php
        unset($_SESSION['msg']);
       ?>
 		<!--footer section start-->
 			<footer>
 			   <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
 			</footer>
         <!--footer section end-->
 	</section>

 <script src="js/jquery.nicescroll.js"></script>
 <script src="js/scripts.js"></script>
 <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 </body>
 </html>
