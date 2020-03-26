<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
<?php
// $i<= ... ---> Nb de ligne
// $j<= ... ---> Nb de colonne
echo "<table border='1'>
    <tbody>";
    for ($i=1; $i<=7; $i++) {
        echo '<tr>';
        for ($j=1; $j<=12; $j++) {
            echo '<td>';
            echo $affichage; // Afficher les lignes et colonnes
            echo '<td>';
    }
    echo "</tr>";
    $j=1;
}
echo '</table>';
?>
</body>
</html>
