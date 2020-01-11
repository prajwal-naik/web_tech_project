<html>
    <body>

<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="user_database"; // Database name 
$tbl_name="fanswer"; // Table name 

// Connect to server and select databse.
$con = mysqli_connect("$host", "$username", "$password"); 
mysqli_select_db($con, "$db_name");

// Get value of id that sent from hidden field 
$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysqli_query($con, $sql);
$rows=mysqli_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysqli_query($con, $sql2);

if($result2){
echo "<div>Successful<BR> <a href='view_topic.php?id=".$id."'>View your answer</a></div>";

// If added new answer, add value +1 in reply column 
$tbl_name2="fquestions";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysqli_query($con, $sql3);
}
else {
echo "ERROR";
}

// Close connection
mysqli_close($con);
?>
        
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
    </body>
</html>