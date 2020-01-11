<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $email = "";
$username_err=$password_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["email_address"]))){
        $email_err = "Please enter an email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT email FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email_address"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email_address"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";     
    }else{
        $username = trim($_POST["username"]);
    }
    // Validate confirm password
//    if(empty(trim($_POST["confirm_password"]))){
//        $confirm_password_err = "Please confirm password.";     
//    } else{
//        $confirm_password = trim($_POST["confirm_password"]);
//        if(empty($password_err) && ($password != $confirm_password)){
//            $confirm_password_err = "Password did not match.";
//        }
//    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (email, u_name, passwd) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
        wingman | register
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=10"/>
      <link rel="icon" href="icon.png" type="image/icon type">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="styles.css">
      <!--<script src="trial_js.js"></script>-->
<!--      <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>-->
<!--      <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-database.js"></script>-->
      
    </head>
    
    <body style="margin: 0px;">
            <div style="background-color:#000000 ;
            text-align: center;
            padding: 0px;
            height: 150px; 
            padding-bottom: 0px;
            margin-bottom: 0px;">
            <img src="logo4.png" style="position: relative; top:0px ; left: 0%; height: 100%;">
        </div>
        <div style="background-color:#035D80;
            
            background-image: url(background_home.jpg); 
            background-size: cover;
            margin-top: 0px;
            padding-top: 50px;
            padding-bottom:82px"
            id="background_image">
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div style="text-align: center; 
                margin: auto; 
                background-color: rgb(0, 0, 0, 0.8);
                width:  300px; 
                height: auto; 
                border-radius: 20px;
                padding: 10px;
                padding-top:10px
                ">
                <div style="border-radius: 20px;"><h6 style="color:white;">----SIGNUP----</h6></div>
                <div class="row">
                        <form class="col s12" method="GET">
                          <div class="row">
                            <div class="input-field col s12">
                              <input name="username" type="text" class="validate" style="color: white;" value="<?php echo $username; ?>" autofocus >
                              <label for="name">Name</label>
                            </div>
                              <span class="help-block" style="color:red"><?php echo $username_err; ?></span>
                          </div>
                            
                          <div class="row">
                              <div class="input-field col s12">
                                <input name="email_address" type="email" class="validate" style="color: white;" value="<?php echo $email; ?>" >
                                <label for="email">Email</label>
                              </div>
                              <span style="color:red"><?php echo $email_err; ?></span>
                            </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input name="password" type="password" class="validate" style="color: white;" value="<?php echo $password; ?>">
                              <label for="password">Password</label>
                            </div>
                              <span style="color:red"><?php echo $password_err; ?></span>
                          </div>
                        </form>
                </div>
<!--
                <a class="waves-effect waves-light btn" id="cont_button" onclick="set_data()">
                  SIGN UP
                </a>
--> 
                <div>
                    <input type="submit" class="waves-effect waves-light btn" style="border-radius:20px" value="Submit">
                    
                </div>
                <p style="color:white">Already have an account? <a href="login.php">Login here</a>.</p>
                    
                
            </div>
               </form>
        </div>














            <script type="text/javascript" src="js/materialize.min.js"></script>
            
            <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
            <!--<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-analytics.js"></script>-->

            <!-- Add Firebase products that you want to use -->
            <!--<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-auth.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-firestore.js"></script>-->
            
<!--            <script type="text/javascript" src="register.js"></script>>-->
              

            
            
    </body>
</html>




























 
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email_address" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>-->
