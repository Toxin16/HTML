<?php
class Fruit{
    private $_fruit_name;
    private $_color;
    private $_price;
    function __construct($name, $color, $price) {
        $this->_fruit_name = $name;
        $this->_color = $color;
        $this->_price = $price;
    }
    function setPrice($price){
        $this->_price = $price;
    }
    function print_fruit(){
        print "Fruit Name: " . $this->_fruit_name . "<br>";
        print "Fruit Color: " . $this->_color . "<br>";
        print "Fruit Price: " . $this->_price . "<br>";
    }
    function getPrice(){
        return $this->_price;
    }
}
$apple = new Fruit("사과","red",1000);
$banana = new Fruit ("바나나","yellow",700);
$cherry = new Fruit ("체리", "red",1500);
$apple->print_fruit();
$banana->print_fruit();
$cherry->print_fruit();
$cherry->setPrice(1200);
$cherry->print_fruit();
?>