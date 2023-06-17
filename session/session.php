<?php
session_start();

include '../admin/classes/Crud.php';

ini_set('display_errors', 1);

include 'deviceInfo.php';

$crud = new Crud();



$appNameLower = strtolower($appName);



date_default_timezone_set('Asia/Kolkata');
	$connection = new DbConfig();
	$con = $connection -> connect();
	$email=$_POST['email'];
	$password=$_POST['password'];

	$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string

	$hash = hash('sha512', $password . $salt);

	$stmt=$con->prepare("SELECT * FROM `emp_register` WHERE (`email`='$email' || `Emp_id` = '$email') AND `password`='$hash'");

	$stmt->execute();
	$row = $stmt -> fetch(PDO:: FETCH_ASSOC);

	if($stmt->rowCount()==1)
	{	
		if ($row['status'] == 0) {
			header("location: ../account-not-approved");
		} else if ($row['status'] == 2) {

			header("location: ../banned");

		} else {
			$_SESSION[$appNameLower . '_email'] = $email;
			$_SESSION['this_emp_id'] = $row['Emp_id'];
			$_SESSION['this_emp_name'] = $row['fullname'];
			// $_SESSION['this_user_username'] = $row['fullname'];
			$_SESSION['_mobile'] = $row['mobile'];
			$_SESSION['_state'] = $row['state'];
			
			// $_SESSION['userType'] = $row['user_type'];

			// $user_id = $row['Emp_id'];

			$os = getOs();

			$browser = getBrowser();

			$ip = $_SERVER['REMOTE_ADDR'];

			$login_date = date('Y-m-d');

			$login_time = date('H:i:s');

			$sql2 = $con -> prepare("INSERT INTO `applicant_login_details` (`Employment_ID`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES ('$user_id', '$os', '$browser', '$ip', '$login_date', '$login_time')");

			$sql2 -> execute();

			$_SESSION['errorLogin'] = "";

			header("location: ../newreg.php");
		}
	}
	else
	{
		$_SESSION['errorLogin'] = "Username or Password is incorrect. <br>Please try again.";
		header("location: ../employment_apply.php");

	}

?>
