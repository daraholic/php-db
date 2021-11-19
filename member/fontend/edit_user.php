編輯會員資料  
    <!-- < ? 這中間是執行PHP的程式  GET是帶進user資料  ?> -->
    <!-- 網址 ? 參數  -->
    <form action="./api/edit_user.php?user<?=$_SESSION['user'];?>" method="post">
    <?php    
    $dsn="mysql:host=localhost;charset=utf8;dbname=member";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from `account` , `member` 
               where `account`.`id`=`member`.`id` && 
                     `account`.`account`='{$_SESSION['user']}';";
    // $sql="SELECT `member`.`address`,
    //             `member`.`mobile`,
    //             `account`.`mail`,
    //             `member`.`birthday`,
    //             FROM `account`,`member` 
    //             WHERE `account`.id=`member`.`id` &&
    //             `account`.`account`='{$_GET['user']}';";
    $user=$pdo->query($sql)->fetch();
?>
<!-- id不能被使用者更改 會覆蓋到別的使用者資料-->
    <p>id:<input type="hidden" name="id" id=""></p>
    <p>地址:<input type="text" name="addr" id=""></p>
    <p>電話:<input type="text" name="mobile" id=""></p>
    <p>mail:<input type="text" name="mail" id=""></p>
    <p>生日:<input type="text" name="birthday" id=""></p>
