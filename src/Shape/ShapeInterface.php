<?php
namespace App\Shape;

interface ShapeInterface
{
    public function draw();
    public function color();
}
interface FilterInterface{
    public function overlay();
}

class Circle implements ShapeInterface
{
    public function color()
    {
        // TODO: Implement color() method.

    }
    public function draw()
    {
        // TODO: Implement draw() method.
        return "Circle";
    }
}
class Square implements ShapeInterface, FilterInterface {
    public function color()
    {
        // TODO: Implement color() method.
    }
    public function draw()
    {
        // TODO: Implement draw() method.
        return "Square";
    }
    public function overlay()
    {
        // TODO: Implement overlay() method.
    }
}
class Painter
{
    public function addShape(ShapeInterface $shape){
        return $shape->draw();
    }
}
$drawing = new Square();
$painting = new Painter();

var_dump($painting->addShape($drawing));
