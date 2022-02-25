<?php
    echo "<h1>Strings</h1><hr>";

    $str = "This is str";
    echo $str;
    echo "<br>";

    $str_len = strlen($str);
    echo "The length of this string is: ".$str_len." done with concatentation<br>";
    echo "Word Count is: ".str_word_count($str)."<br>";
    echo "Reverse String is: ".strrev($str)."<br>";
    echo "Index of (is) in str: ".strpos($str, "is")."<br>";

?>