<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercice 1</title>
</head>
<body>
    <a href="?message=Coucou">Afficher Hello</a>
    <a href="?message=Salut">Afficher Hello</a>
    <a href="?message=Bonjour">Afficher Hello</a>
<?php
echo("Hello world !");
echo "Vous etes sur la page n° ".$_GET["message"];
?>
</body>
</html>