<?php
include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
} else {
	$user_id = '';
}

//register user
if (isset($_POST['submit'])) {
	$id = unique_id();
	$name = $_POST['name'];
	$name = filter_var($name, FILTER_SANITIZE_STRING);
	$email = $_POST['email'];
	$email = filter_var($email, FILTER_SANITIZE_STRING);
	$pass = $_POST['pass'];
	$pass = filter_var($pass, FILTER_SANITIZE_STRING);
	$cpass = $_POST['cpass'];
	$cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

	$select_user = $conn->prepare("SELECT * FROM `users` WHERE  email = ?");
	$select_user->execute([$email]);
	$row = $select_user->fetch(PDO::FETCH_ASSOC);

	if ($select_user->rowCount() > 0) {
		$warning_msg[] = 'email already exist';
	} else {
		if ($pass != $cpass) {
			$warning_msg[] = 'confirm your password';
		} else {
			$insert_user = $conn->prepare("INSERT INTO `users`(id,name,email,password) VALUES(?,?,?,?)");
			$insert_user->execute([$id, $name, $email, $pass]);
			header('location: /');
			$select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
			$select_user->execute([$email, $pass]);
			$row = $select_user->fetch(PDO::FETCH_ASSOC);
			if ($select_user->rowCount() > 0) {
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['user_name'] = $row['name'];
				$_SESSION['user_email'] = $row['email'];
			}
		}
	}
}

?>
<style type="text/css">
	<?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>green tea - register now</title>
</head>

<body>
	<div class="main-container">
		<section class="form-container">
			<div class="title">
				<img src="img/coffee_logo.png">
				<h1>register now</h1>
				<p>Join the Coffee Co. community today and enjoy exclusive member benefits! Register now to start personalizing your coffee experience, track your orders, and get access to special promotions and updates.
				</p>
			</div>
			<form action="" method="post">
				<div class="input-field">
					<p>your name <sup>*</sup></p>
					<input type="text" name="name" required placeholder="enter your name" maxlength="50">
				</div>
				<div class="input-field">
					<p>your email <sup>*</sup></p>
					<input type="email" name="email" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<div class="input-field">
					<p>your passwod <sup>*</sup></p>
					<input type="password" name="pass" required placeholder="enter your passwod" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<div class="input-field">
					<p>confirm passwod <sup>*</sup></p>
					<input type="password" name="cpass" required placeholder="enter your passwod" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<input type="submit" name="submit" value="register now" class="btn">
				<p>already have an account? <a href="login.php">login now</a></p>
			</form>
		</section>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<?php include 'components/alert.php'; ?>
</body>

</html>