<?php
//This MySQL database needs to be the same as the plugin
$dbdb = "mc76"; //Database
$dbpass = "d6a74d3595"; //Password
$dbhost = "37.187.76.121"; //Host
$dbuser = "mc76"; //Username


$con=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbdb"); //Making connection
if (mysqli_connect_errno()){ //Can you connect?
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); //Errorrrrrrr :'(
}
?>