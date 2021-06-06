<?php
//for connection with database
$conn = mysqli_connect("localhost", "Ronik", "RonikMG6952", "internship");
//query
$q = mysqli_query($conn, "select * from user");
// Below fuction will fetch row in numeric array
$data = mysqli_fetch_row($q);

echo "<pre>";
//Debug Array
print_r($data);

//Below function will fetch row in numeric and Associative array
$data1 = mysqli_fetch_array($q); 

echo "<pre>";
//Debug Array
print_r($data1);

?>