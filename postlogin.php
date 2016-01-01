<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>postlogin</title>
</head>
<?php 
if($_POST["username"]=="admin")
{
	echo $_POST["username"];
}
else
    echo "Wrong username";

?>
<body>
</body>
</html>