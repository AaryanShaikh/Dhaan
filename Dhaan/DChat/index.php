<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dhaan Chat | Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<div class="wrapper" data-tilt data-tilt-glare data-tilt-max-glare="0.3">
		<section class="form signup">
			<header>Dhaan Chat</header>
			<form action="#" enctype="multipart/form-data" autocomplete="off">
				<div class="error-txt"></div>
				<div class="name-details">
					<div class="field input">
						<label for="">First Name</label>
						<input type="text" name="fname" placeholder="First Name" required>
					</div>
					<div class="field input">
						<label for="">Last Name</label>
						<input type="text" name="lname" placeholder="Last Name" required>
					</div>
				</div>
					<div class="field input">
						<label for="">Email</label>
						<input type="text" name="email" placeholder="Enter your Email" required>
					</div>
					<div class="field input">
						<label for="">Password</label>
						<input type="password" name="pass" placeholder="Enter your new Password" required>
						<i class="fas fa-eye"></i>
					</div>
					<div class="field image">
						<label for="">Select Image</label>
						<input type="file" name="image" required>
					</div>
					<div class="field button">
						<input type="submit" value="Continue to chat">
					</div>
			</form>
			<div class="link">Already Signed up? <a href="login.php">Login Now!</a></div>
		</section>
	</div>
	<script src="vanilla-tilt.js"></script>
	<script type="text/javascript" src="js/pass-show-hide.js"></script>
	<script type="text/javascript" src="js/signup.js"></script>
</body>
</html>