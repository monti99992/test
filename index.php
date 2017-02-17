<?php
session_start();
if(!isset($_SESSION) or empty($_SESSION)){
	header('Location:signin.php');
}
 ?>
<!---<html>
<head>
Sending sms from your webpage</head>
<body>
<h1>SEND SMS</h1>
<h1>LOGIN WITH WAY2SMS</h1>
<form action="example.php" method="post">
<table border="1">
<tr><td>RECEIVER MOBILE NUMBER:<input type="text" name="tono" size="10"></td></tr>
<tr><td>TYPE MESSAGE:<textarea name="message" rows="10" cols="40">TYPE UPTO 140 CHARACTERS ONLY
</textarea></td></tr>
<tr><td><input type="submit" value="sendSMS"></td></tr>
</table>
</form>
</body>
</html>--->


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>ESSAR  MESSAGING</title>
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
							<p><span>Send SMS</span> <a href="index.php">ESSAR</a></p>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<div class="clearfix"><?php
									//$mess = isset($_REQUEST['mess']) ? $_REQUEST['mess'] : null;
									//if($mess == 1) {
									//	echo 'your message was sent successfully. thanks'; }
									?> </div>
							</div>
							<form action="example.php" method="post">
							<div class="log-input">
							<div class="log-input-left">
							<input type="text" class="user" name="tono" required maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" placeholder="NUMBER" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NUMBER';}">
							<div class="clearfix"> </div>
							</div>
							</div>
							<div class="log-input">
							<div class="log-input-left">
							<textarea name="message" rows="3" class="form-control" required placeholder="MESSAGE HERE" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MESSAGE HERE';}" ></textarea>
							<div class="clearfix" style="margin:5px;"> </div>
							</div>
							</div>

							<input class="button" type="submit" value="SEND SMS">
							<a href="logout.php" class="button">Logout</a>

							</form>

						</div>

					</div>
				</div>
			</div>
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
