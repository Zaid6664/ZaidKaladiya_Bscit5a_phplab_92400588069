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
            Name :<input type = "text" name = "uname" ><br>
            Age :<input type = "number" name = "age"><br>
            Email :<input type = "email" name = "email"><br>
            Password :<input type = "password" name = "password"><br>
            Dob :<input type = "date" name = "dob "><br>
            <input type = "submit" name = "submit" value = "submit">
    </form>

    <?php
        $nm = $_GET['uname'];
        echo "Hello, ".$nm;

        $age = $_GET['age'];    
        echo "<br>Your age is: ".$age;

        $email = $_GET['email'];
        echo "<br>Your email is: ".$email;

        $password = $_GET['password'];
        echo "<br>Your password is: ".$password;

        $date = $_GET['date'];
        echo "<br>Your date of birth is: ".$date;

    ?>
    
</body>
</html>
