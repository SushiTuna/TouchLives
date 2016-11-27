<html>

<?php 
	$title = "Home";
	$boot = "bootstrap/css/bootstrap.min.css";
	$style = "bootstrap/css/styles.css";
	$home = "#";
	$objectives = "objectives.php";
	$programs = "programs.php";	
	include 'head.php'; 
?>
	<body class="container-fluid">
		<div class="row">
			<div class="col-md-12"><?php include 'nav.php'; ?></div>
		</div>
		<div class="row">
			<div class="col-md-12 header-picture">
				<h3>Live to touch lives<br>Live to be a volunteer</h3>
			</div>
		</div>
		<div class="row volunteer-row">
			<div class="volunteer-form">
				<form action="views/register-view.php" method="post">
					<div class="row">
						<div class="col-md-4">
							<div class="inline-item">
								<h3>Specialization</h3>
								<select class="form-control" name="specialty">
									<option>Environment & Animals</option>
									<option>Health Care</option>
									<option>Disaster Relief</option>
									<option>Community Development</option>
									<option>Youth Development & Education</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="inline-item">
								<h3>Location</h3>
								<select class="form-control" name="location">
									<option>Luzon</option>
									<option>Visayas</option>
									<option>Mindanao</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="inline-item">
								<h3>Duration</h3>
								<select class="form-control" name="duration">
									<option>2 Weeks or Less</option>
									<option>2 - 4 Weeks</option>
									<option>4 - 12 Weeks</option>
									<option>12 - 24 Weeks</option>
									<option>24 Weeks or More</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<br><br>
							<button type="submit" class="volunteer-btn">Volunteer Now!</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row recent-section">
			<div class="container-fluid">
				<div class="col-md-4">
					<a href="#"><img src="assets/pictures/circle1.png"></a>
				</div>
				<div class="col-md-4">
					<a href="#"><img src="assets/pictures/circle2.png"></a>
				</div>
				<div class="col-md-4">
					<a href="#"><img src="assets/pictures/circle3.png"></a>
				</div>
			</div>		
		</div>
	</body>
<?php include 'scripts.php'; ?>
</html>