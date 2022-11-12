<?php 
include '../Config/config.php';
session_start();

$action =$_POST['action'];
if($action=="load"){
$user_ID=$_SESSION['data'][0]['ID'];
$logged_In="SELECT `Name` FROM `users` WHERE ID='$user_ID'";
$logged_In_Person=mysqli_query($connection,$logged_In);
if( mysqli_num_rows($logged_In_Person)==1){
    $logged_In_Name = mysqli_fetch_assoc($logged_In_Person);
echo json_encode($logged_In_Name) ;
}
}
if($action=="blog"){
$author_ID=$_SESSION['data'][0]['ID'];
$likes=0;
$post_Date=date("d/m/Y");
$post_Date=strval($post_Date);
$blog_Content=$_POST["blog_Content"];
$blog_Title=$_POST["blog_Title"];
$blog_Image=$_POST["blog_Image"];
$blog_Category=$_POST["blog_Category"];
$blogPost="INSERT INTO `posts` (`postID`, `authorID`, `title`, `post`, `date`, `likes`, `img`, `category`) VALUES (NULL, '$author_ID', '$blog_Title', '$blog_Content', '$post_Date', '$likes', '$blog_Image', '$blog_Category');"; 
$result = mysqli_query($connection, $blogPost);
if (!$result){
    echo "Couldn't Post Your Blog Right now";
}else {
    echo ("We've submitted your request to Post Your Blog ,Kindly wait for Admin's Response !") ;
}
}
if($action == "previous_Blogs"){
    $blog_Array=array();
$author_ID=$_SESSION['data'][0]['ID'];
$previous_Posts="SELECT * FROM `posts` WHERE authorID='$author_ID'";
$result = mysqli_query($connection, $previous_Posts);
// $rows=mysqli_num_rows($result);
if( $result->num_rows>0){
    // $prev_post = mysqli_fetch_assoc(mysqli_query($connection, $previous_Posts));
    while($prev_post=$result->fetch_assoc()){
    array_push($blog_Array, $prev_post);
    }
echo json_encode($blog_Array) ;
}
}
?>