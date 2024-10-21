<?php 

    $filename = "C:\\xampp\\htdocs\\php\\file\\text\\file_json_data.txt";

    $students = array(
        array(
            'fname' => 'Al',
            'lname' => 'Sakib',
            'age' => 22,
            'class' => 14,
            'roll' => 28
        ),
        array(
            'fname' => 'Nishan',
            'lname' => 'Ali',
            'age' => 22,
            'class' => 14,
            'roll' => 23
        ),
        array(
            'fname' => 'Sabbir',
            'lname' => 'bin zia',
            'age' => 22,
            'class' => 14,
            'roll' => 39
        )
     );

    //$json_data = json_encode($students);
   
    //file_put_contents($filename,$json_data);

    $file_data = file_get_contents($filename);
    // $json_data = json_decode($file_data);
    $json_data = json_decode($file_data,true); 
    print_r($json_data);

   for($i = 0;$i < 3;$i++){
      echo "First Name : ".$json_data[$i]['fname']."\nLast Name : ".$json_data[$i]['lname']."\nClass : ".$json_data[$i]['class']."\nAge : ".$json_data[$i]['age']."\nRoll : ".$json_data[$i]['roll'];
      echo PHP_EOL.PHP_EOL;
   }

?>