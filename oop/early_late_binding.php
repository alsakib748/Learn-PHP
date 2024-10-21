<?php 
class Planet{

    static function echoName(){
        echo static::echoPlanet(); 
    } 

    static function echoPlanet(){
        return "Planet";
    }
}

class Earth extends Planet{
    // static function echoName(){
    //     echo "Earth";
    // }
    static function echoPlanet(){
        return "Earth";
    }
}

// Planet::echoName();
Earth::echoName();

?>