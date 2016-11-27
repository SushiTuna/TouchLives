<html>

<?php 
	$title = "Home";
	$boot = "bootstrap/css/bootstrap.min.css";
	$style = "bootstrap/css/styles.css";
	$home = "index.php";
	$objectives = "objective.php";
	$programs = "#";	
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
		<div class="programs-img"><br><br>
			<img src="assets/programs/community-development.jpg">
			<img src="assets/programs/donations.jpg">
			<img src="assets/programs/education.jpg">
			<img src="assets/programs/health-care.jpg">
			<img src="assets/programs/environment.jpg">
			<img src="assets/programs/livelihood.jpg">
		</div>
	</body>
<?php include 'scripts.php'; ?>
</html>