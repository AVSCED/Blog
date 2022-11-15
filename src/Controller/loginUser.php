<?php
//Including connection file to execute query
include_once '../Config/config.php';
//To store the logged in person ID and data in the session and access it across different pages
session_start();
if (!isset($_SESSION['data'])) {
  $_SESSION['data'] = [];
}
//To check the logged in person credentials and see if details exist or not 
$user_email = $_POST['email'];
$user_password = $_POST['password'];

$signInAttempt = "SELECT `ID`, `Role` , `Request` FROM `users` WHERE Email = '$user_email' AND Pass ='$user_password' ";

$logged_In = mysqli_query($connection, $signInAttempt);
if (mysqli_num_rows($logged_In) == 1) {
  $logged_In_ID_Role = mysqli_fetch_assoc($logged_In);
  array_push($_SESSION['data'], $logged_In_ID_Role);
  echo json_encode($_SESSION['data']);
}
