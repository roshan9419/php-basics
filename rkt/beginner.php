<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Beginner Fundamentals</title>
</head>
<body>
    <div class="container">
        <h1>Learning PHP Fundamentals</h1><hr>
        <?php
            // this is comment
            echo "Php print statement using echo command";
            echo "<br>";

            ECHO "<h2>Variables</h2>";

            $variable1 = 20;
            $variable2 = 10;
            
            eCHo "variable1 = ";
            echo $variable1;
            echo "<br>";
            eCHo "variable2 = ";
            echO $variable2;
            echo "<br>";

            echo "<h2>Operators</h2>";

            echo "The value of variable1 + variable2 is ";
            echo $variable1 + $variable2;
            echo "<br>";

            echo "The value of variable1 - variable2 is ";
            echo $variable1 - $variable2;
            echo "<br>";

            echo "The value of variable1 * variable2 is ";
            echo $variable1 * $variable2;
            echo "<br>";

            echo "The value of variable1 / variable2 is ";
            echo $variable1 / $variable2;
            echo "<br>";

            $variable3 = $variable1 * 2 + $variable2 * 2;
            echo "The assignment value of ++variable3 is ";
            echo ++$variable3;
            echo "<br>";

            echo "<h2>Comparison Operators</h2>";
            echo "The comparison value of 1 == 5 and 5 == 5 is ";
            echo var_dump(1 == 5);
            echo " and ";
            echo var_dump(5 == 5);
            echo "<br>";
        ?>

        <?php 
            echo "<h2>Logical Operators</h2>";

            $my_var = (true and true);
            echo "(true and true) => ";
            echo var_dump($my_var);

            $my_var = (true or false);
            echo "<br>(true or false) => ";
            echo var_dump($my_var);

            $my_var = (true xor true);
            echo "<br>(true xor true) => ";
            echo var_dump($my_var);
        ?>

        <?php
            define('PI', 3.14);
            define('E', 2.41828);
            echo "<h2>Data Types</h2>";
            /*
                String
                Integer
                Float
                Boolean
                Array
                Object
            */

            $my_var = "This is a string";
            echo var_dump($my_var);
            echo "<br>";

            $my_var = 123;
            echo var_dump($my_var);
            echo "<br>";

            $my_var = 134.26;
            echo var_dump($my_var);
            echo "<br>";

            $my_var = true;
            echo var_dump($my_var);
            echo "<br>";

            echo "<h2>Constants</h2>";
            echo "PI = ";
            echo PI;
            echo "<br>E = ";
            echo E;
        ?>
    </div>
</body>
</html>