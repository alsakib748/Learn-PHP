<?php 

    function displayOptions($options,$selectValue){
        foreach($options as $option){
            $option = strtolower($option);
            $selected = NULL;
            if( $selectValue != NULL && in_array($option,$selectValue)){
                $selected = "selected";
            }
            printf("<option value='%s' %s> %s </option>",$option,$selected,ucwords($option));
        }
    } 

?>