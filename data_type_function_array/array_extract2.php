
<?php

    $language = array("html","css","bootstrap","javascript","sql","php");

    $otherLanguage = array("python","django");

    $newLanguage = array_splice($language,3, 2,$otherLanguage);


    print_r($newLanguage);

    print_r($language);