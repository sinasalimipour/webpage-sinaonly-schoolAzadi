<?php

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