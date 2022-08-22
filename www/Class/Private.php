<?php
class Student {
    private $stdID, $stdName;
    public function prtStd() {
        print "ID : " . $this->stdID . "<br>";
        print "Name : " . $this->stdName . "<br>";
    }
    public function setID($id){
        $this->stdID = $id;
    }
    public function setName($name){
        $this->stdName = $name;
    }
    public function getID(){
        return $this->stdID;
    }
}

$std01 = new Student();
$std02 = new Student();
$std01->setID("2016011111");
$std02->setID("2016022222");
$std01->setName("Kim");
$std02->setName("Lee");
$std01->prtStd();
$std02->prtStd();
//print $std01->stdID;   # error
print $std01->getID();  # private때문에 바로 stdID에 접근이 불가능하므로 getID()를 거쳐서 접근함
# getID()는 같은 클래스에 정의되어 있으므로 stdID에 접근이 가능함. java에서 setter, getter와 같음
?>