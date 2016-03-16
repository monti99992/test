<?php

include "../config.php";

$page_name = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);



$message='';

if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != '')

{

	header('Location:../home.php');

	exit;

}



/*if(isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME']=="www.mrrainer.com" || $_SERVER['SERVER_NAME']=="mrrainer.com")

{

	echo "<h1>This website is not available!!!!</h1>";

}

else

{*/



if(isset($_POST['submit']))

{

	$username = $_POST['username'];

	$password = $_POST['password'];



	$result = mysql_query("SELECT * FROM user WHERE username='".$username."' AND password='".md5($password)."' AND user_type='admin'");



		$row = mysql_num_rows($result);

		$rower = mysql_fetch_assoc($result);

	//	print_r($rower);

		if($row > 0)

		{

				$_SESSION['user_id']	= $rower['id'];

				$_SESSION['user_name']	= $rower['username'];

				$_SESSION['user_type']	= $rower['user_type'];

				$_SESSION['user_type_id']	= $rower['user_type_id'];

			header('Location:../home.php');

			exit;

		}

		else

		{

			$message = "Invalid Username or Password";

		}

	}









?>






<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Easy Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Sign In :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="../js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts--->
 <!-- Meters graphs -->
<script src="../js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head>

 <body class="sign-in-up">
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Sign In to</span> <a href="index.html">Admin Easyclients</a></p>
						</div>
						<div class="signin">
							<div class="signin-rit">
							</div>
						  <form name="login" method="POST" action="">
							<div class="log-input">
								<div class="log-input-left">

								   <input type="text" class="user" name="username" value="ADMIN USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">

								   <input type="password" class="lock" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<div class="clearfix"> </div>
							</div>
                <input class="button"  type="submit" name="submit" value="Login to your account" />
						<!--	<input type="submit" value="Login to your account">--->
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

<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>
