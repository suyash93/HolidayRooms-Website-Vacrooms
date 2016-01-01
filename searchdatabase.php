<?php 
if($_POST)
{
	$link = mysql_connect('suyashgargcom.fatcowmysql.com', 'suyash', 'Password@1993'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully';?> <br>
<?php mysql_select_db(sample1);
$searchquery=$_POST["search"];
$sql = "SELECT * FROM `Login Details` WHERE  `firstname` LIKE '$searchquery' OR `lastname` LIKE '$searchquery' OR  `email` LIKE '$searchquery' OR `mobilephone` LIKE  '$searchquery' ";
$sql_query= mysql_query($sql);
echo '<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
       <th>Email</th>
      <th>Address</th>
     <th>Landline</th>
     <th>Mobile Number</th>
    </tr>';
for($counter=0; $row=mysql_fetch_row($sql_query); $counter++)
{
print("<tr>");
foreach ($row as $key=>$value)
print("<td> $value \n </td>");?> <br>
<?php
print("</tr>");
}
echo "Your search yielded ";
echo $counter ;
echo " results ";
}
else{
echo "<p> Please enter a search query</p>";
}
mysql_close($link);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Present Users|Vacrooms</title>
</head>
<a href="http://www.suyashgarg.com/users.php">Back to Users</a>
<body>


</body>
</html>