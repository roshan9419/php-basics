<?php 

$path = "sample.txt";
$file = fopen($path, "r");

while (!feof($file)) {
    $line = fgets($file);
    echo $line . "<br>";
}

?>