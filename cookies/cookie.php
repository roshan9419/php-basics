<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = "Roshan";
    setcookie($cookie_name, $cookie_value, time() + 3600); //86400 = 1day
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Cookies</title>
</head>
<body>
    <?php
        if (isset($_COOKIE[$cookie_name])) {
            echo "Cookie <b>'" . $cookie_name . "'</b> has been set<br>";
            echo "Value is: <b>" . $_COOKIE[$cookie_name] . "</b>";
        } else {
            echo "Cookie <b>'" . $cookie_name . "'</b> is not set";
        }
    ?>
</body>
</html>