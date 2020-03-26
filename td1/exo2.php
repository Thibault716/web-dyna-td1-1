<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<form method="GET">
    <label for="color">Couleur : </label>
    <input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
    <label for="size">Taille : </label>
    <input type="number" value="" name="size" id="size">
    <label for="contenue">A toi de jouer</label>
    <input type="text" value="" name="message" id="message">
    <input type="submit" value="Valider">
</form>
<body>
    <a href="?Color=%23ff0000&size=15&message=salut">Message 1</a>
    <a href="?Color=%230000FF&size=30&message=c'est">Message 2</a>
    <a href="?Color=%231ae633&size=50&message=l'exercice 2">Message 3</a><br>
    
    <?php
    if (empty($_GET)) {
        echo "Euh, je crois que tu as oublié de remplir :D";
    }
    if (empty($_GET["size"]) and $_GET["Color"]) {
        echo "<div style='font-size: 12px; color: black'>{$_GET["message"]}</div>";
    }
    else {
        echo "<div style='font-size: {$_GET["size"]}px; color: {$_GET["Color"]}'>{$_GET["message"]}</div>";
    }
    ?>
</body>
</html>