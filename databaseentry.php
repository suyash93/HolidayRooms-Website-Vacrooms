<?php 
if($_POST)
{
	$link = mysql_connect('suyashgargcom.fatcowmysql.com', 'suyash', 'Password@1993'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysql_select_db(sample1);
$first_name=$_POST['FirstName'];
$last_name= $_POST['LastName'];
$email= $_POST['Email'];
$address=$_POST['Address'];
$landline=$_POST['Landline'];
 $mobile= $_POST['Mobile'];
 $sql = "INSERT INTO `Login Details` (`firstname`, `lastname`, `email`, `address`, `homephone`, `mobilephone`) 
 VALUES ('$first_name', '$last_name', '$email', '$address', '$landline', '$mobile')";
 mysql_query($sql);
 echo "<h2> Record added successfully!</h2>";
 mysql_close($link);
}else{
echo "Incomplete form input";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<a href="http://www.suyashgarg.com/users.php">Back to Users</a>
<body>
</body>
</html>