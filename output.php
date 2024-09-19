<?php
//write a php script to take two numbers from user and perform the operation selected by the user
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $choice=$_POST['select'];
    switch($choice){
        case "add":
            echo "Sum: " . ($num1 + $num2);
            break;
        case "sub":
            echo "Difference: " . ($num1 - $num2);
            break;
        case "mul":
            echo "Product: " . ($num1 * $num2);
            break;
        case "div":
            if ($num2 != 0) {
                echo "Quotient: " . ($num1 / $num2);
            } else {
                echo "Cannot divide by zero";
            }
            break;
        default:
            echo "Invalid choice";
    
    }
}
?>