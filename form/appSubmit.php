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
    // $userType = $_SESSION['userType'];
    $userID = $_SESSION['this_user_id'];
}

if (isset($_POST['submit'])) {
    $DOB = date("Y-m-d");

    extract($_POST);
     $eng=$_POST['english'];
     $eng1=implode(",",$eng);
     $hindi=$_POST['hindi'];
     $hindi1=implode(",",$hindi);
     $assamese=$_POST['assamese'];
     $assamese1=implode(",",$assamese);
     $bodo=$_POST['bodo'];
     $bodo1=implode(",",$bodo);


    if (empty($_FILES["pdf1"]["name"]) || empty($_FILES["pdf2"]["name"]) || empty($_FILES["pdf3"]["name"]) || empty($_FILES["pdf4"]["name"])) {
        // At least one of the PDF files is empty
        // Handle the error here

        $data = [
            'fullname' => $can_name,
            'gender' => $gender,
            'email' => $can_email,
            'phone' => $can_phone,
            'city_permanent' => $city,
            'pin_permanent' => $pin,
            'current_job' => $job_name,
            'organisation_name' => $company_name,
            'working_years' => $years,
            'working_months' => $months,
            'english' =>$eng1,
            'hindi' => $hindi1,
            'assamese' => $assamese1,
            'bodo' => $bodo1,
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
        $target_dir = "../images/pdf/";
        $uploadOk = 1;

        for ($i = 1; $i <= 4; $i++) {
            $target_file = $target_dir . md5(time()) . basename($_FILES["pdf{$i}"]["name"]);
            $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = filesize($_FILES["pdf{$i}"]["tmp_name"]);

            if ($check === false) {
                $uploadOk = 0;
                break;
            }

            if ($pdfFileType != "pdf") {
                $uploadOk = 0;
                break;
            }

            if (move_uploaded_file($_FILES["pdf{$i}"]["tmp_name"], $target_file)) {
                // File uploaded successfully
                $data["pdf{$i}"] = $target_file;
            } else {
                // Error uploading file
                $uploadOk = 0;
                break;
            }
        }

        if ($uploadOk) {
            $data = [
                'educational_docs' => $data["pdf1"],
                'caste_certificate' => $data["pdf2"],
                'classX_admit' => $data["pdf3"],
                'diploma' => $data["pdf4"],
                'fullname' => $can_name,
                'gender' => $gender,
                'email' => $can_email,
                'phone' => $can_phone,
                'city_permanent' => $city,
                'pin_permanent' => $pin,
                'current_job' => $job_name,
                'organisation_name' => $company_name,
                'working_years' => $years,
                'working_months' => $months,
                'english' =>$eng1,
                'hindi' => $hindi1,
                'assamese' => $assamese1,
                'bodo' => $bodo1,
                 
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
            $_SESSION['message'] = '<script>alert("Error uploading PDF files!");</script>';
            echo '<script>window.location.assign("../employment_apply.php");</script>';
        }
    }
}
?>