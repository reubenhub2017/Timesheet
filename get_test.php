
<<<<<<< HEAD
<?php

session_start();
$con =  mysqli_connect('localhost','','','test_db');
=======
<?php 

session_start();
$con =  mysqli_connect('localhost','root','','test_db');
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff

$partialNames = $_POST['partialName'];

$names = mysqli_query($con, "SELECT * FROM test_tbl WHERE name LIKE '%$partialNames%'");
while($name = mysqli_fetch_array($names)){
	echo "{$name['name']}";
<<<<<<< HEAD



}
?>
=======
		 


} 
?>
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
