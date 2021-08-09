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
mysqli_set_charset($conn,"utf8");

if (isset($_POST['name']) && isset($_POST['subject'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$subject = validate($_POST['subject']);
  $email = validate($_POST['email']);
  $message = validate($_POST['message']);

	if (empty($name) || empty($subject)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO feedback(name, subject,email, message) VALUES('$name', '$subject', '$email', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "<h1><a href=https://www.azadeschool3.ir/>ثبت شد برو به سایت اصلی</a></h1>";
		}else {
			echo "ناقص میباشد دوباره امتحان کن";
		}
	}

}else {
	header("Location: index.html");
	
}


