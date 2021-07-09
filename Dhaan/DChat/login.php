<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dhaan Chat | Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<div class="wrapper" data-tilt>
		<section class="form login">
			<header>Dhaan Chat</header>
			<form action="#">
				<div class="error-txt"></div>
					<div class="field input">
						<label for="">Email</label>
						<input type="text" name="email" placeholder="Enter your Email">
					</div>
					<div class="field input">
						<label for="">Password</label>
						<input type="password" name="pass" placeholder="Enter your new Password">
						<i class="fas fa-eye"></i>
					</div>
					<div class="field button">
						<input type="submit" value="Continue to chat">
					</div>
			</form>
			<div class="link">Not yet Signed up? <a href="index.php">Sign-up Now!</a></div>
		</section>
	</div>
	<script src="vanilla-tilt.js"></script>
	<script type="text/javascript" src="js/pass-show-hide.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
</body>
</html>