<?php
class Student {
    public $stdID, $stdName;
    public function prtStd() {
        print "ID : " . $this->stdID . "<br>";
        print "Name : " . $this->stdName . "<br>";
    }
}
$std01 = new Student();
$std02 = new Student();
$std03 = new Student();
$std01->stdID = "2016011111";
$std01->stdName = "Kim";
$std02->stdID = "2016022222";
$std02->stdName = "Lee";
$std03->stdID = "2016033333";
$std03->stdName = "Choi";
$std01->prtStd();
$std02->prtStd();
$std03->prtStd();
?>