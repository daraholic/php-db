<?php

add(3,5);
echo "<br>";

echo add(3,5)+10;
echo "<br>";

$result=add(3,5);
echo $result+10;
echo "<br>";

echo $result+10;
echo "<br>";

echo "result=".$result;

function add($a,$b) {
    echo $a*$b;
    // return $a+$b;
}

echo "<br>";
// 寫一個函式 輸入名字之後印出"hello xxxx"
// 也可以用陣列的東西印
$users=['a','b'];
foreach($users as $user){
    hello($user);
}
hello('ann');
function hello($name){
    // return;
    echo "hello&nbsp".$name;
}

?>