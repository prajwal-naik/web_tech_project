<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    </head>
<body>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="user_database"; // Database name 
$tbl_name="fquestions"; // Table name 

// Connect to server and select database.
$con= mysqli_connect("$host", "$username", "$password");
mysqli_select_db($con, "$db_name")or die("cannot select DB");

// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($con, $sql);

if($result){
//echo "<p><span>Successful</span><br>";
//echo "<a href=main_forum.php>View your topic</a></p>";
    
    echo "<p><div>Successful<br>
<a href=main_forum.php>View your topic</a></div></p>";
}
else {
echo "ERROR";
}
mysqli_close($con);
?>
    </body>
    <style>
body
{   
    background-image: url("clouds-1546822__480.jpg");
    height: 500px; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover; 
    background-attachment: fixed;      
}
div
{   
    margin-top: 350px;
    margin-left: 500px;
    width : 605px;
    height:85px;
    font-family: 'Raleway', sans-serif;
    background-color:#ffeecc;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    font-size: 30px;
    text-align: center;
    
}

    </style>
    </html>