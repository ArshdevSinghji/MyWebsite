<?php
//write a varaible and check if it is a integer or not
$x=0;

if(is_int($x)){
    echo "It is an integer";
    echo "<br>";
    if($x<0){
        echo "It is a negative integer";
    }else if($x==0){
        echo "It is zero";
    }else{
        echo "It is a positive integer";
    }
}else{
    echo "It is not an integer";
}
?>