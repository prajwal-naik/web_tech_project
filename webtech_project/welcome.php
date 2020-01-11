<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=10"/>
      <link rel="icon" href="icon.png" type="image/icon type">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="styles.css">
        
</head>
<body>
    <div>
        <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
    </div>
    <p>

        <a class="waves-effect waves-light btn" id="login_button" href="logout.php" style="font-size: 16px"> 
                    LOGOUT
                </a>
    </p>
</body>
</html>