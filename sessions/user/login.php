<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php session_start(); ?>
</head>
<body>
    <?php 
        $msg = '';
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username == 'roshank9419' || $password == 123456) {
                $_SESSION['username'] = $username;
                $msg = "You're logged in | Go to <a href='profile.php'>Profile</a>";
            } else {
                $msg = "Invalid username/password";
            }
        }
    ?>

    <h1>Login</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username"> <br><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"> <br><br>

        <input type="submit" value="Login" name="login">

        <br>
        <?php echo $msg;?>
    </form>


</body>
</html>