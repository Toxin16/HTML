<?php
    $numbers = array();
    for($i=0; $i<45; $i++) {
        $numbers[$i] = $i + 1;
    }
    $cnt = 0;
    for ($i=0; $i<45; $i++) {
        print "\$numbers[$i] = $numbers[$i] ";
        $cnt++;
        if($cnt%5 == 0){
            print "<br>";
        }
    }
    print "<hr>";
    shuffle($numbers);
    $cnt = 0;
    for ($i=0; $i<45; $i++) {
        print ("\$numbers[$i] = $numbers[$i] ");
        $cnt++;
        if($cnt%5 == 0){
            print "<br>";
        }
    }
    print "<hr>";
    $lotto = array();
    for ($i=0; $i<6; $i++) {        //0~44
        array_push($lotto, $numbers[$i]);   //1~45
    }
    for ($i=0; $i<6; $i++) {
        print (" $numbers[$i] ");
    }
    print"<hr>";
    sort($lotto);

    for($i = 0; $i<6; $i++) {
        print("$lotto[$i] ");
    }
?>