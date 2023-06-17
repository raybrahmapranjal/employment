<?php
session_start();

if (empty($_SESSION['this_user_id'])) {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: login.php');
    exit();
} else {
    include '../admin/classes/Crud.php';
    $crud = new Crud();
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
    $time = date("H:i:s");
    $userType = $_SESSION['userType'];
    $userID = $_SESSION['this_user_id'];
}

if (isset($_POST['submit'])) {
    $DOB = date("Y-m-d");

    extract($_POST);
    $eng = $_POST['english'];
    $eng1 = implode(",", $eng);
    $hindi = $_POST['hindi'];
    $hindi1 = implode(",", $hindi);
    $assamese = $_POST['assamese'];
    $assamese1 = implode(",", $assamese);
    $bodo = $_POST['bodo'];
    $bodo1 = implode(",", $bodo);

    if (empty($_FILES["image"]["name"]) || empty($_FILES["pdf1"]["name"])  || empty($_FILES["pdf2"]["name"]) || empty($_FILES["pdf3"]["name"]) || empty($_FILES["pdf4"]["name"])) {
        // At least one of the files is empty
        // Handle the error here

        $data = [
        'fullname' => $can_name,
        'father_name' => $father_name,
        'mother_name' => $mother_name,
        'spouse_name' => $spouse_name,
        'gender' => $gender,
        'marital_status' => $marital,
        'caste' => $caste,
        'adhar_number' => $adhar,
        'email' => $can_email,
        'phone' => $can_phone,
        'identification' => $identity,
        'city_permanent' => $city,
        'address1_permanent' => $add1,
        'address2_permanent' => $add2,
        'dist_permanent' => $dist,
        'state_permanent' => $state,
        'pin_permanent' => $pin,
        'city_present' => $present_city,
        'address1_present' => $present_add1,
        'address2_present' => $present_add2,
        'dist_present' => $present_dist,
        'state_present' => $present_state,
        'pin_present' => $present_pin,
        'current_job' => $job_name,
        'organisation_name' => $company_name,
        'working_years' => $years,
        'working_months' => $months,
        'role' => $role,
        'department' => $department,
        'skill' => $skill,
        'english' =>$eng1,
        'hindi' => $hindi1,
        'assamese' => $assamese1,
        'bodo' => $bodo1,
        'highest_qualification' => $qualification,
        'course' => $course,
        'specialization' => $special,
        'institution' => $board,
        'passing_year' => $pass_year,
        'course_type' => $course_type,
        'date_of_birth' => $DOB,
        'date_submitted' => $today,
        'time_submitted' => $time,
        'emp_ID' => $emp_id,
        ];

        $create = $crud->Create($data, "emp_application");

        if ($create) {
            $_SESSION['message'] = '<script>alert("Data Uploaded");</script>';
            echo '<script>window.location.assign("../newreg.php");</script>';
        } else {
            $_SESSION['message'] = '<script>alert("Data not Added!");</script>';
            echo '<script>window.location.assign("../employment_apply.php");</script>';
        }
    } else {
        $target_dir = "../admin/images/pdfNimage/";
        $uploadOk = 1;

        // Upload the image file
        $target_file_image = $target_dir . md5(time()) . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file_image, PATHINFO_EXTENSION));
        $check_image = getimagesize($_FILES["image"]["tmp_name"]);

        if ($check_image === false) {
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            $uploadOk = 0;
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_image)) {
            // Image file uploaded successfully
            $data["image"] = $target_file_image;
        } else {
            // Error uploading image file
            $uploadOk = 0;
        }

        // Upload the PDF files
        for ($i = 1; $i <= 4; $i++) {
            $target_file_pdf = $target_dir . md5(time()) . basename($_FILES["pdf{$i}"]["name"]);
            $pdfFileType = strtolower(pathinfo($target_file_pdf, PATHINFO_EXTENSION));
            $check_pdf = filesize($_FILES["pdf{$i}"]["tmp_name"]);

            if ($check_pdf === false) {
                $uploadOk = 0;
                break;
            }

            if ($pdfFileType != "pdf") {
                $uploadOk = 0;
                break;
            }

            if (move_uploaded_file($_FILES["pdf{$i}"]["tmp_name"], $target_file_pdf)) {
                // PDF file uploaded successfully
                $data["pdf{$i}"] = $target_file_pdf;
            } else {
                // Error uploading PDF file
                $uploadOk = 0;
                break;
            }
        }

        if ($uploadOk) {
            $data = [
                'photo' => $data["image"],
                'educational_docs' => $data["pdf1"],
                'caste_certificate' => $data["pdf2"],
                'classX_admit' => $data["pdf3"],
                'diploma' => $data["pdf4"],
                'fullname' => $can_name,
                'father_name' => $father_name,
                'mother_name' => $mother_name,
                'spouse_name' => $spouse_name,
                'gender' => $gender,
                'marital_status' => $marital,
                'caste' => $caste,
                'adhar_number' => $adhar,
                'email' => $can_email,
                'phone' => $can_phone,
                'identification' => $identity,
                'city_permanent' => $city,
                'address1_permanent' => $add1,
                'address2_permanent' => $add2,
                'dist_permanent' => $dist,
                'state_permanent' => $state,
                'pin_permanent' => $pin,
                'city_present' => $present_city,
                'address1_present' => $present_add1,
                'address2_present' => $present_add2,
                'dist_present' => $present_dist,
                'state_present' => $present_state,
                'pin_present' => $present_pin,
                'current_job' => $job_name,
                'organisation_name' => $company_name,
                'working_years' => $years,
                'working_months' => $months,
                'role' => $role,
                'department' => $department,
                'skill' => $skill,
                'english' =>$eng1,
                'hindi' => $hindi1,
                'assamese' => $assamese1,
                'bodo' => $bodo1,
                'highest_qualification' => $qualification,
                'course' => $course,
                'specialization' => $special,
                'institution' => $board,
                'passing_year' => $pass_year,
                'course_type' => $course_type,
                'date_of_birth' => $DOB,
                'date_submitted' => $today,
                'time_submitted' => $time,
                'emp_ID' => $emp_id,
            ];

            $create = $crud->Create($data, "emp_application");

            if ($create) {
                $_SESSION['message'] = '<script>alert("Post Uploaded with PDF files");</script>';
                echo '<script>window.location.assign("../newreg.php");</script>';
            } else {
                $_SESSION['message'] = '<script>alert("Data not Added!");</script>';
                echo '<script>window.location.assign("../employment_apply.php");</script>';
            }
        } else {
            $_SESSION['message'] = '<script>alert("Error uploading files!");</script>';
            echo '<script>window.location.assign("../employment_apply.php");</script>';
        }
    }
}
?>
