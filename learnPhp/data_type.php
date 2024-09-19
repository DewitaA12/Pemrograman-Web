<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10*5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);

$gradeMath = 5.1;
$gradeScience = 6.7;
$gradeIndonesian = 9.3;

$average = ($gradeMath + $gradeScience + $gradeIndonesian)/3;

echo "<br> Math: ($gradeMath) <br>";
echo "Science: ($gradeScience) <br>";
echo "Indonesian: ($gradeIndonesian) <br>";
echo "Average: ($average) <br>";

var_dump($average);

$didStudentPass = true;
$didStudentHadExam = false;

echo "<br>";
var_dump($didStudentPass);
echo "<br>";
var_dump($didStudentHadExam);

$firstName = "Ibnu";
$lastName = 'Jakaria';

$fullName = "{$firstName} {$lastName}";
$fullName2 = $firstName . ' ' . $lastName;

echo "<br> First Name : {$firstName} <br>";
echo 'Last Name : ' . $lastName . '<br>';

echo $fullName;
echo "<br>";
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>