<?php
//1.2 Write a PHP program to find out maximum and minimum number.
$num1 = 25;
$num2 = 40;
$num3 = 15;

$max = max($num1, $num2, $num3);

$min = min($num1, $num2, $num3);

echo "Number 1 = " . $num1 . "<br>";
echo "Number 2 = " . $num2 . "<br>";
echo "Number 3 = " . $num3 . "<br><br>";

echo "Maximum Number = " . $max . "<br>";
echo "Minimum Number = " . $min;
?>