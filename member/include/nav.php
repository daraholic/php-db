<?php
if(isset($_SESSION['user'])){
?>

<style>
    .del {
        background:#EEE;
        color:black;
        float:right;
    }
</style>
<nav>

<!-- 判斷有沒有get -->
        <a href="index.php">回首頁</a>

        <a href="content.php?action=dashboard">會員中心</a>
        <a href="chang_pw.php">修改密碼</a>
        <a href="content.php?action=edit_user">編輯會員資料</a>
        <a href="logout.php">登出</button></a>
        <a class="del" href="./del_alert.php">刪除帳號</button></a>
</nav>

<?php }else{  ?>
<nav>
    <a href="index.php">回首頁</a>
    <a href="content.php?action=forgot">忘記密碼</a>
    <a href="reg.php"><button>註冊新會員</button></a>
</nav>
    
<?php } ?>