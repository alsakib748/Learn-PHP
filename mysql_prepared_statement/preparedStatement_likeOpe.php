<?php 
define("DB_HOST","localhost");
define("DB_USER","sakib");
define("DB_PWD","sakib1234");
define("DB_NAME","test");

$sql = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);
$pre = $sql->prepare("SELECT name,roll FROM newstudents WHERE name LIKE ?");
$name = "%ey";
$pre->bind_param("s",$name);
$pre->execute();
// echo $pre->get_result()->num_rows;
// $getData = $pre->get_result();
// while($data = $getData->fetch_object()){
//     echo "Name : ".$data->name."\nRoll : ".$data->roll."\n\n";
// }
// while($data = $pre->get_result()->fetch_assoc()){
//     print_r($data);
// }
print_r($pre->get_result()->fetch_all(MYSQLI_ASSOC));    
$pre->close();

?>

