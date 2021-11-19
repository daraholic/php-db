<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
$id=$_POST['id'];
$addr=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$bithday==$_POST['birthday'];

// 更新sql語法
// 兩張資料表要分開寫
$sql_account="UPDATE `account` SET `mail`=$mail WHERE `id`='$id'";
$sql_member="UPDATE `member` SET `address`=$addr, `mobile`='$mobile',`birthday`='$bithday' WHERE `id`='$id'";

// 執行更新
// 不需要用fetch 拿回的東西是空的
$pdo->query($sql_account);
$pdo->exec($sql_member);

// 回到dashboard or 會員編輯資料

header("location:../dashboard.php?user=");
// ?帶上user資料
?>