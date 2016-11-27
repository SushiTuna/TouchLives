<html>

<?php 
	$title = "Home";
	$boot = "bootstrap/css/bootstrap.min.css";
	$style = "bootstrap/css/styles.css";
	$home = "index.php";
	$objectives = "#";
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
		<div class="row objective-cont">
			<p style="font-size: 30px;padding: 30px;margin: 40px 40px;">
				The objects of the Centre are to promote any charitable purpose for the benefit of the community by associating together volunteers and organisations in a common effort to advance education, enhance the environment, protect health, relieve poverty, sickness and distress.
			</p>
		</div>
	</body>
<?php include 'scripts.php'; ?>
</html>