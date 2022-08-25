<?php
session_start();
session_unset();
session_unset();
print $_SESSION['apple'];
print $_SESSION['banana'];
?>