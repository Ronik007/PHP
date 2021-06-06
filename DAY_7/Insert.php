<?php

$conn = mysqli_connect("localhost", "Ronik", "RonikMG6952", "internship");

$name = filter_input(INPUT_POST, "name");
$gen = filter_input(INPUT_POST, "gender");
$m_no = filter_input(INPUT_POST, "m_no");

$que = mysqli_query($conn, 
        "insert into user (user_name,user_gender,user_mobile) values ( '$name', '$gen' ,'$m_no' )")
        or die("Error : " . mysqli_error($conn));
       
if($que)
{
    echo "<script>alert('Data Successfully Inserted')</script>";
}
