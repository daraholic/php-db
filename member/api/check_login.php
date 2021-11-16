<?php
// $account=$_POST['account'];
// $password=$_POST['password'];
// 用{}框起來就是獨立的陣列
// $sql="SELECT * FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";

// count解
$sql="SELECT count(*) FROM `account` WHERE `account`='{$_POST['account']}' && `password`='{$_POST['password']}'";

// SELECT * FROM `account` WHERE `account`='$_POST['account']' && `password`='$_POST['password']'
// echo $sql;
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

// $result=$pdo->quary($sql);
// var_dump($result);
// fetch只拿一筆資料
// fetchAll 二維陣列
// fetchColumn 只取一個欄位
$result=$pdo->quary($sql)->fetchColumn();

// 可以印出來看看
// echo $result['account'];
// echo $result['password'];
if($result>0){
    header("location:../dashboard.php");
}else{
    header('location:../index.php?err=1');
}
// 以下是重複比對
// if($_POST['account']==$result['account'] && $_POST['password']==$result['password']){
//     echo "登入成功";
// }else{
//     echo "帳號或密碼錯誤";
// }


?>