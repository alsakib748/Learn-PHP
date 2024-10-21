
<?php

    $name = 0;

    if(isset($name)){
        echo "It is set";
    }else{
        echo "Is is not set";
    }
            echo PHP_EOL;
    $data = '';

    if(empty($data)){
        echo "It is empty";
    }
    else{
        echo "It is not empty";
    }
             echo PHP_EOL;
    if(isset($data) && (is_numeric($data) || $data != '')){
        echo "It is set and not empty";
    }else{
        echo "It is neither not set or empty";
    }
