<?php
class Fruit {
    private $_fruit_name;
    private $_price;
    private $_color;
    function __construct($name, $price, $color) {   #__construct()함수를 생성자로 이용
        $this->_fruit_name = $name;
        $this->_price = $price;
        $this->_color = $color;
    }
    function print_fruit () {
        print "Fruit name : $this->_fruit_name<br>";
        print "Fruit name : $this->_price<br>";
        print "Fruit name : $this->_color<br>";
        print "<br>";
    }

    function setPrice($price) {     # setter
        $this->_price = $price;     # 가격 변동
    }
    function getPrice() {   # getter
        return $this->_price;       # 가격 가져옴
    }
}

$Apple = new Fruit('Apple', 1000, 'red');   # 6번줄 함수에 바로 대입
$Orange = new Fruit('Orange', 2000, 'orange');
$Banana = new Fruit('Banana', 3000, 'yellow');
$Apple->print_fruit();
$Orange->print_fruit();
$Banana->print_fruit();
$Banana->setPrice(1200);    # 11번줄 setter 사용
$Banana->print_fruit();
?>