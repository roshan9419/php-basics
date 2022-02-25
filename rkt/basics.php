<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
</head>

<style>
    body {
        background: #05d1c033;
    }
</style>

<body>
    <div class="container">
        <h1>PHP Basics</h1><hr>
        <?php
            $age = 34;
            echo "age = ";
            echo $age;
            echo "<br>";
            if ($age > 18) {
                echo "You're adult and eligible";
            } else {
                echo "You're young and not eligible";
            }

            echo "<h2>Arrays</h2>";
            $skills = array("Flutter", "NodeJs", "Python", "Firebase", "GCP", "Kotlin");
            echo var_dump($skills);
            echo "<br>array[0] = ";
            echo $skills[0];
            echo "<br>count(array) = ";
            echo count($skills);
        ?>
        <?php
            echo "<h2>Loops</h2>";

            echo "<b>While</b><br>";
            $i = 1;
            while ($i <= 10) {
                echo "The value of i is: ";
                echo $i++;
                echo "<br>";
            }

            echo "<b>For</b><br>";
            $num = 2;
            for ($i = 1; $i <= 10; $i++) {
                echo $num;
                echo " x ";
                echo $i;
                echo " = ";
                echo $num * $i;
                echo "<br>";
            }

            echo "<b>For-each</b><br>";
            $skills = array("Flutter", "NodeJs", "Python", "Firebase", "GCP", "Kotlin");
            foreach ($skills as $skill) {
                echo "Skill is ";
                echo $skill;
                echo "<br>";
            }
        ?>

        <?php
            echo "<h2>Functions</h2>";
            function funA() {
                echo "This is funA()<br>";
            }
            function funB($param) {
                echo "This is funB(param) : ";
                echo $param;
            }
            funA();
            funB("Passing value in param");
        ?>
    </div>
</body>
</html>