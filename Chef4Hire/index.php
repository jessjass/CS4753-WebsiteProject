<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
Strongly Typed by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body class="homepage">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			<div id="header" class="container">

				<!-- Logo -->
				<h1 id="logo" ><a href="index.html">Chef-4-Hire</a></h1>
			</br>
			<img src="images/Picture1transparent.jpg" width="125" height="95"></img>
		</br>
		<h3>Never be Hungry Again!</h3>
		<!-- Nav -->
		<nav id="nav">
			<ul>
        <?php
        if(isset($_SESSION['loggedin'])){
          if ($_SESSION['loggedin'] == TRUE){
    				echo "<li><a class=\"icon fa-home\" href='index.php'><span>Home</span></a></li>";
    				echo "<li><a class=\"icon fa-users\" href='about.php'><span>About Us</span></a></li>";
            echo "<li><a class=\"icon fa-spoon\" href='shopping.php'><span>Shop Now</span></a></li>";
    				echo "<li><a class=\"icon fa-sign-in\" href='logout.php'><span>Log Out</span></a></li>";
          }
        } else {
          echo "<li><a class=\"icon fa-home\" href='index.php'><span>Home</span></a></li>";
  				echo "<li><a class=\"icon fa-users\" href='about.php'><span>About Us</span></a></li>";
  				echo "<li><a class=\"icon fa-pencil\" href='signup.php'><span>Sign up</span></a></li>";
  				echo "<li><a class=\"icon fa-sign-in\" href='login.html'><span>Log in</span></a></li>";
        }
        ?>
			</ul>
		</nav>

	</div>
