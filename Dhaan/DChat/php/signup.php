<?php 
	session_start();
	include_once "config.php";
	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);

	if (!empty($fname)&&!empty($lname)&&!empty($email)&&!empty($pass)) {
		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$sql = mysqli_query($conn,"SELECT email from users where email = '{$email}'");
			if(mysqli_num_rows($sql) > 0){
				echo "$email - This email already exists";
			} else{
				if (isset($_FILES['image'])) {
					$img_name = $_FILES['image']['name'];
					$tmp_name = $_FILES['image']['tmp_name'];
					$img_explode = explode('.', $img_name);
					$img_ext = end($img_explode);
					$extensions = ['png','jpg','jpeg'];
					if(in_array($img_ext, $extensions)===true){
						$time = time();
						$new_img_name = $time.$img_name;
						if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
							$status = "Online";
							$random_id = rand(time(),10000000);
							$sql2 = mysqli_query($conn,"INSERT into users (unique_id,fname,lname,email,password,img,status) 
														values ({$random_id},'{$fname}','{$lname}','{$email}','{$pass}','{$new_img_name}','{$status}')");
							if ($sql2) {
								$sql3 = mysqli_query($conn,"SELECT * from users where email = '{$email}'");
								if (mysqli_num_rows($sql3) > 0) {
									$row = mysqli_fetch_assoc($sql3);
									$_SESSION['unique_id'] = $row['unique_id'];
									echo 'success';
									
								}
							} else{
								echo "insertion error";
							}
						}
					} else{
						echo 'Please Select image file ( jpeg, jpg, png )';
					}
				} else{
					echo "Please select an Image file for your Profile Pic!";
				}
			}
		}else{
			echo "$email - This is not a valid email";
		}
	} else{
		echo 'All fields are not filled';
	}
 ?>