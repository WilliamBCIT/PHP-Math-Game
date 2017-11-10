<?php
session_start();
unset($_SESSION);
session_destroy();
header("Location: include/login.php");
die();
?>