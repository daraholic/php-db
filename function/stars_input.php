<!-- form>input:number + enter 快捷鍵 -->
<form action="?" method="post">
    <input type="number" name="stars">
    <input type="submit" value="送出">
</form>


<?php

if(isset($_POST['stars'])){
    stars($_POST['stars']);
}
// 三角形星星 用function簡化
// stars(10);
function stars($rows){
    $row=5;
    for($j=1;$j<=5;$j++){
        for($i=0;$i<($row-$j);$i++){
            echo "&ensp;";
        }

        for($i=0;$i<(2*$j-1);$i++){
            echo "*";
        }
        echo "<br>";
    } 
}



?>