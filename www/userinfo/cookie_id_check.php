<?php
$name = $_POST['name'];
if($name)
    $_COOKIE[$name]=$name;
    print "Hello " . $_COOKIE[$name]."!";
?>