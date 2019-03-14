<?php
    session_start();
    
    $allowed = ['/dijak/login.php','/dijak/login_check.php',
                '/dijak/registration.php', '/dijak/user_insert.php',
                '/dijak/index.php'];
    
    
    if (!isset($_SESSION['user_id']) && 
            !in_array($_SERVER['REQUEST_URI'], $allowed)) {
        header("Location: login.php");
    }


?>