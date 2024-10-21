
<?php

    $language = array("html","css","bootstrap","javascript","sql","php");

    $extract = array_slice($language,2, -1,true);

    print_r($extract);

    print_r($language);

    echo PHP_EOL;

    $name = array(
        "a" => "Sakib",
        "b" => "Ayon",
        "c" => "Rakib",
        "d" => "Shakil",
        "e" => "Foysal",
        '12' => 78,
        "f" => "Shabbir"
    );

    $upName = array_slice($name,3,null,true);

    print_r($upName);