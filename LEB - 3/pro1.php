<?php
//1.1 Write a PHP program for print Previous semester Result using variables & constants in PHP.
const collage_name = "Marwadi University";
$studentName = "Raj Modhwadiya";
$rollNo = 7196;
$semester = "Semester 4";
$sub1 = "A+";
$sub2 = "A+";
$sub3 = "A";
$sub4 = "O";
$sub5 = "A+";
$SGPA = 8.83;
$CGPA = 8.73;

echo "=============================="."<br>";
echo "<h2>Marwadi Collage Result</h2>";
echo "=============================="."<br>";
echo "College Name: " . collage_name . "<br>";
echo "=============================="."<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Roll Number: " . $rollNo . "<br>";
echo "=============================="."<br>";
echo "Semester: " . $semester . "<br>";
echo "=============================="."<br>";
echo "Operating System : " . $sub1 . "<br>";
echo "Computer Network : " . $sub2 . "<br>";
echo "Life Skill 2 : " . $sub3 . "<br>";
echo "R Programming : " . $sub4 . "<br>";
echo "Python : " . $sub5 . "<br>";
echo "=============================="."<br>";
echo "SGPA : " . $SGPA . "<br>";
echo "CGPA : " . $CGPA . "<br>";
echo "=============================="."<br>";
?>