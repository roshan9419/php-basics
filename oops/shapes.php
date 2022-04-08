<?php

require "rectangle.php";

$obj1 = new Rectangle;
$obj2 = new Rectangle;

echo "<h2># Default values</h2>";
printData("Obj1 length", $obj1->length);
printData("Obj1 breadth", $obj1->breadth);
printData("Obj2 length", $obj2->length);
printData("Obj2 breadth", $obj2->breadth);

$obj1->length = 10;
$obj1->breadth = 20;
$obj2->length = 25;
$obj2->breadth = 98;

echo "<h2># After adding values</h2>";
printData("Obj1 length", $obj1->length);
printData("Obj1 breadth", $obj1->breadth);
printData("Obj2 length", $obj2->length);
printData("Obj2 breadth", $obj2->breadth);

echo "<h2># Area of Rectangles</h2>";
printData("Obj1 Area", $obj1->getArea());
printData("Obj2 Area", $obj2->getArea());

echo "<h2># Perimeter of Rectangles</h2>";
printData("Obj1 Area", $obj1->getPerimeter());
printData("Obj2 Area", $obj2->getPerimeter());

function printData($key, $value) {
    echo "<b>" . $key . ":</b> " . $value . "<br>";
}
