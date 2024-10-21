<?php

      mkdir("test/d1/d2/d3",0777,true);
      file_put_contents("test/f.txt","hello");
      file_put_contents("test/d1/f.txt","hello");
      file_put_contents("test/d1/d2/f.txt","hello");
      file_put_contents("test/d1/d2/d3/f.txt","hello");

      sleep(10);

      deleteDir(getcwd().DIRECTORY_SEPARATOR."filesystem/test");

      function deleteDir($path){
         if(!is_readable($path)){
             return;   
         }
          $fileInpath = scandir($path);
          if(count($fileInpath) > 2){
            foreach($fileInpath as $file){
               if($file != '.' && $file != '..'){
                  $filepath = $path.DIRECTORY_SEPARATOR.$file;
                  if(is_dir($filepath)){
                     deleteDir($filepath); 
                  }else{
                     unlink($filepath);
                  }
               } 
            } 
          }
          rmdir($path);
      }  

?>