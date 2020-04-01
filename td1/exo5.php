<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercice 5</title>
</head>
<body>
<form method="POST">
    <label for="contenue">Lignes : </label>
    <input type="text" value="" name="message" id="message">
    <label for="contenue">Colonnes : </label>
    <input type="text" value="" name="message" id="message">
    <input type="submit" value="Valider">
</form>
<?php
include("function.php");
createHtmlTable($_POST["ligne"]+1,$_POST["colonne"]+1);
?>
</body>
</html>