<?php

$id = filter_input(INPUT_GET, "deleteid");

$con = mysqli_connect("localhost", "Ronik", "RonikMG6952", "internship");

//Soft Delete Query
$dq = mysqli_query($con, "update user set is_Deleted=1 where user_id=$id") or die("Error : " + mysqli_error($con));

if ($dq) {
    echo "<script>alert('Data Deleted Successfully');window.location='Display.php'</script>";
}