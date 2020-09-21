<?php
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);


$password = md5($password . "24g935n34");

require "connect.php";
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
$user = $result->fetch_assoc();
if ($user == 0) {
    echo "<script type=\"text/javascript\">alert('The user with this email address or password was not found');</script>";
    exit();
}

setcookie('user', $user['name'], time() + 3600 * 24, "");

$mysql->close();

header('Location: index.php');
