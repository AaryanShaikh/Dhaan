<?php
	session_start();
	include_once "config.php"; 
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);
	if (!empty($email) && !empty($pass)) {
		$sql = mysqli_query($conn,"SELECT * from users where email = '{$email}' and password = '{$pass}'");
		if(mysqli_num_rows($sql) > 0){
			$row = mysqli_fetch_assoc($sql);
			$status = "Online";
			$sql2 = mysqli_query($conn, "UPDATE users set status = '{$status}' where unique_id = {$row['unique_id']}");
			if($sql2){
				$_SESSION['unique_id'] = $row['unique_id'];
				echo 'success';
			}
		} else{
			echo 'Email or Password is incorrect!';
		}
	} else{
		echo 'All input fields are required!';
	}
?>