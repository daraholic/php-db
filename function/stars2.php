<?php



for($i=5;$i<12;$i=$i+2){
    stars($i);
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

// 印出來的符號有變化
// 把星星變成變數
stars2('x',6);
function stars2($symbol,$row){
   
    for($j=1;$j<=5;$j++){
        for($i=0;$i<($row-$j);$i++){
            echo "&ensp;";
        }

        for($i=0;$i<(2*$j-1);$i++){
            echo "$symbol";
        }
        echo "<br>";
    } 
}


?>