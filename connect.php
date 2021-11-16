<?php
// mysql 也可以換別的資料庫的名稱
// macbook: 127.0.0.1
// $pdo=new PDO('資料庫的連線資訊','帳號','密碼','[其他參數]');
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
// new 就是建一個物件出來 物件導向
// PDO是一種PHP的連線方式
$pdo=new PDO($dsn,'root','');
/***********************************************************************
 * 使用new 語法來建立一個PDO連線物件，並將這個物件指定給一個變數，
 * 方便接下來的操作
 * 第一個參數位置是資料庫的設定資料
 * 第二個參數是資料庫的使用者帳號
 * 第三個參數是資料庫的使用者密碼
 * 第四個參數是附加設定資料，以陣列方式呈現，這個參數可不填
 ***********************************************************************/

// 三元運算子:適合一次的判斷true or false
// $var=(條件式)?真:假;
$range=(isset($_GET['id']))?$_GET['id']:10;
// 用 quary比較快 prepare 比較安全
// fetch 取得
// 結果放在$rows裡 是一個陣列 然後再印出來看看對不對
// students是放在myphpadmin裡的一個sql資料表
$sql="select * from `students` where  `id`<$range ";
$rows=$pdo->query($sql)->fetchAll();
// rows 二維陣列
// 送到資料庫之後全部取回


echo "<pre>";
// echo $rows;
print_r($rows);
// print_f 印陣列的方法
var_dump($rows);
// var_dump 會印出更細的東西
echo "</pre>";




?>

<table>
    <tr>
        <td>學號</td>
        <td>座號</td>
        <td>姓名</td>
        <td>性別</td>
        <td>出生年月日</td>
        <td>畢業國中</td>
    </tr>
    
    
    
<?php
// 取出陣列的值來用
// 排整齊
foreach($rows as $row){
    echo "<tr>";
    echo "<td>".$row['uni_id']."</td>";
    echo "<td>".$row['seat_num']."</td>";
    echo "<td>".$row['name']."</td>";
    // 從程式裡加性別表單裡
    if(mb_substr($row['national_id'],1,1==1)){
        echo "<td>男生</td>";
    }else{
        echo "<td>女生</td>";
    }
    echo "<td>".$row['birthday']."</td>";
    echo "<td>".$row['secondary']."</td>";
    echo "</tr>";
}



?>

</table>