<?php
setcookie("user","", time() + 3600, "/", "localhost");
?>

<form method="post" action="cookie_id_check.php">
    <input type="text" name="name" size="8">
    <input type="submit" value="전송">
</form>