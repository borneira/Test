<?php
$ip=$_SERVER['REMOTE_ADDR'];
print($ip);
$file=file_get_contents("index.php");
print($file);
?>