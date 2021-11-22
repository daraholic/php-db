<?php
// echo "<pre>";
// print_r(all('memo'));
// echo "</pre>";

// 打開myphpadmin看一下 SELECT * FROM `costs`
// 資料表的名字是costs

$rows=all('costs');
// 自訂變數$rows放進foreach使用
// all() 是一種函式 拿出一張資料表名字叫做'costs' 
// all()-給定資料表名後，會回傳整個資料表的資料
// 可以換成別的資料表 ' '

foreach($rows as $row){
    echo $row['item']."-".$row['place']."<br>";
    // 印出資料庫裡面的欄位
    // 可以印id,item,cost,type....
}

// 引入資料庫
// 取一個變數
// 取出指定資料表變數叫做$costs的所有資料
function all($costs){
    // 連接資料庫
    // dbname 是資料庫的名字
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn, 'root','');
    $sql="SELECT * FROM `$costs`";
    echo $sql;
    $rows=$pdo->query($sql)->fetchAll();
    // 回傳的是陣列
    return $rows;
}

?>