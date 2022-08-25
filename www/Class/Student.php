<?php
class Stud{
    public $stdID;
    public $stdName;
    public function prtStd(){
        print "ID : " . $this->stdID . "<br>";
        print "Name : " . $this->stdName . "<br>";
    }
}

class Professor{
    public $id;
    public $name;
    public $addr;
    public $roomNuber;
}
$std01 = new Stud();
$std02 = new Stud();
$std01->stdID = "20190001";
$std02->stdID = "20190002";
$std01->stdName = "Kim";
$std02->stdName = "Lee";
$std01->prtStd();
$std02->prtStd();

?>