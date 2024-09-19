<?php
//area of circle, sqare, rectangle, triangle
$r = 4;
echo "Area of circle is: ".(pi() * $r * $r);
echo "<br>";
//Area of circle with const pi value
define("PI", 3.1415926);
echo "Area of circle is (const): ".(PI * $r * $r);
echo "<br>";
$area=(PI*$r*$r);
echo "roundOff: ".number_format($area,2);
echo "<br>";
$a=5;
echo "Area of square is: ".($a*$a);
echo "<br>";
$l=4;
$b=5;
echo "Area of rectangle is: ".($l*$b);
echo "<br>";
$b=5;
$h=4;
echo "Area of triangle is: ".(0.5*$b*$h);
?>