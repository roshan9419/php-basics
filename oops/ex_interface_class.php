<?php

require 'interfaces/my_interface.php';

class MyClass implements MyInterface {

    public function __construct() {
        echo "<i>You have created MyClass object</i><br><br>";
    }

    public function __destruct() {
        echo "<br><br><i>You have completed the usage of MyClass object, so removing it from memory</i><br><br>";
    }

    public function getName() {
        echo "My name is Roshan Kumar!<br>";
    }
    public function getAge() {
        echo "My age is 20<br>";
    }
    public function getUser() {
        echo "<br><b>Here is my details:</b><br>";
        echo $this->getName();
        echo $this->getAge();
        echo "<a href='https://roshan9419.github.io/portfolio/'>Check my portfolio</a>";
    }
}

$obj = new MyClass;
$obj->getName();
$obj->getAge();
$obj->getUser();