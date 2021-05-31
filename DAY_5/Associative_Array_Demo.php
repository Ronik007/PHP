<?php

//Associative Array in PHP is an array that used to store Key_Value pair.

//Method 1 :
$a[0] = 4;
$a["PHP"] = "Web_Devlopment";
$a["r"] = "Ronik";
$a[7] = 50.40;
$a["Language"] = "English";

echo "<br />A. Name is $a[r]";
echo "<br />A. Language is Selected by Him : $a[Language]";

// Method 2 : 

$b = array(
    0 => 7,
    'h' => 'Harshil',
    'Lang' => 'C++',
    4 => 50.41
);

echo "<br /><br />B. Name is $b[h]";
echo "<br />B. Age is $b[0]";
echo "<br />B. Language is selected by Him : $b[Lang]";


echo "<br /><br /> Whole Array A :";
foreach ($a as $value) {
    echo "<br /> $value";
}

echo "<br /><br /> Whole Array B :";
foreach ($b as $key=>$value) {
    echo "<br />$key => $value";
}

//Array C;

$c = array(
    1 => 15,
    "p" => "Prem",
    7 => 21.45,
    "lan" => "Java",
    "age" => 21
);

echo "<pre>";
print_r($c);
echo "<pre>";


//Array D:

$d = array(
    4 => 78,
    "a" => "Aniket",
    8 => 74.58,
    "lang" => "Python",
    "age" => 22
);

echo "<pre>";
var_dump($d);
echo "<pre>";
?>