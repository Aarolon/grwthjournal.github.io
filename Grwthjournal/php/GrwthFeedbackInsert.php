<?php
/*  Application: Grwth Feedback Insert File
*  Script Name: GrwthFeedbackInsert.php
*  Description: inserts feedback form data into a SQL database.
*  Last Change/Update: 09/24/2020
*/

//Setting up variables


// Start session
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['submit'])) {

    // connecting to Database
    require_once "configInsert.php";

    //Functions


    //Data from feedback form
    $promptQuality = $_POST['promptQuality'];
    $navigationQuality = $_POST['navigationQuality'];
    $understandOurProduct = $_POST['understandOurProduct'];
    $comfortableWithProduct = $_POST['comfortableWithProduct'];
    $enjoyProduct = $_POST['enjoyProduct'];
    $productUseful = $_POST['productUseful'];
    $improveOn = $_POST['improveOn'];
    $wantAdded = $_POST['wantAdded'];

    //check if inputs are empty
    if (empty($promptQuality) || empty($navigationQuality) || empty($understandOurProduct) || empty($comfortableWithProduct) || empty($enjoyProduct) || empty($productUseful) || empty($improveOn) || empty($wantAdded)) {
      header("Location: http://grwthjournal.co/php/feedback.php?feedback=empty");
      exit();
    }
    $sql = "INSERT INTO grwth_feedback(promptQuality,navigationQuality,understandOurProduct,comfortableWithProduct,enjoyProduct,productUseful,improveOn, wantAdded)
            VALUES ('$promptQuality','$navigationQuality','$understandOurProduct','$comfortableWithProduct','$enjoyProduct','$productUseful','$improveOn','$wantAdded')";
    if(!mysqli_query($con,$sql)){
      echo 'Not Inserted';
    }
  }
}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Feedback Survey</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="./../assets/css/main.css" />
	</head>
  <body class="is-preload" id="loginBody">

		<!-- Header -->
			<header id="header">
				<a href="./../index.html" class="logo icon fa-tree"><span class="label">Icon</span></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="./../index.html">Home</a></li>
	        <li><a href="./../about.html">About</a></li>
					<li><a href="feedback.php">Provide Feedback</a></li>
	        <li><a href="signup.php">Sign Up</a></li>
	        <li><a href="login.php">Login</a></li>
	        <li><a href="userhome.php">User Dashboard</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>

		<!-- Main -->
		<section id="cta" class="wrapper">
			<div class="inner">


          <?php if(!mysqli_query($con,$sql)){
                echo '<p style="font-size: 2rem;">There was an error submitting your response, please try again.</p>';
              } else {
                echo '	<p style="font-size: 2rem;">Thank You For Your Feedback!</p>'
              } ?>
					<a href="./../index.html" style="font-size: 2rem;">Home</a>





				<!-- Script for making the survey questions rotate-->
				<script>

					function survChange(curr, next) {
						document.getElementById("q" + curr).style.display = "none";
						document.getElementById("q" + next).style.display = "block";
					}

				</script>
			</div>
		</section>


		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<div class="content">
					<section>
						<h3>Your Privacy is Our Concern</h3>
						<p>At Grwth, no human will <em>ever</em> see or use your individual data, and the machines will only use it (with your permission) to create custom repsonses for your benefit. If opted in, your data will be aggregated with thousands of other peoples to see large scale trends in population segments.</p>
					</section>
					<section>
						<h4>Navigation</h4>
						<ul class="alt">
              <li><a href="./../index.html">Home</a></li>
              <li><a href="./../about.html">About</a></li>
              <li><a href="signup.php">Logout</a></li>
							<li><a href="./../privacypolicy.html">Privacy Policy</a></li>
						</ul>
					</section>
					<!--<section>
					<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
					<h4>Follow Our Journey</h4>
					<ul class="plain">
						<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
						<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
						<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
					</ul>
				</section> -->
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
