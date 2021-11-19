<?php
session_start();


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
<?php

if(isset($_GET['action']) && $_GET['action']!='login'){
    include "./include/side_bar.php";
}

?>
<?php

    
// switch($_GET['action']){
//         case "login":
//             include "./fontend/login.php";
//             break;
//         case "edit_user":
//             include "./fontend/edit_user.php";
//             break;
//             case "dashboard":
//             include "./fontend/dashboard.php";
//             break;

//     }

?>
    <?php include "./fontend/login.php";?>
    <?php include "./include/footer.php";?>
    
</body>
</html>