
<<<<<<< HEAD
<?php
include("db_connect.php");
session_start();
$con = mysql_connect("#", "#", "#", "#")or die("cannot connect");
=======
<?php 
include("db_connect.php");
session_start();
$con = mysql_connect("echoperfect10.org", "echstudent", "bSdRb5", "ep10_wp1")or die("cannot connect");
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff

$partialDates = $_POST['partialDate'];
//this is get the names and names information, we can used this sent to result.
$names = mysqli_query($con, "SELECT * FROM wp_timesheet WHERE wkending LIKE '%$partialDates%'" ); //we need the column dates
while($name = mysqli_fetch_array($names, MYSQL_ASSOC)){
	echo "<table id='scroll'>


<tr>
<<<<<<< HEAD
	<th>Name</th>
	<th>School</th>
	<th>Total hours</th>
	<th>Week Ending</th>

					</tr>
<tr>
<td>{$name['sname']}</td>
=======
	<th>Name</th> 
	<th>School</th>
	<th>Total hours</th>
	<th>Week Ending</th> 		

					</tr>
<tr>
<td>{$name['sname']}</td> 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
<td>{$name['location']}</td>
<td>{$name['gtotal']} </td>
<td>{$name['wkending']}</td>



					</tr>

	</table>"
	;
	//we need the column data from the databases
<<<<<<< HEAD

=======
		 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff

}


?>
