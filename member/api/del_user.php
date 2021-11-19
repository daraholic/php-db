<?php

// 阻止別人來到這頁去刪東西
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['alert'])){
    header("location:../index.php");
    exit();
}


$dsn="mysql:localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$user=$pdo->query("select `id` from `account` WHERE `account`='{$_SESSION['user']}'")->fetchColumn(); //拿一個user資料就好
$sql_account="DELETE FROM `account` WHERE `id`='{$user_id}'";
$sql_member="DELETE FROM `member` WHERE `id`='{$user_id}'";

$pdo->exec($sql_account);
$pdo->exec($sql_member);

header("location:../index.php")

// SESSION COOKIE都要一起刪掉

?>