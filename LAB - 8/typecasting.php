<?php
//Definition : Write a PHP code for Type casting with settype, gettype function.

$no = 10;
$name = "xyz";

echo gettype($no)."<br>";
settype($name,"string");
echo gettype($name);

?>