<?php

$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "<script type=\"text/javascript\">alert('Invalid login length');</script>";
    exit();
} else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "<script type=\"text/javascript\">alert('Invalid username length');</script>";
    exit();
} else if (mb_strlen($password) < 4 || mb_strlen($password) > 16) {
    echo "<script type=\"text/javascript\">alert('Invalid password length (from 4 to 16)');</script>";
    exit();
}

$password = md5($password."24g935n34");

require "connect.php";
$mysql->query( "INSERT INTO `users` (`login`, `password`, `name`) VALUE('$login', '$password', '$name')");
$mysql->close();

header('Location: index.php');
exit();