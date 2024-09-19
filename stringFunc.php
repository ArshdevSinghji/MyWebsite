<?php
$name="arshdev Singh";
echo "The length of my name is: ".strlen($name)."<br>";
echo "The reverse of my name is: ".strrev($name)."<br>";
echo "Word Count is: ".str_word_count($name)."<br>";
echo "Position of 'Singh' in my name is: ".strpos($name, "Singh")."<br>";
echo "Replace 'Singh' with 'Rajput' in my name: ".str_replace("Singh", "Rajput", $name)."<br>";
echo "string repeat: ".str_repeat($name ,2)."<br>";
echo "<pre>"; //[pre] is used to print the output in a formatted way
echo rtrim("    hello world    ")."<br>"; //rtrim is used to remove the white spaces from the right side of the string
echo ltrim("    hello world    ")."<br>"; //ltrim is used to remove the white spaces from the left side of the string
?>