<?php

$a = 121;
$temp = $a;
$rev = 0;

while (floor($temp) != 0)
{  
    $rem = $temp % 10;
    $rev = ($rev*10) + $rem;
    $temp = $temp/10;
}

if ($rev == $a){
    echo "$a is Palindrom Number.";
}else
{
    echo "$a is not Palindrom Number.";
}
?>