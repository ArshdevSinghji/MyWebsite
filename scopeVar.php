<?php
//local variable
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}

//global variable
$x = 10; // global scope
myTest();
echo "<p>Variable x outside function is: $x</p>";

//Constants are global
define("GREETING", "Welcome to W3Schools.com!");
function myTest1() {
    echo "global: ".GREETING;
}
myTest1();

echo "<br>";

//static variable
function myTest2() {
    static $y = 0;
    echo $y;
    $y++;
}
myTest2();

//cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

//cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

//create scorecard of a strudent
$student = array("name" => "John", "score" => 90);
echo $student["name"];
echo $student["score"];
?>