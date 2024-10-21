<?php 

function isChecked($data, $value)
{
    if(isset($_REQUEST[$data]) && is_array($_REQUEST[$data]) && in_array($value,$_REQUEST[$data]))
    {
        echo " checked ";
    }
}

?>
