<?php 

    define("DB_HOST","localhost");
    define("DB_USER","sakib");
    define("DB_PWD","sakib1234");
    define("DB_NAME","test");

    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);

    $stmt = $mysqli->prepare("INSERT INTO newstudents(name,roll,sex,class,section) VALUES(?,?,?,?,?);");

    $name = '';
    $roll = '';
    $sex = '';
    $class = '';
    $section = '';

    $stmt->bind_param("sisis",$name,$roll,$sex,$class,$section);

    $csv_data = array_map('str_getcsv',file(__DIR__.'/babynames-clean.csv'));
    shuffle($csv_data);
    $sections = ['A','B','C','D','E'];
    $_students = [];
    for($i = 0;$i < 1000;$i++){
        $name = $csv_data[$i][0];
        $sex = $csv_data[$i][1]=="boy"?'M':'F';
        $class = rand(1,10);
        $section = $sections[array_rand($sections)];
        $_students["{$class}{$section}"][] = 1;
        $roll = count($_students["{$class}{$section}"]);
        printf("%s:%s:%s:%s:%s \n",$name,$sex,$class,$section,$roll);
        $stmt->execute();
    }

?>