<?php 
// define("DB_HOST","localhost");
// define("DB_USER","sakib");
// define("DB_PWD","sakib1234");
// define("DB_NAME","test");
// $sql = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);
// $pre = $sql->prepare("SELECT * FROM newstudents WHERE class = ? AND section IN (?,?) ORDER BY roll");
// $class = 3;
// $section1 = 'C';
// $section2 = 'E';
// $pre->bind_param("iss",$class,$section1,$section2);
// $pre->execute();
// // echo $pre->get_result()->num_rows;
// // print_r($pre->get_result()->fetch_all());
// $getData = $pre->get_result();
// while($data = $getData->fetch_assoc()){
//     print_r($data);
// }

?>
<?php 
define("DB_HOST","localhost");
define("DB_USER","sakib");
define("DB_PWD","sakib1234");
define("DB_NAME","test");
$sql = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);
$pre = $sql->prepare("SELECT COUNT(*) as total FROM newstudents WHERE class = ? AND section = ?");
$class = 9;
$section = 'C';
$pre->bind_param("is",$class,$section);
$pre->execute();

$data = $pre->get_result()->fetch_assoc();

echo $data['total'];


?>