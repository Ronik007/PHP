<?php

$host = "localhost";
$user = "Ronik";
$pwd = "RonikMG6952";
$db = "internship";

$connectivity = mysqli_connect($host, $user, $pwd, $db);

$q = mysqli_query($connectivity,
        "insert into user(user_name,user_gender,user_mobile) values ('Harsh','Male','7984656862')")
        or die("Error".mysqli_error($connectivity));

if($q)
{
    echo "<script>alert('Data Successfully Inserted');</script>";
}