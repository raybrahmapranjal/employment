<?php
session_start();

if (isset($_POST['admin_destroy'])) {
    unset($_SESSION[$appNameLower . '_email']);
    unset($_SESSION['this_user_id']);
    unset($_SESSION['this_user_name']);
    unset($_SESSION['this_user_username']);
    unset($_SESSION['userType']);
    
    // session_destroy();
    header('location: ../login.php');
    exit();
}
?>
