<?php
error_reporting(E_ALL);
ob_implicit_flush(true);
include_once "class.curl.php";
include_once "class.sms.php";
include_once "cprint.php";
session_start();
$smsapp=new sms();
$smsapp->setGateway('way2sms');
$myno=$_SESSION['Mobile'];
$p=$_SESSION['Password'];
$tonum=$_POST['tono'];
$mess=$_POST['message'];

cprint("Logging in ..\n");
$ret=$smsapp->login($myno,$p);

if (!$ret) {
   cprint("Error Logging In");
   exit(1);
}

print("Logged in Successfully\n");

print("Sending SMS ..\n");
$ret=$smsapp->send($tonum,$mess);

if (!$ret) {
   print("Error in sending message");
   exit(1);
}
else{
	header('location: thanks.php');
exit();
}
//print("Message sent");
//header('Location: index.php' );


?>
