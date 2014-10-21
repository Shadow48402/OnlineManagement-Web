<?php
//This MySQL database needs to be the same as the plugin
$dbdb = ""; //Database
$dbpass = ""; //Password
$dbhost = ""; //Host
$dbuser = ""; //Username


$con=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbdb"); //Making connection
if (mysqli_connect_errno()){ //Can you connect?
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); //Errorrrrrrr :'(
}
?>