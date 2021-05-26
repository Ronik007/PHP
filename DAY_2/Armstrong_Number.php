<?php
$b = 153;
$temp = $b;
$sum = 0;

while (floor($temp) != 0){
    $rem = $temp % 10;
    $sum = $sum + ($rem * $rem * $rem);
    $temp = $temp/10;
}
if ($sum == $b) {
    echo "$b is Armstrong Number.";
} else {
    echo "$b is not Armstrong Number";
}
?>

