<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="davaleba2.php" method="post">
        Input Number of Rows<input type="number" name="nor">
        <br>
        Input Number of Columns<input type="number" name="noc">
        <br>
        Input Number of Columns<input type="number" name="minn">
        <br>
        Input Number of Columns<input type="number" name="maxn">
        <br>
        <input type="submit" name="sub" value="Submit This Info">

    </form>
    <?php
        echo "<table border=1>";
            for($row=1; $row <= $_POST["nor"]; $row++){
                echo "<tr>";
                for($col=0; $col <= $_POST["noc"]; $col++){
                    echo "<td>";
                        echo rand($_POST["minn"],$_POST["maxn"]);
                    echo "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    
    ?>
    
</body>
</html>