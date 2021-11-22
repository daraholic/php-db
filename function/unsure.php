<?php
// 不定參數 同時容納多個資料
// function add(...$a){
//     print_r($a);
    // $a 陣列
    // 印出陣列的方式print_r
// }

// 加一些東西進去
// add(1,2);
// echo "<hr>";
// add(1,2,3,4);
// echo "<hr>";
// add(1,2,"ann",['a','b']);
// echo "<hr>";
// add();
// echo "<hr>";



function add(...$arg){
    $sum=0;
    foreach($arg as $num){
        // 判斷參數是否為數字
        if(is_numeric($num)){
            $sum+=$num;

        }
    }
    return $sum;
}
echo add(1,2);
echo "<hr>";
echo add(1,2,3,4);
echo "<hr>";
echo add(1,2,"ann",['a','b']);
echo "<hr>";
echo add();
echo "<hr>";

?>