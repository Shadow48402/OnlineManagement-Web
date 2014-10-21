<html>

<head>
  <title>Online Viewer</title>
</head>

<body>

<p><strong>Online Players:</strong></p>

<?php
include'config.php'; //Including the config

$execute = "SELECT * FROM online"; //Selecting the table online
$result = mysqli_query($con, $execute); //Executing the query :)
$count = 0; //Count variable
while($row = mysqli_fetch_array($result)){
  $count = $count + 1; //Count babe <3
  $username = $row['Username']; // What is you username?
  $strMessage .= "<img src='http://www.minecraftavatars.net/3d/3d.php?a=-25&w=45&wt=-15&abg=0&abd=-10&ajg=-25&ajd=10&ratio=10&format=png&displayHairs=true&headOnly=true&login=" . $username . "&aa=true'>"; //The images thanks to minecraftavatars.net <3
}
if($count == 0){ //check how much people there are on this server
  echo"No One Is On This Server? :(";
} else {
  echo $strMessage;
}
?>

</body>

</html>