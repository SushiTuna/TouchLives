<?php

include '../models/model.php';

$target_dir = "../assets/pictures";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$filename = $_FILES["fileUpload"]["name"];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;

	
		        $tmp_name = $_FILES["fileUpload"]["tmp_name"];
		        // basename() may prevent filesystem traversal attacks;
		        // further validation/sanitation of the filename may be appropriate
		        $name = basename($_FILES["fileUpload"]["name"]);
		        move_uploaded_file($tmp_name, "$target_dir/$filename");
		
		
    } else {
        $uploadOk = 0;
    }


$db = new database();
$db->connectDB("localhost", "root", "");

$table = "volunprograms";
$data = 'program_name, program_type, slots, description, program_date, program_loc, program_duration, program_pic';
$values = sprintf("'%s', '%s', %s, '%s', %s, '%s', %s, '%s'",
	$_POST['program-name'], $_POST['program-type'], $_POST['program-slot'], $_POST['program-desc'],
	$_POST['program-date'], $_POST['program-loc'], $_POST['program-duration'], $filename);

$db->insertQuery($data, $values, $table);
header('Location: ../panel.php');
?>