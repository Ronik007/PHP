<?php
$n = 5;

echo "<h3> Pattern-1: </h3>";

for ($i = 1 ; $i<=$n ; $i++){
    for ($j = 1 ; $j<=$i ; $j++){
     echo "*";
    }
    echo "</br>";
}

echo "</br><h3> Pattern-2: </h3>";

for ($i = 1 ; $i<=$n ; $i++){
    for ($j = $n ; $j>=$i ; $j--){
     echo "*";
    }
    echo "</br>";
}

echo "</br><h3> Pattern-3: </h3>";

for ($i = 1 ; $i<=$n ; $i++){
    for ($j = 1 ; $j < $i ; $j++){
        echo "_";
    }
    for ($k = $n ; $k >= $i ; $k--){
        echo "*";
    }   
    echo "</br>";
}

echo "</br><h3> Pattern-4: </h3>";

for ($i = 1 ; $i<=$n ; $i++){
    for ($j = $n ; $j > $i ; $j--){
        echo "_";
    }
    for ($k = 1 ; $k <= $i ; $k++){
        echo "*";
    }   
    echo "</br>";
}
?>