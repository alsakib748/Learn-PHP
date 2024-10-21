<?php 
define("DB_HOST","localhost");
define("DB_USER","sakib");
define("DB_PWD","sakib1234");
define("DB_NAME","test");

$mysql = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);

$stmt = $mysql->prepare("SELECT * FROM newstudents WHERE class=? AND section=? ORDER BY roll");

$class = 1;
$section = 'A';

$stmt->bind_param("is",$class,$section);

$stmt->execute();

echo $stmt->get_result()->num_rows."\n";

$class = 3;
$section = 'C';

$stmt->execute();
echo $stmt->get_result()->num_rows."\n";

$class = 9;
$section = 'D';

$stmt->execute();
echo $stmt->get_result()->num_rows."\n";

$stmt->close();

?>