<?php
session_start();

if (isset($_POST['user_destroy'])) {
	   
	unset($_SESSION[$appNameLower . '_email']);
	unset($_SESSION['this_emp_id']);
	unset($_SESSION['this_emp_name']);
	// unset($_SESSION['this_user_username']);
	unset($_SESSION['_mobile']);
	unset($_SESSION['_state']);
    // session_destroy();
    header('location: ../employment_apply.php');
    exit();
}
?>