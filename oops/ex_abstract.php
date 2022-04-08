<?php

abstract class Base {
    abstract function printData();
    public function getData() {
        echo "This is abstract method getData()";
    }
}

class Child extends Base {
    public function printData() {
        echo "This is printData() method of child class";
    }
}

$obj = new Child;
echo "<b>Base Method:</b> ";
$obj->getData();
echo "<br><b>Child Method:</b> ";
$obj->printData();

?>