<?php

interface FiguraGeometrica {
    public function area();
}

abstract class Model {
    private $id;

    abstract public function get($nameProperty);
    abstract public function set($nameProperty, $value);

    public function getID($id){
        $this->id = $id;
    }
    public function setID($id){
        $this->id = $id;
    }
}

class Cuadrado implements FiguraGeometrica{
    public $arista = null;

    public function area(){
        return $this->arista* $this->arista;
    }
}
class Triangulo implements FiguraGeometrica{
    private $base = null;
    private $altura = null;
    public function setBase($value){
        $this->base = $value;
    }
    public function setAltura($value){
        $this->altura = $value;
    }

    public function area(){
        return ($this->base * $this->altura)/2;
    }
}

class Rectangulo extends Model implements FiguraGeometrica{
    private $base = null;
    private $altura = null;
    public function __construct($id){
        parent::setId($id);
    }
    public function area(){
        return ($this->base * $this->altura);
    }
    public function set($nameProperty, $value){
        $this -> {$nameProperty} = $value;
    }
    public function get ($nameProperty){
        return $this->{$nameProperty};
    }
}

$cuadrado = new Cuadrado();
$cuadrado->arista = 5;
echo "Area del cuadrado: ", $cuadrado-> area();

$triangulo = new Triangulo();
$triangulo->setBase(5);
$triangulo->setBase(5);
echo "area del triangulo: ". $triangulo->area() . "<br>";

$rectangulo = new Rectangulo('preba1');
$rectangulo->set("base", 10);
$rectangulo->set("altura", 5);
echo '<br>' . $rectangulo->area() . '<br>'
?>