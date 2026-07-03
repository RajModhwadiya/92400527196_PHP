<?php
//2.3 Write a program to perform following array functions:  

$a = array("Hello everyone ",1,"welcome in PHP lab",1,"in BCA 5 C",1);
print_r($a);
echo "<br></br>";
$b = array(
    "Name" => "Raj",
    "City" => "Porbandar"
);

//1) array_change_key_case($var, CASE_LOWER/CASE_UPPER). 
echo "<br></br>";
echo "LOWER CASE ";
print_r(array_change_key_case($b, CASE_LOWER)); 

echo "<br></br>UPPER CASE ";
print_r(array_change_key_case($b,CASE_UPPER)); 

//2) array_count_values() 
echo "<br></br>";
echo "COUNT VALUES OF ARRAY ";
print_r(array_count_values($a));

//3) array_pop()
echo "<br></br>";
echo "ARRAY POP ";
print_r(array_pop($a));
print_r($a);

//4) array_push()
echo "<br></br>";
echo "ARRAY PUSH ";
array_push($a,"hi");
print_r($a);

// 5) sort()
echo "<br></br>";
echo "Sort the array ";
sort($a);
print_r($a);

?>