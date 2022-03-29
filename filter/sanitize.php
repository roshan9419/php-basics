<?php
$str = "<h1>Hello <roshan>$ World!</h1>";
$newStr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newStr;
?>

<html>
    <h1>Hello, World!</h1>
</html>