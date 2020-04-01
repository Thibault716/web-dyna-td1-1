function createHtmlTable($ligne,$colonne){
    echo "<table border='1'>";
    echo "<tbody>";
    for($i=0;$i<$_POST["ligne"];$i++){
    for ($i=0;$i<$ligne;$i++){
            echo"<tr>";
        
            for($j=0;$j<$_POST["colonne"];$j++){
            for ($j=0;$j<$colonne;$j++){
                    echo"<tr>";

        if (($i % 2) == 0){
            $gras = "bold";

            echo"</tr>";
	}
    echo"</tbody>";
    echo"</table>";
}