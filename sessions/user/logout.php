<?php
    session_start();
    unset($_SESSION['username']);
    // session_unset('username');
    echo "You're successfully Logged Out! ";
    echo "<a href='login.php'>Login</a>";
?>