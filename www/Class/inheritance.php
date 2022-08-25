<?php
class People{
    protected $name;
    protected $age;
    public function printPeople(){
        printf("%s <br>", $this->name);
        printf("%s <br>", $this->age);
    }
}
class Student extends People{
    private $ID;
    function __construct($name, $age, $ID){
        $this->name = $name;
        $this->age = $age;
        $this->ID = $ID;
    }
    function printStudent(){
        print(" --- Student --- <br>");
        $this->printPeople();
        printf("%s <br>", $this->ID);
    }
}
class Professor extends People{
    private $officeNo;
    function __construct($name, $age, $officeNo){
        $this->name = $name;
        $this->age = $age;
        $this->officeNo = $officeNo;
    }
    function printProfessor(){
        print(" --- Professor --- <br>");
        $this->printPeople();
        printf("%s <br>", $this->officeNo);
    }
}
class Staff extends People{
    private $title;
    function __construct($name, $age, $title){
        $this->name = $name;
        $this->age = $age;
        $this->title = $title;
    }
    function printStaff(){
        print(" --- Staff --- <br>");
        $this->printPeople();
        printf("%s <br>", $this->title);
    }
}
$std1 = new Student("김도연",22,"2019123456");
$prof1 = new Professor("이소정",50,"공과대923호");
$stf1 = new Staff("유붕산", 48, "행정실");
$std1->printStudent();
$prof1->printProfessor();
$stf1->printStaff();
?>