</br>
</div>
<div id="features-wrapper3">
	<section id="features" class="container">
		<div class="row">
			<div class="4u 12u(mobile)">

				<!-- Feature -->

				<a  class="image2 featured"><h3 class = "hello">Convenience</h3></a>

			</div>
			<div class="4u 12u(mobile)">

				<!-- Feature -->

				<a  class="image2 featured"><h3 class = "hello">Quality</h3></a>


			</div>
			<div class="4u 12u(mobile)">

				<!-- Feature -->
				<a  class="image2 featured"><h3  class = "hello">Delivery</h3></a>


			</div>
		</div>
	</div>
	<div id="banner-wrapper">

		<div class="image"><a><img src="images/image2(chef).jpg" alt="" /></a></div>

	</div>
	<!-- Features -->
	<div id="features-wrapper">
		<section id="features" class="container">
			<header>
				<h2>How it Works</h2>
			</header>
			<div class="row">
				<div class="4u 12u(mobile)">

					<!-- Feature -->
					<section>
						<a class="image featured"><img src="images/NewComp.png" width="265" height="230"alt="" /></a>
						<header>
							<h3>You Order</h3>
						</header>
						<p>Select a tasty meal from our unlimited home-cooked cuisines options.
						</section>

					</div>
					<div class="4u 12u(mobile)">

						<!-- Feature -->
						<section>
							<a class="image featured"><img src="images/Chef2.png" width="265" height="230"alt="" /></a>
							<header>
								<h3>We Cook</h3>
							</header>
							<p id="description">Select from a wide range of chefs to cook your meal for you.</p>
						</section>

					</div>
					<div class="4u 12u(mobile)">

						<!-- Feature -->
						<section>
							<a class="image featured"><img src="images/car2.jpg" width="275" height="230"alt="" /></a>
							<header>
								<h3>We deliver</h3>
							</header>
							<p>Fast delivery for your convenience and enjoyment.</p>
						</section>

					</div>
				</div>
				<ul class="actions">
					<li><a href="signup.html" class="button icon fa-file">Eat Now</a></li>
				</ul>
			</section>
		</div>

		<!-- Banner -->
		<div id="banner-wrapper">

			<div class="image"><a><img src="images/image16.jpg" width="960" height="350" alt="" /></a></div>

		</div>

		<!-- Main -->
		<div id="features-wrapper2">
			<section id="features" class="container">
				<header>
					<h2>Cuisines</h2>
				</header>
				<div class="row">
					<div class="4u 12u(mobile)">

						<!-- Feature -->
						<section>
							<a href="#" class="image featured"><img src="images/AmericanFoodCover.jpg" width="265" height="230"alt="" /></a>
							<header>
								<h3>American<h3>
								</header>
							</section>

						</div>
						<div class="4u 12u(mobile)">

							<!-- Feature -->
							<section>
								<a href="#" class="image featured"><img src="images/IndianFoodCover.jpg" width="265" height="230"alt="" /></a>
								<header>
									<h3>Indian<h3>
									</header>
								</section>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
								<section>
									<a href="#" class="image featured"><img src="images/WestAfricanCover.jpg" width="265" height="230"alt="" /></a>
									<header>
										<h3>West African<h3>
										</header>
									</section>

								</div>
								<div class="4u 12u(mobile)">

									<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/ItalianFoodCover.jpg" width="265" height="230"alt="" /></a>
										<header>
											<h3>Italian<h3>
											</header>
										</section>

									</div>
									<div class="4u 12u(mobile)">

										<!-- Feature -->
										<section>
											<a href="#" class="image featured"><img src="images/AuthenticMexicanCover.jpg" width="265" height="230"alt="" /></a>
											<header>
												<h3>Mexican</h3>
											</header>
										</section>

									</div>
									<div class="4u 12u(mobile)">

										<!-- Feature -->
										<section>
											<a href="#" class="image featured"><img src="images/EthopianFoodCover.jpg" width="275" height="230"alt="" /></a>
											<header>
												<h3>Ethopian</h3>
											</header>

										</section>
									</div>
									<div class="4u 12u(mobile)">

										<!-- Feature -->
										<section>
											<a href="#" class="image featured"><img src="images/ThaiFoodCover.jpg" width="265" height="230"alt="" /></a>
											<header>
												<h3>Thai<h3>
												</header>
											</section>

										</div>
										<div class="4u 12u(mobile)">

											<!-- Feature -->
											<section>
												<a href="#" class="image featured"><img src="images/Greek-MedFoodCover.jpg" width="265" height="230"alt="" /></a>
												<header>
													<h3>Mediterranean<h3>
													</header>
												</section>

											</div>
											<div class="4u 12u(mobile)">

												<!-- Feature -->
												<section>
													<a href="#" class="image featured"><img src="images/ChineseFoodCover.jpg" width="265" height="230"alt="" /></a>
													<header>
														<h3>Chinese<h3>
														</header>
													</section>

												</div>
								</div>
							</div>
							<div id="banner-wrapper">

								<div class="image"><a><img src="images/food.jpg" width="960" height="300" alt="" /></a></div>

							</div>
						</div>
						<div id="footer-wrapper">
							<div id="footer" class="container">
								<header>
									<h2>Questions or comments? <strong>Get in touch:</strong></h2>
								</header>
								<div class="row">
									<div class="6u 12u(mobile)">
										<section>
											<form method="post" action="#">
												<div class="row 50%">
													<div class="6u 12u(mobile)">
														<input name="name" placeholder="Name" type="text" />
													</div>
													<div class="6u 12u(mobile)">
														<input name="email" placeholder="Email" type="text" />
													</div>
												</div>
												<div class="row 50%">
													<div class="12u">
														<textarea name="message" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="row 50%">
													<div class="12u">
														<a href="#" class="form-button-submit button icon fa-envelope">Send Message</a>
													</div>
												</div>
											</form>
										</section>
									</div>
									<div class="6u 12u(mobile)">
										<section>

											<div class="row">
												<div class="6u 12u(mobile)">
													<ul class="icons">
														<li class="icon fa-home">
																<a href="index.php">Home</a>
														</li>
														<li class="icon fa-users">
															<a href="about.php">About us</a>
														</li>

													</ul>
												</div>
												<div class="6u 12u(mobile)">
													<ul class="icons">
														<li class="icon fa-twitter">
															<a href="#">@CHEF4HIRE</a>
														</li>
														<li class="icon fa-instagram">
															<a href="#">instagram.com/CHEF4HIRE</a>
														</li>

														<li class="icon fa-facebook">
															<a href="#">facebook.com/CHEF4HIRE</a>
														</li>
													</ul>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
								</br>
							<div id="copyright" class="container">
								<ul class="links">
									<li>&copy; Chef-4-Hire 2017. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/skel-viewport.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

	</body>
	</html>
