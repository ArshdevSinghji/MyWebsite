<?php
$count=0;
function incrementCounter(){
    $GLOBALS['count']++;
}
function decrementCounter(){
    $GLOBALS['count']--;
}
function resetCounter(){
    $GLOBALS['count']=0;
}
function getCounter(){
    return $GLOBALS['count'];
}
incrementCounter();

incrementCounter();

decrementCounter();

$value=getCounter();
echo "Counter: $value";
?>