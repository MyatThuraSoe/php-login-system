<html>

<head>
	<title>Login</title>
	<link rel="icon" type="image/jpg" href="assets/img/M.jpg" />

	<!-- font awesome css1 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="assets/css/index.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div>
		<div className="container">
			<?php
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "emptyinput") {
					echo "<p>Fill in all fields!</p>";
				}
				if ($_GET["error"] == "wronglogin") {
					echo "<p>Invalid login credentials!</p>";
				}
			}
			if (isset($_GET["s"])) {
				if ($_GET["s"] == "regsuccess") {
					echo "<p>Account created! You can login here.</p>";
				}
			}
			?>
			<div class="main-container">
				<div class="img-container login-img">
					<img src="assets/img/login.svg" alt="login">
				</div>

				<div class="form-container login-area">
					<h1 class="text-center">Login Here</h1>
					<form action="includes/login.inc.php" method="post">
						<div class="form-group">
							<input type="text" name="username" id="username" class="form-control" placeholder="Username">
						</div>
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control" placeholder="Password">
						</div>
						<div class="d-grid">
							<button type="submit" name="submit" class="btn">Login</button>
						</div>
						<span>Don't have an account ? <a href="signup.php" class="register-link">Register</a></span>
					</form>

				</div>
			</div>

		</div>

	</div>

</body>

</html>