<?php

//Method 1: 

$a[0]=4;
$a[1]=7;
$a[2]=8;
$a[3]=1;
$a[4]=9;

echo "<br />A. $a[1]";

//Method 2 :

$b[]=5;
$b[]="c";
$b[]=89;
$b[]=7.77;
$b[]=64;

echo "<br /><br />B. $b[3]";
echo "<br />B. $b[1]";

//Method 3

$c = array(8,"c",10.20,"PHP",7,"C++");

echo "<br /><br />C. $c[3]";

echo "<br /><br /> Whole Array C :<br /> ";
for( $i=0 ; $i<count($c) ; $i++)
{
    echo "$c[$i] <br />";
}
?>