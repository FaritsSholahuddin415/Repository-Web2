<?php
	$con = mysqli_connect("localhost","root","");
	if (!$con){
		die('Could not connect: ' . mysqli_error());  
	} 
	mysqli_select_db($con, "lat_dbase"); 
	mysqli_query($con, "UPDATE tblmhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'"); 
	mysqli_close($con);
?>