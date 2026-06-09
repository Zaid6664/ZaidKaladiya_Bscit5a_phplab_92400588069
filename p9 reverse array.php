<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = ["Apple", "Banana", "Cherry"];
    echo "Original Array:<br>";
    foreach ($fruits as $f) {
        echo $f . "<br>";
    }
    echo "<br>Reversed Array:<br>";
    $reversedFruits = array_reverse($fruits);
    foreach ($reversedFruits as $fruit) {
        echo $fruit . "<br>";
    }
    ?>
</body>
</html>