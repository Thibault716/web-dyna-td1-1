<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
<?php
include "header.php"
?>

<table border='1'>
    <tbody>
        <?php
        for($i=1; $i<$_GET["nbligne"]; $i++)
        {
            echo"<tr>";
                for ($j=1; $j<$_GET["nbcolonne"]; $j++)
                {
                    echo "<type>";
                    echo "$i-";
                    echo "$j";
                    echo "</td>";
                }
            echo "</tr>";
        }
        ?>
    </tbody>   
</table>
    
<?php
include "footer.php";
?>
</body>
</html>
