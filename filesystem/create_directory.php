<?php

// mkdir("test");
// mkdir("test/d1/d2/d3",0777,true);
//    mkdir("test",0777,true);
//    file_put_contents("test/f.txt","Sakib"); 
//    sleep(3);
//    unlink("test/f.txt"); 
//    rmdir("test");

/// If file is empty then delete otherwise keep it 

//    mkdir("test",0777,true);
//    file_put_contents("test/f.txt","A quick brown fox jumps over the lazy dog");
//    sleep(3);

    // $path = scandir(getcwd());

    //  echo getcwd();

      deleteDir(getcwd().DIRECTORY_SEPARATOR."filesystem/test");

      function deleteDir($path){
          $fileInpath = scandir($path);
          if(count($fileInpath) > 2){
            foreach($fileInpath as $file){
               if($file != '.' && $file != '..'){
                  $filepath = $path.DIRECTORY_SEPARATOR.$file;
                  unlink($filepath);  
               } 
            } 
          }
          rmdir($path);
      }  

?>