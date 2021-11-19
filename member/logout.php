<?php
session_start();
// 還原設定
unset($_SESSION['user']);

header("location:index.php");
?>