<!DOCTYPE html>
<html>
<head>
    <title>Exercice 4</title>
</head>
<body>
    <a href="?nblignes=2&nbColonnes=2">2x2</a>
    <a href="?nblignes=5&nbColonnes=5">5x5</a>
    <a href="?nblignes=10&nbColonnes=8">10x8</a>

    <?php
    echo "<table border='1'>
    <tbody>";
    for($l=0; $l<=$_GET["nblignes"]; $l++){ 
        echo "<tr>"; 
        for($c=0; $c<=$_GET["nbColonnes"]; $c++){ 
            echo "<td align='center'>$l-$c</td>"; 
        } 
        echo "</tr>"; 
    } 

    echo "</tbody>
    </table>";

    ?>

</body>
</html>