<?php

require "Comments.php";
require "Users.php";
require "Posts.php";


// Look for a valid action
if(isset($_GET['method'])) {
    switch($_GET['method']) {
        case "commentList":
            $comments = new Comments();
            $data = $comments->getComments();
            break;
        case "comment":
            $comment_id = (int)$_GET['comment_id'];
            $comments = new Comments();
            $data = $comments->getCommentById($comment_id);
            break;

        case "userList":
            $users = new Users();
            $data = $users->getUsers();
            break;
        case "user":
            $user_id = (int)$_GET['user_id'];
            $users = new Users();
            $data = $users->getUserById($user_id);
            break;
        case "postList":
            $posts = new Posts();
            $data = $posts->getPosts();
            break;
        case "post":
            $post_id = (int)$_GET['post_id'];
            $posts = new Posts();
            $data = $posts->getPostById($post_id);
            break;
        default:
            http_response_code(400);
            $data = array("error" => "comment block");
            break;
    }
} else {
    http_response_code(400);
    $data = array("error" => "not finding it");
}

// let's send the data back
header("Content-Type: application/json");
echo json_encode($data);