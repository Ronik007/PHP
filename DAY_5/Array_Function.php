<html>
<head>
    <style>
        .center{
                margin: auto;
                width: 71%;
                padding: 30px;
                margin-top: 30px;
            }
        
        div {   
                width: 75%;
                border-radius: 5px;
                background-color: #C5E4FF;
                padding: 20px;
            }
    </style>
</head>

<body>
    <div class="center">
    
<?php

//count()
echo "<h3>count() : This function count the number of element in an Array.</h3>";
$a = array("PHP","C","C++","JAVA","ANDROID","PYTHON");
echo "<br />  a = (PHP,C,C++,JAVA,ANDROID,PYTHON)";
echo "<br />Count : ". count($a);
echo "<hr />";

//array_count_values()
echo "<h3>array_count_values() : The Function will return associative array with the array values as keys,and their count is value.</h3>";
$b = array("C","PHP","C++","JAVA","DJANGO","PHP","PYTHON","C++","PHP");
echo "<br /> b = (C,PHP,C++,JAVA,DJANGO,PHP,PYTHON,C++,PHP) <br />";
echo "<pre>";
print_r(array_count_values($b));
echo "<pre>";
echo "<hr />";

//array_sum()
echo "<h3>array_sum() :  This function is used to calculate the sum of all values within array.</h3>";
$c = array(8,7,24,74,41,35,69);
echo "<br />c = (8,7,24,74,41,35,69)";
echo "<br />Sum is : ". array_sum($c);
echo "<hr />";

//arrat_product()
echo "<h3>array_product() : This function is used to calculate the product by multiplying each values.</h3>";
$d = array(4,8,9,3,7);
echo "<br />d = (4,8,9,3,7)";
echo "<br />Product is : ". array_product($d);
echo "<hr />";

//array_reverse()
echo "<h3>array_reverse() : This function is used reverse the element in array.</h3>";
$e = array('C','C++','Java','Python','PHP','HTML','CSS');
echo "<br />e = (C,C++,Java,Python,PHP,HTML,CSS)<br />";
$rev = array_reverse($e);
echo "<pre>";
print_r($rev);
echo "<pre><hr />";

//in_array()
echo "<h3>in_array() : This function is used to look inside an array to see if certain value exists. This Function returns boolean value.</h3>";
$f = array(1,"C","Ronik","PHP");
echo "<br />f = (1,C,Ronik,PHP)";
echo "<br />Is 'Ronik' in f array : ". in_array("Ronik", $f)."  (1 => True and 0 => False)<hr />";

//array_rand()
echo "<h3>array_rand() : This function is used select one or more keys from an array at Random</h3>";
$g = array("Ronik","Prem","Harsh","Aniket","Hemang","Krinal","Harshil","Rutvik");
echo "<br />g = (Ronik,Prem,Harsh,Aniket,Hemang,Krinal,Harshil,Rutvik)<br />";
$ran_index = array_rand($g);
echo "Random one Element from Array : $g[$ran_index]";

//Select Multiple key at Random

$ran_index1 = array_rand($g, 3);
echo "<br />Random more Value : <br />";
foreach ($ran_index1 as $key => $value) {
    echo "$key - <strong>".$g[$value]."</strong><br />";
}
echo "<hr />";

//array_unique()
echo "<h3>array_unique() : This function is used to remove duplicate element from array.</h3>";
$h = array("C","C++","PHP","Java","PHP","C","Python");
echo "<br /> h = (C,C++,PHP,Java,PHP,C,Python)";
$unq = array_unique($h);
echo "<pre>";
print_r($unq);
echo "<pre><hr />";

//array_merge()
echo "<h3>array_merge() : This function is used to merge multiple array.</h3>";
$i = array("C","C++","Java","Python","C#");
$j = array("HTML","CSS","JavaScript","PHP");

$merge = array_merge($i,$j);

echo "<br />i = (C,C++,Java,Python,C#) & j = (HTML,CSS,JavaScript,PHP)";
echo "<pre>";
print_r($merge);
echo "<pre><hr />";

//array_serch()
echo "<h3>array_serch() : This function is used to serch element in array and returns corresponding key.</h3>";
$k = array("PHP","Ronik","Java","Prem","Harshil");
echo "<br />k = (PHP,Ronik,Java,Prem,Harshil)";
$key_1 = array_search("Prem", $k);
echo "<br />Key for 'Prem' : $key_1 <hr />";

//range()
echo "<h3>range() : This function is used to create a new array using specified range .</h3>";
$l = range(1980, 2020);
echo "<br /><select> ";
foreach ($l as $value) {
    echo "<option> $value </option>";
}
echo "</select><hr />";

//sort()
echo "<h3>sort() : This function is used to sort an array by it's value from lowest to highest(Ascending Oreder).</h3>";
$m = array("Java","C","Ronik","PHP","HTML","AI");
echo "<br />m = (Java,C,Ronik,PHP,HTML,AI)";
$sort = sort($m);
echo "<pre>";
print_r($m);
echo "<pre><hr />";

//rsort()
echo "<h3>rsort() : This function is used to sort an array in Reverse or Descending Oreder.</h3>";
$n = array("Python","Java","C","Ronik","PHP","HTML","AI");
echo "<br />n = (Python,,Java,C,CSS,PHP,HTML,AI)";
$rsort = rsort($n);
echo "<pre>";
print_r($n);
echo "<pre><hr />";

//asort()
echo "<h3>asort() : This function is used to sort an array in Ascending Oreder and Reserve Index.</h3>";
$o = array("Python","C","PHP","C++","AI");
echo "<br />o = (Python,C,PHP,C++,AI)";
asort($o);
echo "<pre>";
print_r($o);
echo "<pre><hr />";

//ksort()
echo "<h3>ksort() : This function is used to sort an array in Ascending Oreder according to the Keys.</h3>";
$p = array("PHP" => "Web Devlopment", "HTML" => "Web Structure", "CSS" => "Web Designing");
echo "p = ( PHP => 'Web Devlopment, HTML => Web Structure, CSS => Web Designing )";
ksort($p);
echo "<pre>";
print_r($p);
echo "<pre><hr />";

//krsort()
echo "<h3>krsort() : This function is used to sort an array in Reverse Oreder according to the Keys.</h3>";
$q = array("Java" => "Object Oreiented Language", "ML" => "Machine Learning", "AI" => "Artificial Intellegence");
echo "q = ( Java => Object Oreiented Language, ML => Machine Learning, AI => Artificial Intellegence )";
krsort($q);
echo "<pre>";
print_r($q);
echo "<pre><hr />";

//shuffle()
echo "<h3>shuffle() : This function is used to randomly shuffle the order of the element in an array</h3>";
$r = array("PHP","Ronik","Java","HTML","C","C++","CSS","Python");
echo "<br />r = (PHP,Ronik,Java,HTML,C,C++,CSS,Python) ";
shuffle($r);
echo "<pre>";
print_r($r);
echo "<pre><hr />";

//end()
echo "<h3>end() : This function is return last element of an Array</h3>";
$s = array("Ronik","Java","C","CSS","Python");
echo "<br />s = (Ronik,Java,C,CSS,Python) ";
echo "<br />Lasr Element : ". end($s)."<hr />";


?>
        
        
</div>
</body>
</html>