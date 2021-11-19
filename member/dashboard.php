<?php
// session_start只要放一次就好
session_start();

if(!isset($_SESSION['user'])){
    // 導回首頁
    header("location:index.php");
    // echo "非法登入";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <?php include "./include/head.php";?>
</head>
<body>
    <?php include "./include/header.php";?>
    <?php include "./include/nav.php";?>
    <?php include "./include/side_bar.php";?>
    <div class="content">
    <h3>會員中心</h3>

    <?php include "./fontend/dashboard.php";?>
    
    </div>

    <?php include "./include/footer.php";?>
</body>
</html>