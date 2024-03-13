<?php

class PrivateFun
{
    private $length;
    private $width;
    protected $radius;
    // Constructor
    public function __construct($length, $width, $radius)
    {
        $this->length = $length;
        $this->width = $width;
        $this->radius = $radius;
    }

    // Override calculateArea method
    private function calculateArea()
    {
        return $this->length * $this->width;
    }
}

// Subclass representing Circle
class Circle extends PrivateFun
{
    // Override calculateArea method
    public function displayArea()
    {
        return $this->calculateArea();
    }
    public function calculateCircleArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Example usage
// $rectangle = new Rectangle(5, 10);
$circle = new Circle(5, 10, 7);

echo "Area of Circle: " . $circle->calculateCircleArea() . " square units";
// Fatal error: Uncaught Error: Call to private method PrivateFun::calculateArea() from scope Circle 
// echo "Display Area of Rectangle: " . $circle->displayArea() . " square units <br>";

// Call to private method PrivateFun::calculateArea() from global scope
// echo "Area of Rectangle: " . $circle->calculateArea() . " square units <br>";
?>