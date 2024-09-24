<?php
session_start();
echo "Welcome!! " . $_SESSION["username"] . " your designation is " . $_SESSION['userdesig'];
if (isset($_SESSION["username"]) && isset($_SESSION["userdesig"])) {
    echo "<br>Session variables are set";
} else {
    echo "<br>Session variables are not set";
}
