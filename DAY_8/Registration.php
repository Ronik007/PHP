<?php

$name = filter_input(INPUT_POST, "name");
$email = filter_input(INPUT_POST, "email");
$pwd = filter_input(INPUT_POST, "pwd");
$m_no = filter_input(INPUT_POST, "m_no");
$c_name = filter_input(INPUT_POST, "c_name");
$dob = filter_input(INPUT_POST, "dob");
$gen = filter_input(INPUT_POST, "gen");
$sub = filter_input(INPUT_POST, "sub");
$type = filter_input(INPUT_POST, "type");
$pin = filter_input(INPUT_POST, "pin");


$conn = mysqli_connect("localhost", "Ronik", "RonikMG6952", "internship");

$que = mysqli_query($conn,
        "insert into registration (name,email,password,mobile_no,college,dob,gender,subject,type,pincode) values ( '$name' , '$email' , '$pwd' , '$m_no' , '$c_name' , '$dob' , '$gen' , '$sub' , '$type' , '$pin' )")
        or die("Error : " . mysqli_error($conn));

if($que){
    echo "<script>alert('Congratulation! Registration Details submitted Successfully.')</script>";
}        