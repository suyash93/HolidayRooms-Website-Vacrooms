<?php 
echo "Data from My Website ";?> <br />
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
?><br />
<?php
echo "Data from www.mingxiaoguo.com ";
$channel= curl_init();
curl_setopt($channel, CURLOPT_URL, "http://www.mingxiaoguo.com/GetAllUsers.php");
curl_setopt($channel, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($channel, CURLOPT_HEADER, 0);
$output1= curl_exec($channel);
curl_close($channel);
print_r($output1);?><br />
<?php
echo "Data from www.sejalgupta.com";
$curl = curl_init('http://www.sejalgupta.com/school/views/selfUser.php');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$page = curl_exec($curl);
if (curl_errno($curl)) {
	echo "Scraper error: ", curl_error($curl);
	exit;
}
curl_close($curl);
$regex = '/<div class="row myTable">(.*?)<\/div>/s';
if (preg_match($regex, $page, $list)) 
	echo $list[0];
else 
	print("Not Found");
?>
