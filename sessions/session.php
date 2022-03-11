<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Hello, Session!</h1>
    <hr>

    <?php
       session_start();
       
       if (isset($_SESSION['counter'])) {
           $_SESSION['counter'] += 1;
       } else {
           $_SESSION['counter'] = 1;
       }

       echo $msg = "You have visited this page <b style='font-size: 24px'>". $_SESSION['counter'] . "</b> times";
    ?>

    <?php
        // if(isset($_POST["action"]) && $_POST["action"] == "destroy") {
        if(isset($_POST["destroy"])) {
            session_destroy();
            header("Refresh:0");
        }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>", method="POST">
        <input type="submit" name="destroy" value="Destroy Session">
    </form>

</body>
</html>