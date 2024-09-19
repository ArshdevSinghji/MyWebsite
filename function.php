<?php
function wlc(){
    echo "Welcome to the world of functions";
}
wlc();
//functions take default arguments
function greet($name="user"){
    echo "<br>Welcome $name";
}
greet();
//call by value
function change_name($nm){
    $nm=$nm."_new";
    echo "<br>Changed name is: $nm";
}
$name="John";
change_name($name);
echo "<br>Original name is: $name"; 

//call by reference 
function change_name_ref(&$nm){
    $nm=$nm."_new";
    echo "<br>Changed name is: $nm";
}
$name="John";
change_name_ref($name);
echo "<br>Original name is: $name";

//func_get_args() function
function sum(){
    $sum=0;
    $args=func_get_args();
    for($i=0;$i<count($args);$i++){
        $sum+=$args[$i];
    }
    return $sum;
}
echo "<br>Sum is: ".sum(1,2,3,4,5)."<br>";
//callback functions
function my_callback($item){
    return strlen($item);
}
$strings=array("apple","orange","banana","coconut");
$lengths=array_map("my_callback",$strings);
print_r($lengths);

echo "<br>";

//json_encode()
$age=array("Peter"=>35,"Ben"=>37,"Joe"=>43);
echo json_encode($age);

//json_decode()
$json='{"Peter":35,"Ben":37,"Joe":43}';
$age=json_decode($json);
echo "<br>";
?>