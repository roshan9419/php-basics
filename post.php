<!DOCTYPE html>
<html>
    <head>
        <title>PHP GET method </title>
    </head>

    <body>
        <?php
        if(isset($_POST["name"])){
            echo "<p>Hi, " .$_POST["name"] . "</p>";
        }
        ?>
        <!-- <form method="get" action = "<?php echo $_SERVER["PHP_SELF"];?>"> GET will show submission in url-->
        <!-- <POST will not show submission on url> -->
        <form method="post" action = "<?php echo $_SERVER["PHP_SELF"];?>">
            <label for = "inputName"> Name:</label>
            <input type="text" name="name" id="inputName">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>