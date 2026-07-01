<?php
/*2.1 Write a PHP code to create numeric array for Monday to Saturday,
associative array for month with total days of month such as
January=>31,February=>28 upto December and multidimensional array
for laptop along with company name inside that model and price(any
two companies).*/
$days = array("Monday","Tuesday","Wednesday","Thruesday","Friday","Saturday");

print_r($days);

echo "<br><br>";

$month = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "Aprial" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "Setpember" => 30,
    "Octombar" => 31,
    "Nevembar" => 30,
    "December" => 31
);

print_r($month);

echo "<br><br>";

$laptop = array(
    "Hp" => array(
        "model" => "levenovo think pad 1",
        "price" => 79990
    ),
    "Asus" => array(
        "model" => "vivo book s16",
        "price" => 86990
    )
);

print_r($laptop)
?>