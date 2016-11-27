<html>
<?php
$title = "Register";
$boot = "../bootstrap/css/bootstrap.min.css";
$style = "../bootstrap/css/styles.css"; 
$home = "../index.php";
$objectives = "#";
$programs = "#";
include '../head.php';
?>
	<body class="container-fluid">
		<div class="row">
			<div class="col-md-12"><?php include '../nav.php'; ?></div>
		</div>
		<div class="row">
			<div class="col-md-12 header-picture">
				<h3>Live to touch lives<br>Live to be a volunteer</h3>
			</div>
		</div>
		<div class="row register-section">
			<h3 class="section-title">Confirm your identity</h3>
			<div class="container-fluid">
					<div class="identity-cont">
						<form action="../controllers/register-controller.php" method="post">
							<img class="mail-icon" src="../assets/pictures/mail.png">&nbsp;
							<p class="identity-label">Email</p>
							<input class="form-control" type="text" name="client-email" id="client-email"><br><br>
							<input name="program-id" value="<?php echo $_GET['id'] ?>" hidden> 
							<button type="submit" class="volunteer-btn">Submit</button>
						</form>
					</div>
			</div>
		</div>
	</body>
<?php include '../scripts.php'; ?>
</html>