<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="user_database"; // Database name 
$tbl_name="fquestions"; // Table name 

// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password");
mysqli_select_db($con, "$db_name");

// get value of id that sent from address bar 
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysqli_query($con, $sql);
$rows=mysqli_fetch_array($result);
?>
<body>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1" style="font-family: 'Raleway', sans-serif;"><strong>By :</strong> <?php echo $rows['name']; ?> <strong>Email : </strong><?php echo $rows['email'];?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1" style="font-family: 'Raleway', sans-serif;"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>

<?php

$tbl_name2="fanswer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysqli_query($con, $sql2);
while($rows=mysqli_fetch_array($result2)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1" style="font-family: 'Raleway', sans-serif;"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#F8F7F1" style="font-family: 'Raleway', sans-serif;"><strong>Name</strong></td>
<td width="5%" bgcolor="#F8F7F1">:</td>
<td width="77%" bgcolor="#F8F7F1"><?php echo $rows['a_name']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1" style="font-family: 'Raleway', sans-serif;"><strong>Email</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_email']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1" style="font-family: 'Raleway', sans-serif;"><strong>Answer</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1" style="font-family: 'Raleway', sans-serif;"><strong>Date/Time</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>

<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysqli_query($con, $sql3);
$rows=mysqli_fetch_array($result3);
$view=$rows['view'];

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysqli_query($con, $sql4);
}

// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysqli_query($con, $sql5);
mysqli_close($con);
?>

<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>
<table width="100%" border="0" cellpadding="7" cellspacing="7" bgcolor="#FFFFFF">
   
<tr>
<td width="18%" style="font-family: 'Raleway', sans-serif;" cellspacing="10px"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="70"></td>
</tr>
<tr>
<td style="font-family: 'Raleway', sans-serif;"><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="text" id="a_email" size="70"></td>
</tr>
<tr>
<td valign="top" style="font-family: 'Raleway', sans-serif;"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="66" rows="7" id="a_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" id="btn" name="Submit" value="Submit"> <input id="btn" type="reset" name="Submit2" value="Reset"></td>
<td><a href="main_forum.php" style="font-family: 'Raleway', sans-serif;">Go to forums</a></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</body>
<style>
    table{
    background-color:#ffeecc;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    body
{   
    background-image: url("clouds-1546822__480.jpg");
    height: 500px; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover; 
    background-attachment: fixed;      
}

#btn{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    font-family: 'Raleway', sans-serif;
    width:100px;
    height:25px;
    border-radius: 2px;
    background-color: #ffd699;}


</style>
</html>