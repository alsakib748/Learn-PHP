<?php 

// class Example{
//     private $color;
//     function __construct($color){
//         $this->color = $color;
//     }

//     function setColor($color){
//         $this->color = $color;
//     }

//     function __toString(){
//         return "The color is {$this->color}.";
//     }
// }

// $e = new Example("Green");
// echo $e;

class Example{
    private $language;
    function __construct($language){
        $this->language = $language;
    }

    // function setLanguage($language){
    //     $this->language = $language;
    // }

    function __toString(){
        return "The Language is {$this->language}.";
    }
}

$e = new Example("php");
echo strtoupper($e);

?>