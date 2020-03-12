<?php
    function doit(){
        $string = ($_POST["firstn"]);
        echo count(str_split($string));
    
    }
?>