<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tournament Hub</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.png" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />


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
				<font color="white"> Tournament</font>
				<font color="#ffb320">Hub </font>
			</a>
			<div class="user-panel">
				<a href="logout.php">Admin Login</a>
			</div>
		</div>

	</header>

	<!-- Header section end -->
	<section class="review-section review-dark spad set-bg" data-setbg="img/ad.png">
		<div class="container">
			<font color="white">
				<h5>
					<font color=white>Welcom Ajeet Gupta, Its your <u>CONTROL PANEL</u>.</font>
				</h5><br><br>
				<h6>
					<font color=white>Registerations of Players</font>
				</h6><br>
				<div style="overflow-x:auto;">
					<table cellpadding="3px" border="2px">
						<tr>
							<th>ID</th>
							<th>Crew</th>
							<th>Leader Nickname</th>
							<th>E-mail</th>
							<th>Phone</th>
							<th>Player 1</th>
							<th>Player 2</th>
							<th>Player 3</th>
							<th>Player 4</th>
							<th>Payment</th>
							<th>Actions</th>
						</tr>
						<tr>


							<?php
							include 'db.php';

							$sql = "SELECT * FROM register";

							$result = mysqli_query($conn, $sql);

							if ($result) {
								while ($row = mysqli_fetch_assoc($result)) {
									$id = $row['id'];
									$crew = $row['crew'];
									$l_nickname = $row['l_nickname'];
									$l_email = $row['l_email'];
									$l_phone = $row['l_phone'];
									$l_cid = $row['l_cid'];
									$p2 = $row['p2'];
									$p3 = $row['p3'];
									$p4 = $row['p4'];
									$payment = $row['Payment'];

							?>

									<td><?php echo $id ?></td>
									<td><?php echo $crew ?></td>
									<td><?php echo $l_nickname ?></td>
									<td><?php echo $l_email ?></td>
									<td><?php echo $l_phone ?></td>
									<td><?php echo $l_cid ?></td>
									<td><?php echo $p2 ?></td>
									<td><?php echo $p3 ?></td>
									<td><?php echo $p4 ?></td>
									<td><?php echo $payment ?></td>
									<td>
										<a href="update.php?id=<?php echo $id ?>">
											<button class="site-btn btn-sm">Update</button>
										</a><br><br>

										<a href="delete.php?id=<?php echo $id ?>">
											<button class="site-btn btn-sm
																	">Delete</button>
				</div>
				</td>
				</tr>

		<?php
								}
							}
		?>


		</table>
		</div><br><br><br>
		<h6>
			<font color=white>Contacters</font>
		</h6><br>
		<div style="overflow-x:auto;">
			<table cellpadding="3px" border="2px">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Subject</th>
					<th>Message</th>
				</tr>
				<tr>


					<?php
					include 'db.php';

					$sql = "SELECT * FROM contact";

					$result = mysqli_query($conn, $sql);

					if ($result) {
						while ($row = mysqli_fetch_assoc($result)) {

							$id = $row['id'];
							$name = $row['name'];
							$email = $row['email'];
							$subject = $row['subject'];
							$message = $row['message'];


					?>

							<td><?php echo $id ?></td>
							<td><?php echo $name ?></td>
							<td>
								<a herf="mailto:<?php echo $email ?>">
									<?php echo $email ?>
								</a>
							</td>
							<td><?php echo $subject ?></td>
							<td><?php echo $message ?></td>
				</tr>

		<?php
						}
					}
		?>


			</table>
		</div>
		</font>
		</div>
	</section>
	<!-- Review section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy; <script>
					document.write(new Date().getFullYear());
				</script> All rights reserved | This website is made by Haitomns Webpage
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