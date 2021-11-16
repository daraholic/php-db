<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test include&require</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include "header.html"; ?>
    
    <?php
    // isset()判斷變數是否存在
    // 'do' 想做什麼事的意思 取一個變數暫代 可能是做save可能是做select
    if(isset($_GET['do'])){
        include "nav.php"; 
    }
    
    ?>
    <div class="body">
        file02的內容

    </div>
    <?php include "footer.php"; ?>
</body>

</html>