<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tournament Hub</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.html">
				<img src="img/favicon.png" alt="Logo" height="45px" width="45px">
				<font color = "white"> Tournament</font> 
				<font color = "#ffb320">Hub </font>
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Registeration Section -->
	<section class="page-section spad contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Update Details</h4>

						<?php

						include 'db.php';

						$id = $_GET['id'];

						$sql = "SELECT * FROM register WHERE id = ".$id;

						$result = mysqli_query($conn, $sql);

						if($result)
						{
							$row  = mysqli_fetch_assoc($result);
							$nickname=$row['l_nickname'];
							$email=$row['l_email'];
							$cid=$row['l_cid'];
							$phone=$row['l_phone'];
							$l_crew=$row['crew'];
							$pl2=$row['p2'];
							$pl3=$row['p3'];
							$pl4=$row['p4'];
							$payments=$row['Payment'];
						}

						?>

						<form class="comment-form" action = "editaction.php" method="post">
							<div class="row">
								<input type="hidden" name="id" value = "<?php global $id; echo $id?>" required>
								<div class="col-md-6">
									<input type="text" placeholder="Leader Nickname" name="l_nickname" value = "<?php global $nickname; echo $nickname?>" required>
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="Leader E-mail" name="l_email" value = "<?php global $email; echo $email?>" required>
								</div>
								<div class="col-md-6">
									<input type="number" placeholder="Leader Character ID" name="l_cid" value = "<?php global $cid; echo $cid?>" required>
								</div>
								<div class="col-md-6">
									<input type="tel" placeholder="Leader Phone Number" name="l_phone" value = "<?php global $phone; echo $phone?>" required>
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Crew Name" name="crew" value = "<?php global $l_crew; echo $l_crew?>" required>
								</div>
								<div class="col-md-6">
									<input type="number" placeholder="Player 2 Character ID" name="p2" value = "<?php global $pl2; echo $pl2?>" required>
								</div>
								<div class="col-md-6">
									<input type="number" placeholder="Player 3 Character ID" name="p3" value = "<?php global $pl3; echo $pl3?>" required>
								</div>
								<div class="col-md-6">
									<input type="number" placeholder="Player 4 Character ID" name="p4" value = "<?php global $pl4; echo $pl4?>" required>
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Payment" name="payment" value = "<?php global $payments; echo $payments?>" required>
								</div>
								<div class="col-lg-12">
									<button class="site-btn btn-sm">Validate</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by 
Haitomns Webpage
</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>