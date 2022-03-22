<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $files = $_FILES['file'];
    $fileName = $files['uploaded-file'];
    // $fileSizse = $files
}
?>

<!-- Upload Form -->
<html>
<form action="fileupload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uploaded-file"><br><br>
    <input type="submit" value="Upload File">
</form>
</html>