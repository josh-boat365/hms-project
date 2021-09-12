<?php

session_start();
$_SESSION['login']=="";
session_unset();
session_destroy();

$redirect = "projects/hms-project/index.php";
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELFT']),'/\\');
header("location:http://$host$uri/$redirect");
exit();
?>