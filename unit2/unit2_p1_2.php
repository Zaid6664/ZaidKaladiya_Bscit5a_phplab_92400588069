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
        $months = array(
            "january" => 31,
            "february" => 28,
            "march" => 31,
            "april" => 30,
            "may" => 31,
            "june" => 30,
            "july" => 31,
            "august" => 31,
            "september" => 30,
            "october" => 31,
            "november" => 30,
            "december" => 31,
            
        );
        foreach ($months as $month => $days) {
    echo $month . " => " . $days . " days<br>" ;
}

    ?>
</body>
</html>