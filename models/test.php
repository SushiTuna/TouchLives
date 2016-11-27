<?php

include 'model.php';

$db = new database();

$db->connectDB("localhost", "root", "");

$data = 'program_name, program_type, slots, description, program_date, program_loc, program_duration';
$values = "'Give a Blood Donation', 'Health and Care', 100, 'Donation of blood', '2012/03/30', 'Metro Manila', 10";
$table = 'volunprograms';

echo $db->insertQuery($data, $values, $table);


?>