<?php 
	$conn = mysqli_connect("localhost","root","","dchat");
	if(!$conn){
		echo 'db not connected'.mysqli_connect_error();
	}
?>