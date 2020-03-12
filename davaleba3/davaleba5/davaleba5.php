<?php 
    include "meore.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="davaleba5.php" method="post">
        Input first number:<input type="number" name="firstn">
        <br>
        <input type="submit" name="subm">
    
    </form>
    <?php
        if(isset($_POST["subm"])){
            doit();
        }
    ?>
    
    
</body>
</html>