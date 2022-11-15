<?php
//Including connection file for query execution
include '../Config/config.php';
//To access the data stored in the session
session_start();
//To identify the exact ajax call for the clicked functionality
$action = $_POST['action'];
//To retrieve the user's name who is logged in and display his name
if ($action == "load") {
    $user_ID = $_SESSION['data'][0]['ID'];
    $logged_In = "SELECT `Name` FROM `users` WHERE ID='$user_ID'";
    $logged_In_Person = mysqli_query($connection, $logged_In);
    if (mysqli_num_rows($logged_In_Person) == 1) {
        $logged_In_Name = mysqli_fetch_assoc($logged_In_Person);
        echo json_encode($logged_In_Name);
    }
}
//To create a new blog from the author
if ($action == "blog") {
    $author_ID = $_SESSION['data'][0]['ID'];
    $likes = 0;
    $post_Date = date("d/m/Y");
    $post_Date = strval($post_Date);
    $blog_Content = $_POST["blog_Content"];
    $blog_Title = $_POST["blog_Title"];
    $blog_Category = $_POST["blog_Category"];
    $blogPost = "INSERT INTO `posts` (`postID`, `authorID`, `title`, `post`, `date`, `likes`, `category`) VALUES (NULL, '$author_ID', '$blog_Title', '$blog_Content', '$post_Date', '$likes','$blog_Category');";
    $result = mysqli_query($connection, $blogPost);
    if (!$result) {
        echo "Couldn't Post Your Blog Right now";
    } else {
        echo ("We've submitted your request to Post Your Blog ,Kindly wait for Admin's Response !");
    }
}
// To View all previous blogs written by the user
if ($action == "previous_Blogs") {
    $blog_Array = array();
    $author_ID = $_SESSION['data'][0]['ID'];
    $previous_Posts = "SELECT * FROM `posts` WHERE authorID='$author_ID'";
    $result = mysqli_query($connection, $previous_Posts);
    if ($result->num_rows > 0) {
        while ($prev_post = $result->fetch_assoc()) {
            array_push($blog_Array, $prev_post);
        }
        echo json_encode($blog_Array);
    }
}
//To retrieve a previously written blog written by the author for editing
if ($action == "editPost") {
    $postId = $_POST["postId"];
    $blogContent = "SELECT `postID`, `authorID`, `title`, `post`, `date`, `likes`, `category` FROM `posts` WHERE `postID` = '$postId'";
    $contentToBeEdited = mysqli_query($connection, $blogContent);
    if (mysqli_num_rows($contentToBeEdited) == 1) {
        $editContent = mysqli_fetch_assoc($contentToBeEdited);
        echo json_encode($editContent);
    }
}
//To post the edited blog
if ($action == "edited_blog") {
    $post_Date = date("d/m/Y");
    $post_Date = strval($post_Date);
    $edit_blog_Title = $_POST["edit_blog_Title"];
    $edit_blog_Content = $_POST["edit_blog_Content"];
    $edit_blog_Category = $_POST["edit_blog_Category"];
    $edit_blog_id = $_POST["edit_blog_id"];
    $edit_blog_query = "UPDATE `posts` SET `title`='$edit_blog_Title',`post`='$edit_blog_Content',`date`='$post_Date',`category`='$edit_blog_Category' WHERE `postID`= '$edit_blog_id'";
    $result = mysqli_query($connection, $edit_blog_query);
    if (!$result) {
        echo "Couldn't Update Your Blog Right now";
    } else {
        echo ("We've submitted your request to Update Your Blog ,Kindly wait for Admin's Response !");
    }
}
//To delete a previously posted blog by the author
if($action == "deletBlog"){
    $delete_Post_Id=$_POST["postId"];
    $delete_Post_query="DELETE FROM `posts` WHERE postID='$delete_Post_Id'";
    $result=mysqli_query($connection,$delete_Post_query);
    if(! $result){
        echo "Couldn't Delete your Blog !";
    } else{
        echo "Deleted Your Blog Successfully" ;
    }
}
