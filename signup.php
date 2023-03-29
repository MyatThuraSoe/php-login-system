<html>

<head>
	<title>Signup</title>
	<link rel="icon" type="image/jpg" href="assets/img/M.jpg" />
	<!-- font awesome css1 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="assets/css/index.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div className="container">

		<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p>Fill in all fields!</p>";
			}
			if ($_GET["error"] == "invalidusername") {
				echo "<p>Username contains invalid characters.</p>";
			}
			if ($_GET["error"] == "invalidemail") {
				echo "<p>Invalid email address.</p>";
			}
			if ($_GET["error"] == "passwordmismatch") {
				echo "<p>You entered two different passwords.</p>";
			}
			if ($_GET["error"] == "usernametaken") {
				echo "<p>Sorry, this username is already taken.</p>";
			}
			if ($_GET["error"] == "stmtfailed") {
				echo "<p>Something went wrong, try again later.</p>";
			}
			if ($_GET["error"] == "emailregistered") {
				echo "<p>You already registered with this email address.</p>";
			}
			if ($_GET["error"] == "none") {
				echo "<p>We signed you up. Welcome!</p>";
			}
		}
		?>

		<div class="main-container">

			<div class="form-container reg-area">
				<h1 class="text-center">Register Here</h1>
				<form action="includes/signup.inc.php" method="post">
					<div class="form-group">
						<input type="text" name="fullname" class="form-control" placeholder="Full name">
					</div>
					<div class="form-group">
						<input type="text" name="username" id="usernamereg" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="text" name="email" id="emailreg" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="password" id="passwordreg" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="password" name="passwordRepeat" id="passwordreg" class="form-control" placeholder="Password repeat">
					</div>
					<div class="d-grid">
						<button type="submit" name="submit" class="btn">Register</button>
					</div>
					<span>Have an account ? <a href="login.php" class="login-link">Login here</a></span>
				</form>

			</div>
			<div class="img-container register-img">
				<img src="assets/img/register.svg" alt="register">
			</div>
		</div>



	</div>

</body>

</html>