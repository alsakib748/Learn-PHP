
<?php

    $language = preg_split("/(, |,)/","html, css, javascript, sql, php,laravel, python,django");  
    //$language = explode(", ","html, css, javascript, sql, php,laravel, python,django");

    print_r($language);

    echo "<br/>";

    var_dump($language);    

     echo "<br/>"; 

     var_dump(array_values($language));   

     echo "<br/>"; 

    $n = count($language);

    echo $n."<br/>";

    $language_string = join(", ",$language);

    echo $language_string."<br/>";

    echo "<br/><b style=color:green;>"; 

    var_dump($language_string);

    echo "</b><br/>";

    for($i=0;$i<$n;$i++){
       echo $language[$i].", ";
    }


?>