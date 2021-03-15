<?php

	$conn = mysqli_connect('localhost','root','','bank');

	if(!$conn){
		die("Could not connect to the database --> ".mysqli_connect_error());
	}

?>