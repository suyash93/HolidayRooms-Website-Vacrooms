<?php
$link = mysql_connect('suyashgargcom.fatcowmysql.com', 'suyash', 'Password@1993');
if (!$link) {
	die('Could not connect: '.mysql_error());
}
mysql_select_db(sample1);
$sql= "SELECT  pname, Count(*) FROM    top5 Group By pname order By Count(*) DESC LIMIT 0,5";
$result = mysql_query($sql);
while($row= mysql_fetch_assoc($result))
{
 echo "Product Name: " .$row[pname].  "<br>";
}
mysql_close($link);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Top5</title>

</head>

<body>
</body>
</html>