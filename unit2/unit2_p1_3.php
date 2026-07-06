<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
    ?>
    <?php
        $laptop = array(
            array("lenovo","legion","80000"),
            array("hp","victus","100000"),
        );
        for($row=0;$row<2;$row++){
            for($column=0;$column<3;$column++){
                echo $laptop[$row][$column]." ";
            }
            echo "<br/>";
            
        }

      ?>
</body>
</html>