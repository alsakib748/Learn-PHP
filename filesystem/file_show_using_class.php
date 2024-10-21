<?php
class Dir{
    private $directories = [];
    private $files = [];
    private $path;
    private $directoryObjects = [];
    function __construct($path){
        if(is_readable($path)){
           $this->path = $path;
           $entries = scandir($path);
            foreach($entries as $entry){
               if("." != $entry && ".." != $entry){
                   if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
                      array_push($this->directories,$entry); 
                   }
                   else{
                      array_push($this->files,$entry);
                   }
               }                
            }
        }  
    }

    function getDirectory($index){
       if(isset($this->directories[$index])){
         if(!isset($this->directoryObjects[$index])){
            echo "Creating New Object\n";
            $this->directoryObjects[$index] = new Dir($this->path.DIRECTORY_SEPARATOR.$this->directories[$index]);
            return $this->directoryObjects[$index];
         }else{
             echo "Creating Old Object\n";
         }
           return $this->directoryObjects[$index];
        //  else{
        //      $this->directoryObjects[$index] = new Dir($this->path.DIRECTORY_SEPARATOR.$this->directories[$index]);
        //      return $this->directoryObjects[$index];   
        //  }
        //    return new Dir($this->path.DIRECTORY_SEPARATOR.$this->directories[$index]);  
       }
       else{
          throw new Exception("directory doesn't exist");
       }
       return false;
    }

    function getDirectories(){
        // foreach($this->directories as $dir){
        //     echo "[dir]".$dir.PHP_EOL;
        // }
        return $this->directories;
    }
    function getFiles(){
        // foreach($this->files as $file){
        //     echo "[file]".$file.PHP_EOL;
        // }
        return $this->files;
    }
}
$obj = new Dir(getcwd());
print_r($obj->getDirectories());
print_r($obj->getFiles());

$oop = $obj->getDirectory(10);

print_r($oop->getDirectories());

// $oop->showDirectory();

// $foundation = $oop->getDirectory(1);
// print_r($foundation->showFile());


?>