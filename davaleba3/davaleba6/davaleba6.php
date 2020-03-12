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
    <form action="davaleba4.php" method="post">
        M:<input type="number" name="M">
        <br>
        N:<input type="number" name="N">
        <br>
        a:<input type="number" name="a">
        <br>
        b:<input type="number" name="b">
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