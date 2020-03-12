<?php

    function generateRandomTable(){
        echo "<table border=1>";
            for($ch=1;$ch<=10; $ch++){
                echo "<tr>";
                for($hil=1; $hil<=10; $hil++){
                    echo "<td>";
                        echo rand(10,99);
                    echo "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";

    }

?>

