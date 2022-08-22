<?php
class Student {     # student class 선언
    public $studentId, $studentName;    # 클래스내 변수 선언

    public function StudentPrint() {    # 클래스 내 함수 선언
        print "ID : " . $this->studentId . "<br>";
        print "Name : " . $this->studentName . "<br>";
    }
}

$kim = new Student();   # 객체 생성
$lee = new Student();
$choi = new Student();
$kim->studentId = "2016123456";     # 객체 내 멤버에 접근 : ->
$kim->studentName = "Kim";
$lee->studentId = "2016001234";
$lee->studentName = "Lee";
$choi->studentId = "2016789456";
$choi->studentName = "Choi";
$kim->studentPrint();
$lee->studentPrint();
$choi->studentPrint();
?>