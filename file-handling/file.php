<html>
<?php

$path = "G:/RESUME/New folder/ResumeMar22.pdf";
$fsize = filesize($path);

echo basename($path) . "<br>";
echo filesize($path) . " Bytes<br>";

if ($fsize >= 1000) {
    echo "File size limit exceeded";
} else {
    echo "File size is under limit";
}

echo "<br><a href='". $path ."' target='_blank'>View File</a>"
?>

</html>