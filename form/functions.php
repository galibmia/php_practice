<?php

function addOptions($options, $sFruits)
{
    foreach ($options as $option) {
        $selected = (isset($sFruits) && in_array(strtolower($option), $sFruits)) ? 'selected' : '';
        printf("<option value='%s' %s >%s</option>\n", strtolower($option),$selected, ucwords($option));
    }
}


function isChecked($inputName, $value){
    if(isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value, $_REQUEST[$inputName])){
       echo " checked "; 
    }
    
}



?>
