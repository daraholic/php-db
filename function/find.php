<?php

echo "<pre>";
print_r(find('students',9));
// find()-會回傳資料表指定id的資料
echo "</pre>";

// $name 資料表變數
// $id 欄位變數
// 設變數可以換不同資料表的不同欄位
function find($name,$id){
    $dsn="mysql:host=localhost;charset=utf8;dbname=students";
    $pdo=new PDO($dsn,'root','');
    $sql="SELECT * FROM `$name` WHERE `id`='$id'";
    
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    // 回傳到本來的函式find()裡

    // PDO::FETCH_ASSOC 返回以欄位名稱作為索引鍵(key)的陣列(array)
    
    // return $pdo->query($sql)->fetch(PDO::FETCH_NUM);
    // return $pdo->query($sql)->fetch(PDO::FETCH_BOTH);
    // return $pdo->query($sql)->fetch(PDO::FETCH_CLASS);
    // return $pdo->query($sql)->fetchAll();

}

?>