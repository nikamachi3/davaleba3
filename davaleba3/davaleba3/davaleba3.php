<?php
    include "meoregverdi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
    sheiyvanet paroli <input type="text" name="pass">
    <input type="submit" name="sub">
    </form>

    <?php
    $x = rand(10000,99999);
    echo $x;
        if(isset($_POST["sub"])){
            onclicka($x);
        }
    ?>

    

    
</body>
</html>