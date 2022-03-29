<html>
<pre>
<?php

// $value = 'car';
// $result = filter_var($value, FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE);
// echo $result;
$arr = array (
    "name" => "Michael",
    "age" => 120,
    "email" => "michael@gmail.com",
    "mobile" => 5555555559
);

$filters = array (
    "name" => FILTER_SANITIZE_STRING,
    "age" => array (
        "filter" => FILTER_VALIDATE_INT,
        "options" => array (
            "min_range" => 1,
            "max_range" => 120
        )
    ),
    "mobile" => array (
        "filter" => FILTER_VALIDATE_INT,
        "options" => array (
            "min_range" => 5555555555,
            "max_range" => 9999999999
        )
    ),
    "email" => FILTER_VALIDATE_EMAIL
);

print_r(filter_var_array($arr, $filters));

?>
</pre>
</html>