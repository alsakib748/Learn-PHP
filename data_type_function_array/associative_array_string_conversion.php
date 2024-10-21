
<?php

    $indentity = [
        "fname" => "Al Sakib",
        "lname" => "Ayon",
        "id" => 22231203028,
        "semester" => "Fall(2022-2023)",
        "cgpa" => 3.61
    ];

    printf("%s %s",$indentity['fname'],$indentity['lname']);

    echo "<br/><br/>";

    $con = join(', ',$indentity);

    print_r($indentity);

    echo "<br/><br/>";

    echo $con;

    echo "<br/><br/>";
 
    $serialized = serialize($indentity);

    echo $serialized."<br/><br/>";
 
    $unserialized = unserialize($serialized);
    
    print_r($unserialized);

    echo "<br/><br/>";

    $jsonData = json_encode($indentity);

    print_r($jsonData);

    echo "<br/><br/>";

    $jsonDeData = json_decode($jsonData, true);

    print_r($jsonDeData);

?>