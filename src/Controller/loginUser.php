<?php 
include_once '../Config/config.php';
session_start();
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
  }
$user_email=$_POST['email'];
$user_password=$_POST['password'];

$signInAttempt="SELECT `ID`, `Role` , `Request` FROM `users` WHERE Email = '$user_email' AND Pass ='$user_password' ";

$logged_In= mysqli_query($connection , $signInAttempt);
if( mysqli_num_rows($logged_In)==1){
    $logged_In_ID_Role = mysqli_fetch_assoc($logged_In);
    array_push($_SESSION['data'],$logged_In_ID_Role);
    echo json_encode($_SESSION['data'])  ;
}
?>