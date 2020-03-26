<!DOCTYPE html>
<html>
<head>
    <title>Exercice 4</title>
</head>
<body>
    <a href="?ligne=2&colonne=2">2x2</a>
    <a href="?ligne=5&colonne=5">5x5</a>
    <a href="?ligne=10&colonne=8">10x8</a>

    <?php
    echo "<table border='1'>
    <tbody>";
    for($l=0; $l<=$_GET["ligne"]; $l++){ 
        echo "<tr>"; 
        for($c=0; $c<=$_GET["colonne"]; $c++){ 
            echo "<td align='center'>$l-$c</td>"; 
        } 
        echo "</tr>"; 
    } 

    echo "</tbody>
    </table>";

    ?>

</body>
</html>