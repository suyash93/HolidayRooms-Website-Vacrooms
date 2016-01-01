<?php 
	$link = mysql_connect('suyashgargcom.fatcowmysql.com', 'suyash', 'Password@1993'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
$sql = "SELECT * FROM `Login Details`";
mysql_select_db('sample1');
$result = mysql_query($sql,$link);
if (!$result) {
	die("Cannot access data: ".mysql_error());
}
?>
<?php
while ($row= mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo  
	"<tr class='active'>
	<td width='15%'>{$row['firstname']}</td> ".
          "<td width='15%'>{$row['lastname']}</td> ".
          "<td width='10%'>{$row['email']}</td> ".
          "<td width='30%'>{$row['address']}</td> ".
          "<td width='15%'>{$row['homephone']}</td> ".
          "<td width='15%'>{$row['mobilephone']}</td></tr> ";?> <br >
<?php
}
mysql_close($link);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Website Data</title>
</head>
<a href="http://www.suyashgarg.com/users.php">Back to Users</a>
<body>
</body>
</html>