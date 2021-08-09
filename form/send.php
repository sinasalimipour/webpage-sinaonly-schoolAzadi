
<?php
header('Content-Type: text/html; charset=utf-8');
mysqli_set_charset($conn,"utf8");

if (isset($_POST['stu_code']) && isset($_POST['stu_name'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	


	


// name and phone
   $stu_code = validate($_POST['stu_code']);
   $stu_name = validate($_POST['stu_name']);
   $stu_name1 = validate($_POST['stu_name1']);
   $stu_name2 = validate($_POST['stu_name2']);
   $stu_phone = validate($_POST['stu_phone']);
   $stu_phone1 = validate($_POST['stu_phone1']);
   $stu_phone2 = validate($_POST['stu_phone2']);


   // degrees and job
   $stu_job = validate($_POST['stu_job']);
   $stu_job1 = validate($_POST['stu_job1']);
   $stu_degree = validate($_POST['stu_degree']);
   $stu_degree1 = validate($_POST['stu_degree1']);




   //نمره انضباط و مدرسه سال قبل
   $stu_numclass1 = validate($_POST['stu_numclass1']);
   $stu_numclass = validate($_POST['stu_numclass']);
   $stu_school = validate($_POST['stu_school']);
  
  
  //کد ملی  تلفن ثابت سن ادرس  اشنایی با مدرسه
   
   $stu_telh = validate($_POST['stu_telh']);
   $stu_age = validate($_POST['stu_age']);
   $stu_x = validate($_POST['stu_x']);
   $stu_address = validate($_POST['stu_address']);


   // selected base and  major

   $stu_base = validate($_POST['stu_base']);
   $stu_major = validate($_POST['stu_major']);

	
	//add اولویت بندی و معدل انظبات سه سال قبل ۷و۸و۹
    $stu_x1 = validate($_POST['stu_x1']);
    $stu_disciplinegrade7 = validate($_POST['stu_disciplinegrade7']);
	$stu_disciplinegrade8 = validate($_POST['stu_disciplinegrade8']);
	$stu_disciplinegrade9 = validate($_POST['stu_disciplinegrade9']);



	if (empty($stu_code) || empty($stu_name)) {
		header("Location: index.html");
	}else {

		$sql ="INSERT INTO users(stu_code , stu_name ,stu_name1,stu_name2,stu_phone,stu_phone1,stu_phone2,stu_job,stu_job1,stu_degree,stu_degree1,stu_numclass,stu_numclass1,stu_school,stu_telh,stu_age,stu_x,stu_address,stu_base,stu_major,stu_x1,stu_disciplinegrade7,stu_disciplinegrade8,stu_disciplinegrade9) VALUES('$stu_code','$stu_name','$stu_name1','$stu_name2','$stu_phone','$stu_phone1','$stu_phone2','$stu_job','$stu_job1','$stu_degree','$stu_degree1','$stu_numclass','$stu_numclass1','$stu_school','$stu_telh','$stu_age','$stu_x','$stu_address','$stu_base','$stu_major','$stu_x1','$stu_disciplinegrade7','$stu_disciplinegrade8','$stu_disciplinegrade9')";


		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "<h1><a href=https://www.azadeschool3.ir/>ثبت شد برو به سایت اصلی</a></h1>";
		}else {
			echo "<h1>پیام ارسال نشد لطفا تمام جا ها خالی رو پر کنید</h1>";
		}
	}

}else {
	header("Location: index.html" );
}