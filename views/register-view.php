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
			<h3 class="section-title">Choose from the following programs</h3>
			<div class="container-fluid">
				
<?php 
include '../models/model.php';

$db = new database();
$db->connectDB('localhost', 'root', '');
$loc = $_POST['location'];
$spec = $_POST['specialty'];
$res = $db->selectQuery('*', 'volunprograms', "program_loc = '$loc' AND program_type = '$spec'");

// present data
if($res) {
	while($row = $res->fetch_assoc()) {
		echo "<a class='program-cont' href='confirm-view.php?id=". $row['id'] ."'>";
		echo '<div>';
		echo "<h4>" . $row['program_name'] . "</h4>";
		echo "<div class='program-img'>";
		echo "<img src='../assets/pictures/" . $row['program_pic'] . "'>";
		echo "</div>";
		echo "<p class='program-text'>";
		echo $row['description'];
		echo "</p>";
		echo "</div>";
		echo "</a>";
	}
} else {
	echo "<h2>No programs available in that category yet.</h2>";
}

?>	
			</div>
		</div>
	</body>
<?php include '../scripts.php'; ?>
</html>