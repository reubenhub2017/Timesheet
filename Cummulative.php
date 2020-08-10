<html>
<head>
	<title>ECHO Timesheet Admin</title>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>



<body>
<div id="nav">
<<<<<<< HEAD

=======
	
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
		<h1><a href="home_time.php">ECHO Timesheet Admin</a></h1>

</div>


<div id="sidebar">
	<center><h1>sidebar</h1></center>
<<<<<<< HEAD

<ul class="list">
	<li><a href="Cummulative.php">Cumulative summary</a></li>
	<li><a href="Account.php">Account Settings</a></li>
	<li><a href="">Help</a></li>
	<li><?php
=======
										
<ul class="list">
	<li><a href="Cummulative.php">Cumulative summary</a></li>
	<li><a href="Account.php">Account Settings</a></li> 
	<li><a href="">Help</a></li>
	<li><?php 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
		echo "<a href='logout.php' id='logout'>Logout</a>"
	?></li>

</ul>

</div>

	<div id="container-main">
		<div id="summary_box">
			<h1>Overall Summary</h1>
<<<<<<< HEAD
			<?php
			include("new_echostudentscript.php");
			$con = mysqli_connect('#','#','#','#');
			//we need create a query from the all through tables.
			//we need do some total hours * the amount of pay per day.

=======
			<?php 
			include("new_echostudentscript.php");
			$con = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');
			//we need create a query from the all through tables. 
			//we need do some total hours * the amount of pay per day. 
		
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
			$mathquery = mysqli_query($con,"SELECT * FROM School2  ") ;
			$result = $mathquery;
			while($rows = mysqli_fetch_array($result)){
				echo "
<div id='theschooltotal'>
	<table></br>
<h1><center>Total Hours for School</center></h1>
	<tr>
		<th>School Name</th>
		<th>Total Hours</th>

	</tr>
	<tr>
		<td>$rows[Name]</td>
		<td>$rows[Thours]</td>
			</tr>
	</table>
</div>";
}




?>
<hr>

<<<<<<< HEAD
<?php
$con = mysqli_connect('#','#','#','#');
=======
<?php 
$con = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
//we need to get the individual student
$querystudent = mysqli_query($con, "SELECT * FROM individual_student");
$result = $querystudent;
	while($col = mysqli_fetch_array($result)){
		echo "

		<table>
		<h1><center>Total Hours for individual student</center></h1>
		<tr>
			<th>Name</th>
				<th>School</th>
					<th>Total Hours</th>
</tr>
<tr>
			<td>$col[Name]</td>
				<td>$col[school]</td>
					<td>$col[t_hours]</td>


</tr>

						</table>";
	}


?>
									</div>
							</div>
<<<<<<< HEAD



</div>

=======
			


</div>
	
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff

</body>




</html>
