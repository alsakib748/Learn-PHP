<?php

    $filename = "C:\\xampp\\htdocs\\php\\file\\text\\f4.txt";

    file_put_contents($filename,"\nMars",FILE_APPEND | LOCK_EX);
    file_put_contents($filename,"\nJupiter",FILE_APPEND | LOCK_EX);   
    file_put_contents($filename,"\nMoon",FILE_APPEND | LOCK_EX);

?>