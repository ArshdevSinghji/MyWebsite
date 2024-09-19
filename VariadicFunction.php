<?php
function add(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}
$result=add(1,2,3,34,4,5,6,7,8,9,10);
echo $result."<br>";

//pass callback to PHP.s array.map() function to calculate the length of each string in an array
$length=array_map(function($name){
    return strlen($name);
},["Arshdev","Arsh","Arshu","Bhumi","shiva"]);
print_r($length);
?>