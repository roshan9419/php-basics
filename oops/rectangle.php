<?php 
class Rectangle {
    
    public $length = 0;
    public $breadth = 0;
    
    // returns the area of rectangle
    public function getArea() {
        return $this->length * $this->breadth;
    }

    // returns the perimeter of rectangle
    public function getPerimeter() {
        return 2 * ($this->length + $this->breadth);
    }
}
?>