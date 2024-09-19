<?php
$eng=90;
$math=80;
$sci=70;
$hin=60;
$comp=50;
$sum=$eng+$math+$sci+$hin+$comp;
$avg=($sum/5)*100;
if($avg >= 90){
    echo "Grade A";
}else if($avg >= 80){
    echo "Grade B";
}else if($avg >= 70){
    echo "Grade C";
}else if($avg >= 60){
    echo "Grade D";
}else if($avg >= 40){
    echo "Grade E";
}else{
    echo "Grade F";
}
?>