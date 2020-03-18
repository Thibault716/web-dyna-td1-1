<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
    <div style="font-size: <?php echo $size; ?>px;">Message de taille <?php echo $size; ?>px en rouge</div>
    <div style="font-size: 20px;color:#FF0000">Message de taille 10px en rouge</div>
<?php
echo "<div style='font-size: {$size}px;'>Message de taille {$size}px en rouge</div>";
?>
<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>
</body>
</html>