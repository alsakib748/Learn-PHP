<?php 

    $directory = scandir(getcwd());

    // print_r($directory);

    foreach($directory as $dir){
       if("." != $dir && ".." != $dir){
           if(is_dir($dir)){
               echo "[directory] {$dir}\n";   
           }else{
               echo "[file] {$dir}\n";
           } 
       }          
    }

    function countDir($dir){
       $count = 0;
       $entries = scandir($dir);
       foreach($entries as $entry){
         if("." != $entry && ".." != $entry){
           if(is_dir($entry)){
              $count++;
           }
         } 
       }
       return $count;   
    } 

    $totalEntry = countDir(getcwd());
    echo $totalEntry;


?>
