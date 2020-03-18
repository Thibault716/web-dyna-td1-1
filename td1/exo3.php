<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<form method="GET">
    <label for="color">Color : </label>
    <input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>
<body>
<a href="?Color=%23ff0000&size=15&message=salut">Message 1</a>
<a href="?Color=%23ff0000&size=15&message=ça">Message 2</a>
<a href="?Color=%231ae633&size=60&message=benji">Message 3</a>
    <?php
    echo "<div style='font-size: {$_POST["size"]}px; color: {$_POST["Color"]}'>{$_POST["message"]}</div>";
    ?>
</body>
</html>