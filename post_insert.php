<?php
    include_once './session.php';
    include_once './database.php';
  
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];
    
    
    if (!empty($title) && !empty($content)) {
        $query = "INSERT INTO posts (title, content, user_id) "
                . "VALUES ('$title', '$content', $user_id)";
        mysqli_query($link, $query);
        header("Location: posts.php");
    }
    else {
        header("Location: post_add.php");
    }
    
?>