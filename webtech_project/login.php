<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: wiki/wikipage1.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email_address"]))){
        $email_err = "Please enter username.";
    } else{
        $email = trim($_POST["email_address"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT email, u_name, passwd FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $email, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $username;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: wiki/wikipage1.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
        
        // Close statement
//        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
    <head>
      <title>
          wingman | login
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=10"/>
      <link rel="icon" href="icon.png" type="image/icon type">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="styles.css">
<!--
      <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-database.js"></script>
-->
    </head>


    <body style="margin: 0px;">
            <div style="background-color:#000000 ;
            padding: 0px;
            height: 150px; 
            padding-bottom: 0px;
            margin-bottom: 0px; text-align: center">
            <img src="logo4.png" style="position: relative; top:0px ; left: 0%; height: 100%;">
        </div>
        <div style="background-color:#035D80;
            height: 610px;
            background-image: url(background_home.jpg); 
            background-size: cover;
            margin-top: 0px;
            padding: 100px;" 
            id="background_image">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div style="text-align: center; 
                margin: auto; 
                background-color: rgb(0, 0, 0, 0.8);
                width:  300px; 
                height: auto; 
                border-radius: 20px;
                padding: 10px
                ">
                <div style="border-radius: 20px;"><h6 style="color:white;">----LOGIN----</h6></div>

                <div class="row">
                <form class="col s12" id="login_details" method="GET" action="login_deets.txt">
                    <div class="row">
                      <div class="input-field col s12"  style="margin-bottom: 0px;">
                        <input name="email_address" type="email" class="validate" style="color: white;" value="<?php echo $email; ?>" autofocus>
                        <label for="user_name">Email ID</label>  
                      </div>
                        <span class="help-block" style="color: red;"><?php echo $email_err; ?></span>
                    </div>
                    <div class="row" >
                      <div class="input-field col s12" style="margin-top: 0px; margin-bottom: 0px;">
                        <input name="password" type="password" class="validate" style="color: white;">
                        <label for="password">Password</label>
                      </div>
                        <span class="help-block" style="color: red;"><?php echo $password_err; ?></span>
                    </div>
                    
                </form>
              </div>
                <div class="">
                    <input type="submit" class="waves-effect waves-light btn" style="border-radius: 20px; color: white" value="Login">
                </div>
                <a style="color: #7ed4f5;" href="register.php" id="backup_register"><br><br>Not a user yet ? Register here.</a>
            </div>
            </form>
        </div>














            <script type="text/javascript" src="js/materialize.min.js"></script>
<!--            <script type="text/javascript" src="register.js"></script>-->
            <script> 
              var reg_link=document.getElementById("backup_register");
              reg_link.addEventListener("mouseover", hovered, false);
              reg_link.addEventListener("mouseout", hoverout, false);
              function hovered(e)
              {
                reg_link.style.color="#039be5";
              }
              function hoverout(e)
              {
                reg_link.style.color="#7ed4f5";
              }
            </script>

    </body>
</html>



































 
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email ID</label>
                <input type="email" name="email_address" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>-->
