<?php
    include "work1.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <input type="submit" name="klikunia" value="daachire rom amovides matrica da sheicvalos ricxvebi">
    </form>

    <?php
        if(isset($_POST["klikunia"])){
            generateRandomTable();
        }
        
    ?>

    
</body>
</html>