<?php

$id = filter_input(INPUT_GET, "deleteid");
$con = mysqli_connect("localhost", "Ronik", "RonikMG6952", "internship");

//Delete Query
$dq = mysqli_query($con, "update registration set is_Deleted=1 where id = $id") or die("Error : " + mysqli_error($con));

if ($dq) {
    echo "<script>alert('Data Deleted Successfully');window.location='Display.php'</script>";
}