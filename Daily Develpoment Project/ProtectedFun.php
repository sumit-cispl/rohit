<?php

class protectedFun
{
    protected $length;
    protected $width;
    protected $radius;
    // Constructor
    public function __construct($length, $width, $radius)
    {
        $this->length = $length;
        $this->width = $width;
        $this->radius = $radius;
    }

    // Override calculateArea method
    protected function calculateArea()
    {
        return $this->length * $this->width;
    }
}

// Subclass representing Circle
class Circle extends protectedFun
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

echo "Display Area of Rectangle: " . $circle->displayArea() . " square units <br>";
echo "Area of Circle: " . $circle->calculateCircleArea() . " square units";
// Fatal error: Uncaught Error: Call to protected method Area::calculateArea()
// echo "Area of Rectangle: " . $circle->calculateArea() . " square units <br>"; 
?>