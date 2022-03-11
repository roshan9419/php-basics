<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <?php session_start(); ?>
</head>
<body>
    <?php 
        if(isset($_SESSION["username"])) {
            echo "<h1>Hello, ". $_SESSION["username"] ." !</h1><br>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "You're not logged in <a href='login.php'>Login</a>";
        }
    ?>
</body>
</html>