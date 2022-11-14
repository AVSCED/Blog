<?php 
include '../Config/config.php';
session_start();

$action=$_POST["action"];

if($action == "adminName"){
    $user_ID = $_SESSION['data'][0]['ID'];
    $logged_In = "SELECT `Name` FROM `users` WHERE ID='$user_ID'";
    $logged_In_Person = mysqli_query($connection, $logged_In);
    if (mysqli_num_rows($logged_In_Person) == 1) {
        $logged_In_Name = mysqli_fetch_assoc($logged_In_Person);
        echo json_encode($logged_In_Name);
    }
}
if($action == "requests"){
    $request_Array=array();
    $request_Query="SELECT ID , Name , Role FROM `users` WHERE Request= '0'";
    $request_Query_Result= mysqli_query($connection , $request_Query);

    if ($request_Query_Result->num_rows > 0) {
        while ($request_List = $request_Query_Result->fetch_assoc()) {
            array_push($request_Array, $request_List);
        }
        echo json_encode($request_Array);
}
}
if($action=="approveRequest"){
    $userID_toBe_approved=$_POST["userID"];
    $userID_approval_query="UPDATE `users` SET `Request`= '1' WHERE `ID` = '$userID_toBe_approved'";
    $request_toBe_approved_result=mysqli_query($connection , $userID_approval_query);
    if(!$request_toBe_approved_result){
        echo "Couldn't Approve user request right Now !" ;
    }else{
        echo "Successfully updated user Request !";
    }
}
if($action == "declineRequest"){
    $userID=$_POST['userID'];
    $userID_rejection_query="DELETE FROM `users` WHERE `ID` = '$userID'";
    $request_toBe_decline_result=mysqli_query($connection , $userID_rejection_query);
    if(!$request_toBe_decline_result){
        echo "Couldn't modify user request right Now !" ;
    }else{
        echo "Successfully deleted user Request !";
    }
}
if($action=="allAuthorPosts"){
    $allblog_array=array();

$allPost="SELECT users.Name , posts.postID , posts.title ,posts.date , posts.post , posts.category , posts.likes FROM `posts` INNER JOIN `users` ON posts.authorID = users.ID";
$result = mysqli_query($connection, $allPost);
if ($result->num_rows > 0) {
    while ($prev_post = $result->fetch_assoc()) {
        array_push($allblog_array, $prev_post);
    }
    echo json_encode($allblog_array);
}
}
if($action=="deletePost"){
    $postID_toBe_deleted=$_POST["postId"];
    $deletePost_query="DELETE FROM `posts` WHERE `postID` = '$postID_toBe_deleted'";
    $delete_Post_Query_Result=mysqli_query($connection , $deletePost_query);
    if(!$delete_Post_Query_Result){
        echo "Couldn't Delete Post Right Now !";
    }else{
        echo "Post Deleted Successfully !";
    }
}
if($action == "allUserList"){
    $all_User_List_array=array();
    $all_data_query = "SELECT * FROM `users` WHERE `Role` != 'admin'";
    $query_Result= mysqli_query($connection , $all_data_query);

    if ($query_Result->num_rows > 0) {
        while ($requested_List = $query_Result->fetch_assoc()) {
            array_push($all_User_List_array, $requested_List);
        }
        echo json_encode($all_User_List_array);
}
}
if($action == "deleteUserAccount"){
    $userID=$_POST["userID"];
    $delete_Account_ID="DELETE FROM `users` WHERE `ID`='$userID'";
    $delete_Account_result=mysqli_query($connection , $delete_Account_ID);
    if(!$delete_Account_result){
        echo "Couldn't delete User Account Right Now , Try Again Later !";
    }
    else{
        echo "User Account Deleted Successfully"; 
    }
}
if($action=="deleteUserBlogs"){
    $userID=$_POST["userID"];
    $delete_User_Blogs_Query="DELETE FROM `posts` WHERE `authorID`='$userID'";
    $delete_User_blog_result=mysqli_query($connection , $delete_User_Blogs_Query );
    if(!$delete_User_blog_result){
        echo "Couldn't Delete Blogs Right now !";
    }else{
        echo "All blogs of this User Have been Deleted Successfully !";
    }
}
?>