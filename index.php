<?php
session_start();

if (isset($_SESSION["username"])) {
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Landing Page</title>
		<link rel="icon" type="image/jpg" href="assets/img/M.jpg" />

		<!-- ==== STYLE.CSS ==== -->
		<link rel="stylesheet" href="assets/css/landing.css" />

		<!-- ====  REMIXICON CDN ==== -->
		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

		<!-- ==== ANIMATE ON SCROLL CSS CDN  ==== -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
	</head>

	<body>
		<!-- ==== HEADER ==== -->
		<header class="container header">
			<!-- ==== NAVBAR ==== -->
			<nav class="nav">
				<div class="logo">
					<h2>BOOM!...</h2>
				</div>

				<div class="nav_menu" id="nav_menu">
					<button class="close_btn" id="close_btn">
						<i class="ri-close-fill"></i>
					</button>

					<ul class="nav_menu_list">
						<!-- <li class="nav_menu_item">
							<a href="https://www.linkedin.com/in/myatthurasoe/" class="nav_menu_link">contact</a>
						</li> -->
						<li class="nav_menu_item">
							<a class="nav_menu_link"><i class="ri-user-3-line"></i>
								<?php echo $_SESSION["username"]; ?></a>
						</li>
						<li class="nav_menu_item">
							<a href="includes/logout.inc.php" class="nav_menu_link">Logout</a>
						</li>
					</ul>
				</div>

				<button class="toggle_btn" id="toggle_btn">
					<i class="ri-menu-line"></i>
				</button>
			</nav>
		</header>

		<section class="wrapper">
			<div class="container">
				<div class="welcome-heading">
					<h1>Welcome <span><?php echo $_SESSION["realname"]; ?></span>
						You are now logged in.
					</h1>
				</div>
				<div class="grid-cols-2">
					<div class="grid-item-1">
						<p class="info-text">
							<span>Hi. It's me, Myat Thura Soe.</span><br />
							I'm a versatile web developer, I specialize in building powerful and responsive web applications. Whether you need to build a modern website from scratch or refine your existing site, I have the skills and experience to help you achieve your goals.
						</p>

						<div class="btn_wrapper">
							<button class="btn first-btn">
								<a href="https://www.linkedin.com/in/myatthurasoe/" target="_blank"><i class="ri-linkedin-box-fill"></i>Linkedin</a>
							</button>

							<button class="btn second-btn">
								<a href="https://github.com/MyatThuraSoe" target="_blank"><i class="ri-github-fill"></i>Github</a>
							</button>
						</div>
					</div>
					<div class="grid-item-2">
						<div class="team_img_wrapper">
							<img src="assets/img/welcome-guy.svg" alt="team-img" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="wrapper">
			<div class="container" data-aos="fade-up" data-aos-duration="1000">
				<div class="grid-cols-3">
					<div class="grid-col-item">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
							</svg>
						</div>
						<div class="featured_info">
							<span>Built for developers </span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
								ratione facilis animi voluptas exercitationem molestiae.
							</p>
						</div>
					</div>
					<div class="grid-col-item">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
							</svg>
						</div>
						<div class="featured_info">
							<span>Designed to be modern</span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
								ipsum esse corrupti. Quo, labore debitis!
							</p>
						</div>
					</div>

					<div class="grid-col-item">
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
							</svg>
						</div>
						<div class="featured_info">
							<span>Documentation for everything</span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
								nostrum voluptate totam ipsa corrupti vero!
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer></footer>

		<!-- ==== ANIMATE ON SCROLL JS CDN -->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<!-- ==== GSAP CDN ==== -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
		<!-- ==== SCRIPT.JS ==== -->
		<script src="assets/js/landing.js" defer></script>
	</body>

	</html>


<?php
} else {

?>
	<html>

	<head>
		<title>Unauthorized access</title>
		<link rel="icon" type="image/jpg" href="assets/img/M.jpg" />
		<link rel="stylesheet" href="assets/css/landing.css" />
	</head>

	<body>
		<div class="unauthorized-container">
			<h1>Oops! You can't access to this page</h1>
			<div>
				<button class="login-btn">
					<a href="login.php">Login</a>
				</button>
				<button class="signup-btn">
					<a href="signup.php">Register</a>
				</button>
			</div>
		</div>
	</body>

	</html>
<?php
}
