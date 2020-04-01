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