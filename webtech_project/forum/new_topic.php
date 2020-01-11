<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<br><br><br><br><br><br><br><br>
<table width="700" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_new_topic.php">
<td>
<table width="100%" border="0" cellpadding="7" cellspacing="7" bgcolor="#FFFFFF">
<tr>  
<td id="head" colspan="4" bgcolor="#E6E6E6" style="font-family: 'Raleway', sans-serif; border-radius: 20px;" text-align='center'><strong>Create New Topic</strong> </td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td style="font-family: 'Raleway', sans-serif;"><strong >Name</strong></td>
<td>:</td>
<td><input name="name" type="text" id="name" size="70" /></td>
</tr>
<tr>
<td style="font-family: 'Raleway', sans-serif;"><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="text" id="email" size="70" /></td>
</tr>
<tr>
<td width="14%" style="font-family: 'Raleway', sans-serif;"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="70" /></td>
</tr>


<tr>
<td valign="top" style="font-family: 'Raleway', sans-serif;"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail"  cols="66" rows="7" id="detail"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><br><input type="submit" class="btn" name="Submit" value="Submit" />
<input type="reset" class="btn" name="Submit2" value="Reset" />
</td>
<td><a href="main_forum.php" style="font-family: 'Raleway', sans-serif;" >Go to forums</a></td>
</tr>
</table>
</td>
    
</form>

</tr>
</table>
<style>
table{
    background-color:#ffeecc;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

.btn{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    font-family: 'Raleway', sans-serif;
    width:100px;
    height:25px;
    border-radius: 2px;
    background-color: #ffd699;}

#head{
        font-size:25px
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
</style>
</body>
</html>