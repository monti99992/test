<?php
session_start();
if(isset($_POST) and !empty($_POST)){
  $_SESSION=$_POST;
}
if(isset($_SESSION) and !empty($_SESSION)){
  header('Location:index.php');
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Username:<input type="text" name="Mobile" value=""><br>
      Password:<input type="password" name="Password" value=""><br>
      <input type="submit"  value="Submit">
    </form>
  </body>
</html>
