<?php 
include '../Config/config.php';
$allblog_array=array();

$allPost="SELECT users.Name , posts.title ,posts.date , posts.post , posts.category , posts.likes FROM `posts` INNER JOIN `users` ON posts.authorID = users.ID";
$result = mysqli_query($connection, $allPost);
if ($result->num_rows > 0) {
    while ($prev_post = $result->fetch_assoc()) {
        array_push($allblog_array, $prev_post);
    }
    echo json_encode($allblog_array);
}
?>