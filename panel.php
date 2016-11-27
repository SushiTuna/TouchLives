<html>

<?php 
	$title = "Panel";
	$boot = "bootstrap/css/bootstrap.min.css";
	$style = "bootstrap/css/styles.css";
	$home = "index.php";
	$objectives = "#";
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
		<div class="panel-cont">
			<form class="form-panel" action="controllers/panel-controller.php" method="post" enctype="multipart/form-data"><br><br>
				<div class="form-group">
					<label>Program Name</label>
					<input class="form-control" type="text" name="program-name">
				</div>
				<div class="form-group">
					<label>Program Type</label>
					<select class="form-control" name="program-type">
						<option>Environment & Animals</option>
						<option>Health Care</option>
						<option>Disaster Relief</option>
						<option>Community Development</option>
						<option>Youth Development & Education</option>
					</select>
				</div>
				<div class="form-group">
					<label>Slots</label>
					<input class="form-control" type="text" name="program-slot">
				</div>
				<div class="form-group">
					<label>Description</label>
					<input class="form-control" type="text" name="program-desc">
				</div>
				<div class="form-group">
					<label>Program Date</label>
					<input class="form-control" type="text" name="program-date">
				</div>
				<div class="form-group">
					<label>Program Location</label>
					<select class="form-control" name="program-loc">
						<option>Luzon</option>
						<option>Visayas</option>
						<option>Mindanao</option>
					</select>
				</div>
				<div class="form-group">
					<label>Duration</label>
					<input class="form-control" type="text" name="program-duration">
				</div>
				<div class="form-group">
					<label>File input</label>
    				<input type="file" class="form-control-file" name="fileUpload" id="fileUpload" aria-describedby="fileHelp">
				</div>
				<button type="submit" class="volunteer-btn">Create Program</button>
			</form>
		</div>
	</body>
	<?php include 'scripts.php'; ?>
</html>