<?php
Class People {
    protected $name, $age;
    public function printpeople() {
        printf("%s <br>", $this->name);
        printf("%d <br>", $this->age);
    }
}
class Student extends People {      #inheritance
    private $ID;
    function __construct($name, $age, $ID) {
        $this->name = $name;
        $this->age = $age;
        $this->ID = $ID;
    }
    function printStudent() { 
        printf("--- Student ---<br>");
        $this->printPeople();
        printf("%s <br>", $this->ID);
    }
//  printpeople()를 호출하여 내용을 바꿔서 사용(재정의) = 오버라이딩
//  function printpeople() {
//  printf("--- student ---");
//  parent::printPeople();
//  printf("%s <br>", $this->ID);
//  }
}
class Professor extends People {
    private $officeNo;
    function __construct($name, $age, $officeNo) {
        $this->name = $name;
        $this->age = $age;
        $this->officeNo = $officeNo;
    }
    function printProffesor() { 
        printf("<br>--- Proffesor ---<br>");
        $this->printPeople();
        printf("%s <br>", $this->officeNo);
    }
}
class Staff extends People {
    private $title;
    function __construct($name, $age, $title) {
        $this->name = $name;
        $this->age = $age;
        $this->title = $title;
    }
    function printStaff() { 
        printf("<br>--- Proffesor ---<br>");
        $this->printPeople();
        printf("%s <br>", $this->title);
    }
}
$std1 = new Student("홍길동", 26, "2016001001");
$pro1 = new Professor("김주현", 50, "공과대");
$stf1 = new Staff ("백승수", 49, "행정실");
$std1->printStudent();
$pro1->printProffesor();
$stf1->printStaff();
?>