
<?php

   function isChecked($value,$inputValue){  /// $value = PHP , $inputValue = language
       if( isset($_REQUEST[$inputValue]) && is_array($_REQUEST[$inputValue]) && in_array($value,$_REQUEST[$inputValue])){
          echo "checked";
       }
   }

   function isLanChecked($value){
       if( isset($_REQUEST['language']) && is_array($_REQUEST['language']) && in_array($value,$_REQUEST['language'])){
          echo "checked";
       }
   }

?>