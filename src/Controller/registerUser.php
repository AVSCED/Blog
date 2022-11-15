<?php
//Including connection file to execute query
include '../Config/config.php';
//To let a new user select his role and submit his request for registration to the Admin for approval
$new_User_Name = $_POST["new_User_Name"];
$new_User_Email = $_POST["new_User_Email"];
$new_User_Pass = $_POST["new_User_Pass"];
$role = $_POST["role"];
$request_Flag = 0;
//To Prevent accounts with duplicate email id's
$check_duplicate = "SELECT * FROM `users` WHERE Email = '$new_User_Email'";
$check = mysqli_query($connection, $check_duplicate);
if (mysqli_num_rows($check) > 0) {
    echo 0;
} else {
    $registration = "INSERT INTO `users`( `Name`, `Email`, `Pass`, `Role`, `Request`) VALUES ('" . $new_User_Name . "','" . $new_User_Email . "','" . $new_User_Pass . "','" . $role . "','" . $request_Flag . "')";
    $result = mysqli_query($connection, $registration);
    if (!$result) {
        echo "Error";
    } else {
        echo 1;
    }
}
