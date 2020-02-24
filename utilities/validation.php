<?php 
    function validate($str){
        return isEmpty($str) && checkSize($str);
    }

    function isEmpty($str){
        return trim(strlen($str) > 0);
    }

    function checkSize($str){
        $min = 6;
        $max = 12;
        return strlen($str) >= $min && strlen($str) <= $max;
    }

?>