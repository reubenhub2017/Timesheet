
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

=======
										
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
<ul class="list">
	<li><a href="Cummulative.php">Cumulative summary</a></li>
	<li><a href="Account.php">Account Setting</a></li>
	<li><a href="">Help</a></li>
<<<<<<< HEAD
	<li><?php
=======
	<li><?php 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
		echo "<a href='logout.php' id='logout'>Logout</a>"
	?></li>

</ul>

</div>

	<div id="container-main">
		<div id="summary_box">
			<h1>Account</h1>
			<!--Adding a admin to the user -->
			<form method="post" action="account.php">
			</br>
			<input type ="text" name="new_admin" placeholder="Add admin"></br></br>
			<input type ="password" name="new_pass" placeholder ="Add password"></br></br>
			<input type="submit" name="adding_admin_new" value="Add admin"></br>

			</form>
<<<<<<< HEAD
			<?php
=======
			<?php 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff

			$result = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');
			$con = $result;
			$add_name = @$_POST['new_admin'];
			$add_pass = md5(@$_POST['new_pass']);
			$submit = @$_POST['adding_admin_new'];

			if(isset($submit)){
				if(!isset($add_name) || trim($add_name) =="" || !isset($add_pass)  || trim($add_pass) == ""){
<<<<<<< HEAD
				//we will send a notification that you added new notication using notify
				}else {
					$sql = "INSERT INTO echoadmin (user,password) VALUES ('$add_name','$add_pass')";
					$query = mysqli_query($con,$sql);

=======
				//we will send a notification that you added new notication using notify 
				}else {
					$sql = "INSERT INTO echoadmin (user,password) VALUES ('$add_name','$add_pass')";
					$query = mysqli_query($con,$sql);
				  
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
				}

			}


			?>
<hr><h1>List of Admin</h1>
<<<<<<< HEAD
			<?php
			$result = mysqli_connect('#','#','#');
			//getting the admins from the database
=======
			<?php 
			$result = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');
			//getting the admins from the database  
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
			include("new_echostudentscript.php");
				$adminquery = mysqli_query($result,"SELECT user, password FROM echoadmin");
				$results = $adminquery;
				while($row = mysqli_fetch_array($results)){
					echo "<table>
							<tr>
								<th>Admin</th>
										<th>Password</th>
											</tr>
							<tr>
								<td>$row[user]</td>
								<td>$row[password]</td>
<<<<<<< HEAD

=======
								
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
									</tr>

								</table>";
				}


			?>


			<div id="delete_button">
			<center><input type="submit" name="delete_yr_tbl" id="deletebutton" value="Delete this years table"></center>
				<!--javascript we need to alert the user if she actually whats to do this-->
<<<<<<< HEAD
			</div>
				<?php
=======
			</div>	
				<?php 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
				//we will user noty for the notification
				$delcall = @$_POST['delete_yr_tbl'];
					if($delcall){
						//we will call the deleting function
						tbl_deletion();
						//we will send the notify applicatoin to send the function that the tbl are the deleted

					}
<<<<<<< HEAD
			//Deleting years table
			//adding admin users passwords or changing it
			//adding the version of the timesheet application
=======
			//Deleting years table 
			//adding admin users passwords or changing it 
			//adding the version of the timesheet application 
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff



			?>
<<<<<<< HEAD


=======
			
			
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff


		</div>


<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> f59b39ecf591907d1684d1039db767c105f44cff
