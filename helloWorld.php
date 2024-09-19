<?php
//My first phpScript
echo "Hello!"."<br>";
$x=10;
$y=20.9;
echo "Sum: ".$x+$y."<br>";
echo "Mul: ".$x*$y."<br>";
echo "Sub: ".$x-$y."<br>";
echo "Div: ".$x/$y."<br>";
echo "power: ".$x**$y."<br>";
var_dump($x);  //var_dump is used to print the dataType along with its value
echo "<br>";
var_dump($y);
$ars=array("hello","world");
echo "<br>";
$newars=array("hello", 10, 20.9);
var_dump($ars);
echo "<br>";
echo "$newars[0] $newars[1] $newars[2]";
echo "<br>";
echo "maximum value of integer: ".PHP_INT_MAX;
echo "<br>";
echo "minimum value of integer: ".PHP_INT_MIN;
echo "<br>";
echo "size of integer: ".PHP_INT_SIZE;
echo "<br>";
$null_name=null;
var_dump($null_name);
?>
<!-- <?="hello";?> can also write this way!-->