<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<form method="POST">
    <label for="color">Couleur : </label>
    <input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
    <label for="size">Taille : </label>
    <input type="number" value="" name="size" id="size">
    <label for="contenue">A toi de jouer</label>
    <testarea type="text" value="" name="message" id="message">
    <input type="submit" value="Valider">
</form>
<body>
    <a href="?Color=%23ff0000&size=15&message=salut">Message 1</a>
    <a href="?Color=%230000FF&size=30&message=c'est">Message 2</a>
    <a href="?Color=%231ae633&size=50&message=l'exercice 2">Message 3</a><br>
    
    <?php
    if (empty($_POST)) {
        echo "Euh, je crois que tu as oublié de remplir :D";
    }
    if (empty($_POST["size"]) and $_POST["color"]) {
        echo "<div style='font-size: 12px; color: black'>{$_POST["message"]}</div>";
    }
    else {
        echo "<div style='font-size: {$_POST["size"]}px; color: {$_POST["color"]}'>{$_POST["message"]}</div>";
    }
    ?>
</body>
</html>