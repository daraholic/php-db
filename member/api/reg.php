<?php
// ctrl + alt 向下選取
// shift + alt 選單字 
$account=$_POST['account'];
$password=$_POST['password'];
// $password=md5($_POST['password']); 變成編碼
$mail=$_POST['mail'];

$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$birthday=$_POST['birthday'];

// alt + z 強制斷行
$sql_account="insert into `account`(`account`,`password`,`mail`) values('$account','$password','$mail')";
$sql_member="insert into `member`(`name`,`address`,`mobile`,`birthday`) values('$name','$address','$mobile','$birthday')";


// 連線資料庫
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');
// 執行寫入資料表的動作
$pdo->exec($sql_account);
$pdo->exec($sql_member);
// echo $pdo->exec($sql_account);
// echo $pdo->exec($sql_member);
// echo "<hr>";

header("location:../index.php");


?>