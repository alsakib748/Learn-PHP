
<?php 

    echo "<br/><br/>";

    $students = array(
        "name" => "Al Sakib Ayon",
        "id" => 22231203028,
        "semester" => "Fall-2022-2023",
        "intake" => "43(DH)",
        "cgpa" => 3.61
    );

    foreach($students as $key=>$val){
        echo $key." = ".$val."<br/>"; 
    }

    echo "<br/>"; 
    var_dump($students);
    
    echo "<br/><br/>";

    echo $students['name']."<br/>";
    echo $students['id']."<br/>";
    echo $students['semester']."<br/>";
    echo $students['intake']."<br/>";
    echo $students['cgpa']."<br/>";
 
    echo "<br/><br/>--------------------------Another Array Example-----------------------------<br/><br/>";

    $keys = array_keys($students);
    print_r($keys);

    echo "<br/><br/>";

    print_r(array_keys($students));

    echo "<br/><br/>";

    $vals = array_values($students);
    print_r($vals);

    echo "<br/><br/>";

    print_r(array_values($students));

    echo "<br/><br/>";

    $employee = [
        "name" => "Al Sakib Ayon",
        "id" => "0000246976",
        "designation" => "Full Stack Web Developer",
        "salary" => 50000,
        "language" => "html, css, javascript, php"
    ];

    $keys = array_keys($employee);
    $values = array_values($employee);
  
    echo "<br/><br/>";
    echo $keys[0];echo "<br/><br/>";

    var_dump(array_keys($employee));
    echo "<br/><br/>";
    var_dump(array_values($employee));

    echo "<br/><br/>";
    $n = count($keys);

    for($i=0;$i<$n;$i++){
        $value = $values[$i];
        echo $value."<br/>";
    }
    echo "<br/><br/>";

    $employee["salary"] .= ", 100000";

    foreach($employee as $key=>$val){
        echo $key." = ".$val."<br/>"; 
    }

     

?>
