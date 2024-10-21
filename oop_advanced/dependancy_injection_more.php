<?php 
interface BaseStorage{
     function setFileName($n);
     function writeData($data);
     //function appendData($data);
     function setMode($mode);
}
class Storage implements BaseStorage{
    private $fn;
    private $mode;
    function __construct($fn, $mode=null){
        $this->setFileName($fn); 
        $this->mode = $mode;
    }
    function setFileName($fn){
        $this->fn = $fn;
    } 
    function writeData($data){
        file_put_contents($this->fn,$data, $this->mode);
    }
    function setMode($mode){
        $this->mode = $mode;
    }
    // function appendData($data){
    //     file_put_contents($this->fn,$data, FILE_APPEND);
    // }
}
// class StorageManager{
//     function saveData($filename, $data){
//         $st = new Storage($filename);
//         $st->writeData($data);
//     }
// }

class StorageManager{
    function saveData(BaseStorage $storage, $data){
        // $st = new Storage($filename);
        $storage->writeData($data);
        // $storage->setMode(FILE_APPEND);
        // $st->writeData($data);
    }
}

$filename = new Storage("C:\\xampp\\htdocs\\web\\oop_advanced\\tmp\\abcd.txt",FILE_APPEND);
// $filename->setMode(FILE_APPEND);

$sm = new StorageManager();
$sm->saveData($filename," | Transformer The Last Knight");

?>