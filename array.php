<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br>";
echo "count of array: ".count($cars)."<br>";
for($i=0;$i<count($cars);$i++){
    echo $cars[$i]." ";
}
echo "<br>";
echo "sort array in ascending order: ";
sort($cars);
for($i=0;$i<count($cars);$i++){
    echo $cars[$i]." ";
}

//maximun and minimum value in an array
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
for($i=0;$i<count($numbers);$i++){
    echo $numbers[$i]." ";
}
echo "<br>";
echo "maximum value in array: ".max($numbers)."<br>";
echo "minimum value in array: ".min($numbers)."<br>";

//reversing an array
$reverse=array(1,2,3,4,5);
for($i=count($reverse)-1;$i>=0;$i--){
    echo  $reverse[$i]." ";
}
$inbuilt=array_reverse($reverse); //inbuilt function to reverse an array
echo "</br>";
print_r($inbuilt);

//sort an associative array in ascending order
$ages=array(23,45,29,34,50,19,67,45,23,34);
$unique=array_unique($ages);
echo "</br>";
print_r($unique);   //what are unique values in an array? they are 23,45,29,34,50,19,67 because they are not repeated
echo "</br>";
echo "maximum value in array: ".max($unique)."<br>";
echo "minimum value in array: ".min($unique)."<br>";
asort($unique);
print_r($unique);
echo "</br>";
rsort($unique);
print_r($unique);

$even_numbers=array_filter($unique,function($value){
    return $value%2==0;
});
echo "</br>";
print_r($even_numbers);

array_push($unique,100);
echo "</br>";
print_r($unique);

array_pop($unique);
echo "</br>";
print_r($unique);

array_unshift($unique,200);
print_r($unique);
echo "</br>";

foreach($unique as $i){
    echo $i." ";
}
echo "</br>";

//associative array
$age=array("Ben"=>"37","Peter"=>"35","Joe"=>"43");
asort($age);
arsort($age); //sort in descending order
ksort($age); //sort by key
krsort($age); //sort by key in descending order 
print_r($age);
echo "</br>";

//array count values
$colors=array("red","green","blue","red","blue","green","red");
print_r(array_count_values($colors));
echo "</br>";

//merge the array
$first=array("a"=>"red","b"=>"green");
$second=array("c"=>"blue","b"=>"yellow");

//print the common values in both arrays
print_r(array_intersect($first,$second));
echo "</br>";
$merge=array_merge($first,$second);
print_r($merge);
echo "</br>";

//convert array into string
echo implode(",",$merge);

echo "</br>";

echo "todays date is ". date("Y/m/d")."<br>";
?>