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
    <?php include "./include/siderbar.php";?>
    <div class="content">
        <!--快速鍵 form:post[action="./api/reg.php"] 按一下tab -->
        <form action="./api/reg.php" method="post" id="regForm">
            <!-- table>tr*7>td*2 -->
            <table>
                <tr>
                    <td>帳號:</td>
                    <td><input type="text" name="account" id=""></td>
                    <!-- id="這裡面盡量不要用- 用底線的_" -->
                </tr>
                <tr>
                    <td>密碼:</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td>電子郵件:</td>
                    <td><input type="text" name="mail" id=""></td>
                </tr>
                <tr>
                    <td>姓名:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>電話:</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td>地址:</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>生日:</td>
                    <td><input type="date" name="birthday"></td>
                </tr>
            </table>
            <div><input type="submit" value="確認送出"></div>
        </form>

        
    </div>

    <?php include "./include/footer.php";?>
    
</body>
</html>