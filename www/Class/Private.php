<?php
class Stud{
    private $stdID;
    private $stdName;
    public function prtStd(){
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

$std01 = new Stud();
$std02 = new Stud();
$std01->setID ("20190001");
$std02->setID ("20190002");
$std01->setName ("Kim");
$std02->setName ("Lee");
$std01->prtStd();
$std02->prtStd();
//print $std01->stdID; error 
print $std01->getID();

?>