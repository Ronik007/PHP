<?php
$fname = filter_input(INPUT_GET, 'First_Name');
$lname = filter_input(INPUT_GET, 'Last_Name');
$email = filter_input(INPUT_GET, 'email');


echo "</br><h2> Hi, $fname $lname </h2>";
echo"</br> <h4>For further process please Follow link of verification on <a href=https://accounts.google.com/servicelogin>$email</a> for Successfully Registration. </h4>"

?>