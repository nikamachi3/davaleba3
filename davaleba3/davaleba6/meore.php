<?php
    function doit(){
        $a=array(1,2);
        $random=array_rand($a,1);
        if ($random == 1){
            echo $_POST["firstn"] + $_POST["secondn"];
        }

        else{
            echo $_POST["firstn"] - $_POST["secondn"];
        }
    
    }
?>