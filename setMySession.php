<?php
session_start();
echo "My Session id is:" . session_id();
$_SESSION["username"] = "admin";
$_SESSION["userdesig"] = 'CEO of GOOGLE';
echo "<br>Session variables are set";
