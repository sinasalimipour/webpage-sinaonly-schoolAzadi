<!DOCTYPE html>
<html lang="fa" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
  </body>
</html>

<?php

header('Content-Type: text/html; charset=utf-8');

$sname = "localhost:3306";
$uname = "azadesch_useraccounts";
$password = "0Pu2E)s6w!1oYY";

$db_name = "azadesch_useraccounts";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}

mysqli_set_charset($conn,"utf8");

