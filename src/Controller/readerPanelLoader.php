<?php 
include '../Config/config.php';
session_start();
$action=$_POST["action"];
if($action == "laodPage"){
$allblog_array=array();

$allPost="SELECT users.Name , posts.title , posts.postID ,posts.date , posts.post , posts.category , posts.likes FROM `posts` INNER JOIN `users` ON posts.authorID = users.ID";
$result = mysqli_query($connection, $allPost);
if ($result->num_rows > 0) {
    while ($prev_post = $result->fetch_assoc()) {
        array_push($allblog_array, $prev_post);
    }
    echo json_encode($allblog_array);
}
}
if($action == "likePost"){
    $postId=$_POST["postId"];
    $likes=$_POST["likes"] + 1;
    $update_Likes_Query="UPDATE `posts` SET `likes`= '$likes' WHERE `postID`='$postId'";
    $update_Likes_Query_Result=mysqli_query($connection , $update_Likes_Query);
    if(!$update_Likes_Query_Result){
        echo"Couldn't Like";
    }else {
        echo "Done";
    }

}