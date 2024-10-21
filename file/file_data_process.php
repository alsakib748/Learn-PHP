<?php 

    $filename = "C:\\xampp\\htdocs\\php\\file\\text\\file_data_process.txt";

    $students = array(
        array(
            'fname'=>'Al Sakib',
            'lname'=>'Ayon',
            'age'=>22,
            'class'=>14,
            'roll'=>28
        ),
        array(
            'fname'=>'H Rahman',
            'lname'=>'Jim',
            'age'=>25,
            'class'=>14,
            'roll'=>91
        ),
        array(
            'fname'=>'Sayed Najmul',
            'lname'=>'Hasan',
            'age'=>22,
            'class'=>14,
            'roll'=>95
        )
    );

//     $fp = fopen($filename,'w');
//     foreach($students as $student){
//         $data = sprintf("%s,%s,%s,%s,%s \n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
//         fwrite($fp, $data);
//     } 
//    fclose($fp);

    $fp = fopen($filename,'w');
    foreach($students as $student){
        // $data = sprintf("%s,%s,%s,%s,%s \n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
        // fwrite($fp, $data);
        fputcsv($fp,$student);
    } 
   fclose($fp);

    //   $fp = fopen($filename,'r');
    //   while($data = fgets($fp)){
    //      $student = explode(",",$data);
    //      printf(" Name = %s %s\n Age = %s \n Class = %s \n Roll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]); 
    //   }
    //   fclose($fp);

    //   $fp = fopen($filename,'r');
    //   while($student = fgetcsv($fp)){
    //      printf(" Name = %s %s\n Age = %s \n Class = %s \n Roll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]); 
    //   }
    //   fclose($fp);

/// Insert a new data into the file    
    // $student = array(
    //     'fname' => 'Kamal',
    //     'lname' => 'Ahmed',
    //     'age' => 13,
    //     'class' => 7,
    //     'roll' => 17
    // );
    // $fp = fopen($filename,'a');
    // fputcsv($fp,$student);
    // fclose($fp);
    
/// Delete a one person record from the file
     $data = file($filename);  
     print_r($data);  
     unset($data[1]);
     //file_put_contents();
     $fp = fopen($filename,'w');
     foreach($data as $line){
        $line = trim($line); 
        //if(trim($line) != '')
        //if(!empty($line))
           fwrite($fp, $line."\n");
     } 
     fclose($fp);

?>   