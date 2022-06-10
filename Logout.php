<?php
require_once "config.php";
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/rajan/PHP_Project/Login%20(1).php ");
?>