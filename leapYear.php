<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" value="year" name="year" placeholder="Enter year">
        <input type="submit" name="sub" value="subm">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST['year'];
        if ($year % 4 == 0) {
            echo "Leap Year";
        } else {
            echo "Not a Leap Year";
        }
    }
    ?>
</body>

</html>