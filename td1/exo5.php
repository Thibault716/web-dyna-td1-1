<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<form method="GET">
    <label for="contenue">Lignes : </label>
    <input type="text" value="" name="message" id="message">
    <label for="contenue">Colonnes : </label>
    <input type="text" value="" name="message" id="message">
    <input type="submit" value="Valider">
    echo createHtmlTable;
</form>
<body>
    <?php
function createHtmlTable($ligne,$colonne){
    echo "<table border='1'>
    <tbody>";
    for($l=0;$l<=$ligne;$l++){

        if (($l % 2) == 0){
            $gras = "bold";
        }
        else{
            $gras = "normal";
        }
        echo "<tr>"; 
        for($c=0;$c<=$colonne;$c++){ 
            if (($c % 2) == 1){
                $color = "red";
            }
            else{
                $color = "black";
            }
            echo "<td align='center'><p style='font-weight: $gras; color: $color'>$l-$c</p></td>"; 
        } 
        echo "</tr>"; 
    } 
    echo "</tbody>
    </table>";
}
    ?>
</body>
</html>