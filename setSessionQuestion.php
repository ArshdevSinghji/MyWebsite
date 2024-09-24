<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="username">
        <input type="password" name="pass" placeholder="password">
        <input type="submit" name="login" value="LOGIN">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $user = "arsh";
        $password = 123;
        if ($username == $user && $password == $password) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: getSessionQuestion.php");
        }
    }
    ?>
</body>

</html>