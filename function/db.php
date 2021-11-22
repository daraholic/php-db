<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');


// function find($name,$id){
//     // 全域宣告
//     global $pdo;
//     $dsn="mysql:host=localhost;charset=utf8;dbname=students";
//     $sql="SELECT * FROM `$name` WHERE `id`='$id'";
//         return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
//     }

// function all($costs){
//     global $pdo;   
//     $sql="SELECT * FROM `$costs`";
//     $rows=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
//     return $rows;

// 把pdo變成function   
// function pdo($db){
//     $dsn="mysql:host=localhost;charset=utf8;dbname=$db";
//     return new PDO($dsn, 'root','');
// }


/**
 * update函式設計
 * 1.指定資料表 $table =>資料表名稱字串
 * 2.指定更新欄位
 * 3.指定更新條件
 **/


// php陣列轉字串
$array=['col'=>'val1',
'col2'=>'val2',
'col3'=>'val3'];
$sql="";
// foreach + tab 選第二個
foreach ($array as $key => $value) {
    echo '迴圈執行前=>'.$sql.'<br>';
    $sql=$sql."`$key`='$value',";
    echo '迴圈執行後=>'.$sql.'<br>';
}
echo '迴圈完成後=>'.trim($sql,",");

function update($table,$column,$where){
    global $pdo;
    $sql="UPDATE `$table` SET `col`='val1',`col2`='val2',`col3`='val3'
                          WHERE `col`='val1' && `col2`='val2' && `col3`='val3'";
}
?>
