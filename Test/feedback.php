﻿<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Feedback Survey</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="main.css" />
	</head>
	<body class="is-preload" id="loginBody">

		<!-- Header -->
			<header id="header">
				<a href="#" class="logo icon fa-tree"><span class="label">Icon</span></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="signup.html">Sign Up</a></li>
				</ul>
			</nav>

		<!-- Heading
			<div id="heading" >
				<h1>Login</h1>
			</div> -->

		<!-- Main -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<Survey>

						<form method="POST" action="GrwthFeedbackInsert.php">
							<br />
							<br />
							<br />
							<br />

							<!--Slider-->

							<section class="Range" id="q0">
								<label for="prompt_level">How are the prompts?</label>
								<br>

								<span>Bad</span>
								<input type="range" name="promptQuality" id="Prompt level" value="5" min="0" max="10" step="1">
								<span>Good</span>
								<br>
								<br>
								<br>


									<!--Buttons that control this specific question-->
									<button type="button" onclick="survChange(0,1);">Next</button>

									<br>
									<br>

								</section>


								<!--Slider-->

							<section class="Range" id="q1">
								<label for="site_nav">How easy is the site to navigate?</label>
								<br>

								<span>Hard</span>
								<input type="range" name="navigationQuality" id="Site Nav" value="5" min="0" max="10" step="1">
								<span>Easy</span>
								<br>
								<br>
								<br>

								<!--Buttons that control this specific question-->
								<button type="button" onclick="survChange(1,0);">Previous</button>
								&nbsp
								<button type="button" onclick="survChange(1,2);">Next</button>

								<br>

							</section>
									<!--Yes/No/Explain-->
									<section class="Radio" id="q2">
										<span>Do you understand our product?</span>
										<br>
										<br>

										<input type="radio" name="understandOurProduct" value= "Yes" id="Yes1">
										<label for="Yes1">Yes</label>

										<input type="radio" name="understandOurProduct" value= "No" id="No1">
										<label for="No1">No</label>

										<br>
										<br>
										<br>

										<!--Buttons that control this specific question-->
										<button type="button" onclick="survChange(2,1);">Previous</button>
										&nbsp
										<button type="button" onclick="survChange(2,3);">Next</button>

										<br>

									</section>

									<!--Yes/No/Explain-->
									<section class="Radio" id="q3">
										<span>Are you comfortable with the idea of our product?</span>
										<br>
										<br>

										<input type="radio" name="comfortableWithProduct" value= "Yes2" id="Yes2">
										<label for="Yes2">Yes</label>

										<input type="radio" name="comfortableWithProduct" value= "No2" id="No2">
										<label for="No2">No</label>

										<br>
										<br>
										<br>

										<!--Buttons that control this specific question-->
										<button type="button" onclick="survChange(3,2);">Previous</button>
										&nbsp
										<button type="button" onclick="survChange(3,4);">Next</button>

									</section>

									<!--slider-->


										<section class="Range" id="q4">
											<label for="enjoy_product">How much do you enjoy the product?</label>
											<br>

											<span>No Enjoyment</span>
											<input type="range" name="enjoyProduct" id="Enjoy level" value="5" min="0" max="10" step="1">
											<span>Really Enjoy</span>
											<br>
											<br>
											<br>

											<!--Buttons that control this specific question-->
											<button type="button" onclick="survChange(4,3);">Previous</button>
											&nbsp
											<button type="button" onclick="survChange(4,5);">Next</button>

										</section>

										<!--Text Response-->
										<section class="Textarea" id="q5">
											<label for="useful">In what ways do you think the product is or is not useful?</label>

											<textarea id="Useful" name="productUseful" rows="3" cols="50" maxlength="500" placeholder="Insert comments here"></textarea>
											<br>

												<!--Buttons that control this specific question-->
												<button type="button" onclick="survChange(5,4);">Previous</button>
												&nbsp
												<button type="button" onclick="survChange(5,6);">Next</button>

											</section>

											<!--Text Response-->
											<section class="Textarea" id="q6">
												<label for="improve_on">What can we improve on?</label>

												<textarea id="Improve On" name="improveOn" rows="3" cols="50" maxlength="500" placeholder="Insert comments here"></textarea>
												<br>

												<!--Buttons that control this specific question-->
												<button type="button" onclick="survChange(6,5);">Previous</button>
												&nbsp
												<button type="button" onclick="survChange(6,7);">Next</button>

											</section>

											<!--Text Response-->
											<section class="Textarea" id="q7">
												<label for="what_added">What would you like to see added?</label>

												<textarea id="What Added" name="wantAdded" rows="3" cols="50" maxlength="500" placeholder="Insert comments here"></textarea>
												<br>

												<!--Buttons that control this specific question-->
												<button type="button" onclick="survChange(7,6);">Previous</button>
												&nbsp
												<input type="submit" name="submit" value="submit">

											</section>

											<br />
											<br />
											<br />
											<br />

						</form>
						<!-- php stuff for error message -->
						<?php
							$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

							if (strpos($fullURL, "feedback=empty") == true) {
								echo '<script>alert("Please answer all questions.")</script>';
							}
						?>
					</Survey>





					<!-- Script for making the survey questions rotate-->
					<script>

						function survChange(curr, next) {
							document.getElementById("q" + curr).style.display = "none";
							document.getElementById("q" + next).style.display = "block";
						}

					</script>
				</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Accumsan montes viverra</h3>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
						</section>
						<section>
							<h4>Sem turpis amet semper</h4>
							<ul class="alt">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="feedback.html">Take a Survey</a></li>
								<li><a href="login.html">Login</a></li>
							</ul>
						</section>
						<section>
							<h4>Follow Our Journey</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; grwthLLC
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>