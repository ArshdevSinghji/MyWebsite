<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Management</title>
</head>

<body>
    <form method="post" action="">
        Enter Username: <input type="text" name="username">
        <input type="submit" name="submit" value="setcookie">
        <input type="submit" name="submit" value="display">
        <input type="submit" name="submit" value="delete">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = isset($_POST["username"]) ? $_POST["username"] : null;
        $action = $_POST["submit"];


        if ($action == "setcookie" && isset($username) && !empty($username)) {

            setcookie("username", $username, time() + (24 * 60 * 60), "/");
            echo "Cookie 'username' is set for $username<br>";
        } elseif ($action == "display") {

            if (isset($_COOKIE["username"])) {
                echo "Cookie 'username' is set: " . $_COOKIE["username"] . "<br>";
            } else {
                echo "No 'username' cookie is set.<br>";
            }


            echo "Total cookies in my website: " . count($_COOKIE) . "<br>";


            foreach ($_COOKIE as $key => $value) {
                echo "$key = $value <br>";
            }
        } elseif ($action == "delete") {

            if (isset($_COOKIE["username"])) {
                setcookie("username", "", time() - 3600, "/");
                echo "Cookie 'username' has been deleted.<br>";
            } else {
                echo "No 'username' cookie to delete.<br>";
            }
        }
    }
    ?>

</body>

</html>