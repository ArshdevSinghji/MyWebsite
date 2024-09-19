<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Enter a string:</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=$_POST['name'];
            $vowels=array('a','e','i','o','u');
            $count=0;
            $lowerCase=strtolower($name);
            for($i=0;$i<strlen($name);$i++){
                if(in_array($lowerCase[$i],$vowels)){
                    $count++;
                }
            }
            echo "Number of vowels in the string: ".$count;
        }
    ?>
</body>
</html>