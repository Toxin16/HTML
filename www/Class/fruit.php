<?php
class Fruit {
	private $_name, $_color, $_price;
	public function __construct($name, $color, $price) {
		$this->_name = $name;
		$this->_color = $color;
		$this->_price = $price;
	}
	public function prt_fruit() {
		print "Fruit name : $this->_name<br>";
       		print "Fruit name : $this->_color<br>";
        		print "Fruit name : $this->_price<br>";
        		print "<br>";
	}
	public function getPrice() {
	return $this->_price;
	}
	public function setPrice($price) {
	$this->price = $price;
	}
}
$apple = new Fruit("사과", "red", 1000);		# 객체생성
$banana = new Fruit("바나나", "yellow", 700);
$cherry = new Fruit("체리", "red", 1500);
$apple->prt_fruit();
$banana->prt_fruit();
$cherry->prt_fruit();
$cherry->setPrice(1200);
$cherry->prt_fruit();
?>