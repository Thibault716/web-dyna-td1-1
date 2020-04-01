<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercice 5</title>
</head>
<form method="GET">
    <label for="contenue">Lignes : </label>
    <input type="text" value="" name="message" id="message">
    <label for="contenue">Colonnes : </label>
    <input type="text" value="" name="message" id="message">
    <input type="submit" value="Valider">
</form>
<body>
<?php
include("function.php");
createHtmlTable($_GET["ligne"],$_GET["colonne"]);
?>
</body>
</html>