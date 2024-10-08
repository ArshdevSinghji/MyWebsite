<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo "Welcome!! " . $_SESSION["username"] . "<br>";
    }
    ?>
    <form action="" method="post">
        <input type="submit" name="logout" value="LOGOUT">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_unset();
        session_destroy();
        header("Location: setSessionQuestion.php");
    }
    ?>
</body>

</html>