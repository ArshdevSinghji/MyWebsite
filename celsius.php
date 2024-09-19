<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>celsius converter</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="celsius" placeholder="Enter temperature in celsius">
        <input type="submit" name="submit" value="convert">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $celsius=$_POST['celsius'];
            $fahrenheit=($celsius*9/5)+32;
            echo "<h2>Temperature in fahrenheit is: </h2>" . "<b><i>$fahrenheit</i></b>";
        }
    ?>
</body>
</html>