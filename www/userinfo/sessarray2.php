<?php
session_start();
foreach ($_SESSION['fruits'] as $fruit) {
    print $fruit."<br>";
}
?>