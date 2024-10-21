<?php
// define("DB_HOST","localhost");
// define("DB_USER","sakib");
// define("DB_PWD","sakib1234");
// define("DB_NAME","test");
// $mysql = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);
// $stmt = $mysql->prepare("SELECT * FROM newstudents WHERE class = ? AND section = ? ORDER BY roll");
// $class = 4;
// $section = 'D';
// $stmt->bind_param("is",$class,$section);
// $stmt->execute();
// // echo $stmt->get_result()->num_rows;
// $allData = $stmt->get_result();
// // while($data = $allData->fetch_assoc()){
// //     print_r($data);
// // }
// // $data = $allData->fetch_all(MYSQLI_ASSOC);
// // $data = $allData->fetch_all();
// // $data = $allData->fetch_all(MYSQLI_BOTH);
// // print_r($data);

// while($data = $allData->fetch_object()){
//     print_r($data);
// }
?>
<?php

define("DB_HOST", "localhost");
define("DB_USER", "sakib");
define("DB_PWD", "sakib1234");
define("DB_NAME", "test");
$mysql = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);
$stmt = $mysql->prepare("SELECT * FROM newstudents WHERE class=? AND section=? ORDER BY roll");
$class = 9;
$section = 'A';
$stmt->bind_param("is",$class,$section);
$stmt->execute();
// echo $stmt->get_result()->num_rows;
$getData = $stmt->get_result();
// while($data = $getData->fetch_assoc()){
//     print_r($data);
// }
// $index = 1;
// while($data = $getData->fetch_assoc()){
//     // print_r($data);
//     // echo "Name : ".$data.name;
//     // echo "Name : ".$data->name."\nRoll : ".$data->roll."\nSection : ".$data->section."\n\n";
//     echo "Index : ".$index++."\nName : ".$data['name']."\nRoll : ".$data['roll']."\nSection : ".$data['section']."\n\n";
// }

$data = $getData->fetch_all(MYSQLI_BOTH);

print_r($data);

?>