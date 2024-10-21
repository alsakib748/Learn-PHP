<?php

    function displayOptions($options,$value){   /// $proLanguage/$options = ["c","C++","Php","pyThon","java","javascript"];
       foreach($options as $option){
           printf("<option value='%s'>%s</option>\n",strtolower($option),ucwords($option));
       }
    }
