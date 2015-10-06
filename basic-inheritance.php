<?php
 /**
 * Basic class share
 */
 abstract class Share {

    protected $color;

    function __construct($color = null) {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function getArea();
 }

/**
* Class square
*/
class Square extends Share {

    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }

}

/**
* Class Triangle
*/
class Triangle extends Share {

    protected $base = 4;
    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height ; // .5 is 0.5
    }
}

/**
* Class Circle
*/
class Circle extends Share {

    protected $radius = 5;

    public function getArea()
    {
        return M_PI * pow($this->radius, 2);
    }

}

echo (new Circle)->getArea();
echo (new Triangle('red'))->getColor();