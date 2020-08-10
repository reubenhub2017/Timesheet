<<<<<<< HEAD
<?php

include("db_connect.php");
$result = mysqli_connect('#','#','#','#');
//this is to add the echo student database
function register($fn, $ln, $ag, $d, $hr, $sch, $mail) {

$result = mysqli_connect('#','#','#','#');

//connects to the databases
$sql = "INSERT INTO users (f_name,l_name,age,week,hours,school,email) VALUES ('$fn', '$ln','$ag','$d','$hr','$sch','$mail')";
$k = mysqli_query($result,$sql);

=======
<?php 

include("db_connect.php");
$result = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');
//this is to add the echo student database
function register($fn, $ln, $ag, $d, $hr, $sch, $mail) {

$result = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');

//connects to the databases 
$sql = "INSERT INTO users (f_name,l_name,age,week,hours,school,email) VALUES ('$fn', '$ln','$ag','$d','$hr','$sch','$mail')";
$k = mysqli_query($result,$sql);
	
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff

}

function redirect(){
	header("location:/echoadmin");
}
//I noticed that the database probably wont noticed it's the same name
//so we can change the first name to capital case every time they input their timesheet



<<<<<<< HEAD
//this function is to see if the inputs is empty
=======
//this function is to see if the inputs is empty 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff



function loginout(){
	session_start();
	session_destroy();
<<<<<<< HEAD
	//redirect this to the home page
=======
	//redirect this to the home page 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
	header("Location:index.php");
	exit();


}
function emailsender($name) {
	$to = "";
	$subject = "New Student Timesheet submission Notification";
	$message = " We have a new notification of ". $name ."sending a new time information";
<<<<<<< HEAD
	$headers = 'From : www.echotimesheet.com' . "\r\n" .
		'Reply-To: www.echotimesheet.com'. "\r\n" .
=======
	$headers = 'From : www.echotimesheet.com' . "\r\n" . 
		'Reply-To: www.echotimesheet.com'. "\r\n" . 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
		'X-Mailer: PHP:' . phpversion();



}
function protection($inputs){
	$protected = strip_tags($inputs);
	$protected = mysql_real_escape_string($protected);


}
function updatingstudenthours($fname1,$hours1, $school1){
<<<<<<< HEAD
	$con = mysqli_connect('#','#','#','#');
=======
	$con = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
	//we need to check if the students match
	$query = mysqli_query($con, "SELECT Name FROM individual_student WHERE Name = '$fname1' AND school = '$school1'");
	$result = $query;
	if(mysqli_num_rows($result) == 1){
		$query3 = mysqli_query($con, "UPDATE individual_student SET t_hours  = t_hours + $hours1 WHERE Name = '$fname1' AND school = '$school1' ");
<<<<<<< HEAD


	}else {
		$query2 = mysqli_query($con, "INSERT INTO individual_student (Name,t_hours,school) VALUES ('$fname1', '$hours1','$school1')");


	}

=======
		

	}else {
		$query2 = mysqli_query($con, "INSERT INTO individual_student (Name,t_hours,school) VALUES ('$fname1', '$hours1','$school1')");
		

	}
	
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff

}
function updatingschoolshours($hrs,$schl){

<<<<<<< HEAD
$con = mysqli_connect('#','#','#','#');
=======
$con = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff

$qu = mysqli_query($con, "SELECT Name FROM School2 WHERE Name = '$schl' ");

$results = $qu;

if(mysqli_num_rows($results) == 1){
	$q =  mysqli_query($con,"UPDATE School2 SET Thours  = Thours + $hrs WHERE Name = '$schl' ");
<<<<<<< HEAD

}else {
	$q2 =  mysqli_query($con,"INSERT INTO School2 (Name,Thours) VALUES ('$schl', '$hrs')");

=======
	
}else {
	$q2 =  mysqli_query($con,"INSERT INTO School2 (Name,Thours) VALUES ('$schl', '$hrs')");
	
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
}
}
function tbl_deletion(){
	//deleting a years database
	$del = mysqli_query("DELETE * FROM users");
	$del = mysqli_query("DELETE * FROM individual_students");
	$del = mysqli_query("DELETE * FROM schools");




}
function admin_add(){
	$a_a = $_POST['admin_new_name'];
	$a_c = $_POST['admin_change'];
	if(isset($pst)){
		if(!isset($a_a)){
<<<<<<< HEAD

		}
	}

=======
			
		}
	}
	
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff



}




<<<<<<< HEAD
?>
=======
?>
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
