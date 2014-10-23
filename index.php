<html>

<head>
  <title>Online Viewer</title>
  <link href="style.css" rel="stylesheet">
</head>

<body>

<div class="title">
  <p><strong>Online Players:</strong></p>
</div>

<?php
include'config.php'; //Including the config

if(isset($_GET['username'])){
  $execute = "SELECT * FROM online WHERE Username='" . $_GET['username'] . "'"; //Selecting the table online
  $result = mysqli_query($con, $execute); //Executing the query :)
  $count = 0; //Count variable
  while($row = mysqli_fetch_array($result)){
    $count = $count + 1;          // Count babe <3
    $username = $row['Username']; // What is you username?
    $since = $row['Since'];       // Since when are u online?
    $kills = $row['Kills'];       // How much kills do you have?
    $deads = $row['Deads'];       // How much deads do you have?
    $strMessage .= "
      <div class='user'>
        <div class='userbody'>
          <img src='http://www.minecraftavatars.net/3d/3d.php?format=png&displayHairs=true&headOnly=false&login=" . $username . "&aa=true'>
        </div>
        <div class='userinfo' align='center'>
          <table>
            <tr>
              <td><strong>Username:</strong></td>
              <td>$username</td>
            </tr>
            <tr>
              <td><strong>Online Since:</strong></td>
              <td>$since</td>
            </tr>
            <tr>
              <td><strong>Kills:</strong></td>
              <td>$kills</td>
            </tr>
            <tr>
              <td><strong>Deads:</strong></td>
              <td>$deads</td>
            </tr>
          </table>
        </div>
      </div>
    ";
  }
  echo $strMessage;
} else {

  $execute = "SELECT * FROM online"; //Selecting the table online
  $result = mysqli_query($con, $execute); //Executing the query :)
  $count = 0; //Count variable
  while($row = mysqli_fetch_array($result)){
    $count = $count + 1;          // Count babe <3
    $username = $row['Username']; // What is you username?
    $strMessage .= "
    <div class='box' align='center'>
      <img src='http://www.minecraftavatars.net/3d/3d.php?format=png&displayHairs=true&headOnly=true&login=" . $username . "&aa=true'>
      <p>$username</p>
      <form method='get' action=''>
        <input type='hidden' name='username' value='" . $username . "'>
        <button type='submit'>Show More Information</button>
      </form>
    </div>
    "; //The images thanks to minecraftavatars.net <3
  }
  if($count == 0){ //check how much people there are on this server
    echo"No One Is On This Server? :(";
  } else {
    echo $strMessage;
  }

}
?>

</body>

</html>