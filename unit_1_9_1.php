
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

     


<form method="get">
        <input type="text" name="uname1">
        <input type="text" name="uname2">
        <input type="text" name="uname3">
        <input type="text" name="uname4">
        <input type="text" name="uname5">
        <input type="Submit" name="Submit" value="Submit">
</form>
<br>
<?php
    
   
        $nm=$_GET['uname'];
        echo"<h3>Original Array:</h3>";
    foreach($nm as $val)
     {
        echo $val." <br>";
    
     }
         echo"<h3> Reversed Array:</h3>";
     $rev = array_reverse($nm);
     foreach($rev as $val)
     {
        echo $val."<br>";
     }
?>
</body>
</html>