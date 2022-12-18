<?php
session_start();
unset($_SESSION['userId']);
setcookie("userId", "", time() - 9600);
unset($_COOKIE['userId']);
header('Location:log_in.php');
