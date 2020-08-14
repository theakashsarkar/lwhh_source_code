<?php
    function displayOption($options){
        foreach($options as $option){
            $selected = '';
            if(in_array($option,$optionValues)){
                $selected = "selected";
            }
            printf("<option value='%s' %s >%s</option>\n",strtolower($option),$selected,ucWords($option));
        }
    }

?>