<?php 

     $filename = "C:\\xampp\\htdocs\\php\\file\\text\\file_serialize_array.txt";

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

     $data = serialize($students);
     file_put_contents($filename,$data,LOCK_EX);
     
    $dataFromFile =  file_get_contents($filename);
 
    //echo $dataFromFile;

    $data = unserialize($dataFromFile);

    //print_r($data);

    /// Showing the serialize data 
    // foreach($data as $val){
    //     printf("Name : %s %s \n Age : %s\n Class : %s \n Roll : %s \n\n",$val['fname'],$val['lname'],$val['age'],$val['class'],$val['roll']);
    // }

   // print_r($data);
 
    unset($data[1]);

    $delData = serialize($data);

    file_put_contents($filename,$delData,LOCK_EX);

    $dltDataFromFile = file_get_contents($filename);
    $data = unserialize($dltDataFromFile);

    foreach($data as $val){
       printf("Name : %s %s \n Age : %s\n Class : %s \n Roll : %s \n\n",$val['fname'],$val['lname'],$val['age'],$val['class'],$val['roll']);
    }

    $student = array(
        'fname' => 'Ariyan',
        'lname' => 'Ayon',
        'age' => 22,
        'class' => 14,
        'roll' => 89
    );

    $file_data = file_get_contents($filename);
    $unserialize_data = unserialize($file_data);

    array_push($unserialize_data,$student);

    $new_data_serialize = serialize($unserialize_data);

    file_put_contents($filename,$new_data_serialize);

    $current_data = file_get_contents($filename);

    $new_data_unserialize = unserialize($current_data);     

    foreach($new_data_unserialize as $val){
        printf("Name : %s %s \n Age : %s\n Class : %s \n Roll : %s \n\n",$val['fname'],$val['lname'],$val['age'],$val['class'],$val['roll']);
     }
    
?>