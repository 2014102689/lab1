<?php 
    function validate($str){
        return ValidatePass($str) && empty($str) && textsize($str);
    }

    function empty($str){
        return trim(strlen($str) > 0);
    }

    function textsize($str){
        $min = 2;
        return strlen($str) >= $min && strlen($str) <= $max;
    }
    }
    
?>