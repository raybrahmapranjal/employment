<?php
session_start();

if (empty($_SESSION['this_user_id'])) {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: login.php');
    exit();
} else {
    include '../classes/Crud.php';
    $crud = new Crud();
    date_default_timezone_set("Asia/Kolkata");
    $reg_date = date("Y-m-d");
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
        // 'date_submitted' => $today,
        'time_submitted' => $time,
        'emp_ID' => $emp_id,
        'date_submitted' => $reg_date,
        ];

        $create = $crud->Create($data, "emp_application");

        if ($create) {
            $_SESSION['message'] = '<script>alert("Data Uploaded");</script>';
            echo '<script>window.location.assign("../../newreg.php");</script>';
        } else {
            $_SESSION['message'] = '<script>alert("Data not Added!");</script>';
            echo '<script>window.location.assign("../../employment_apply.php");</script>';
        }
    } else {
        $target_dir = "../images/pdfNimage/";
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
                // 'date_submitted' => $today,
                'time_submitted' => $time,
                'emp_ID' => $emp_id,
                'date_submitted' => $reg_date,
            ];

            $create = $crud->Create($data, "emp_application");

            if ($create) {
                require_once('../fpdf/fpdf.php');

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $fullname = $_POST['can_name'];
//     $gender = $_POST['gender'];
//     $date_of_birth = $_POST['DOB'];
//     $highest_qualification = $_POST['qualification'];
//     $passing_year = $_POST['pass_year'];
//     $caste = $_POST['caste'];
//     $today = $_POST['date_submitted'];
//     $emp_ID = $_POST['emp_id'];

    // Create new PDF document
    $pdf = new FPDF();
    $pdf->AddPage();


    // Set document information
    $pdf->SetFont("Arial", "", 12);
$pdf->Cell(0, 10, "GOVERNMENT OF ASSAM", 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(0, 5, "SKILL, EMPLOYMENT & ENTREPRENEURSHIP DEPARTMENT", 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(0, 5, "DISTRICT EMPLOYMENT EXCHANGE", 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(103, 5, "CATEGORY:", 0, 0, 'R');
$pdf->Cell(0, 5, $caste, 0, 1, 'L');
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(0, 5, "IDENTITY CARD", 0, 0, 'C');
$pdf->Ln();

// Rest of your code...

// page border
     $pdf->Rect(10, 10, $pdf->GetPageWidth() - 20, $pdf->GetPageHeight() - 20);
    
   

    // Output table data
    $pdf->Cell(50, 10, '1. Name:', 1);
    $pdf->Cell(0, 10, $can_name, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '2. Gender:', 1);
    $pdf->Cell(0, 10, $gender, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '3. Date of birth:', 1);
    $pdf->Cell(0, 10, $DOB, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '4. Highest Qualification:', 1);
    $pdf->Cell(0, 10, $qualification, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '5. Passing Year:', 1);
    $pdf->Cell(0, 10, $pass_year, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '6. caste:', 1);
    $pdf->Cell(0, 10, $caste, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '7. Registration Date:', 1);
    $pdf->Cell(0, 10, $reg_date, 1);
    $pdf->Ln();

    $pdf->Cell(50, 10, '8. Registration Number:', 1);
    $pdf->Cell(0, 10, $emp_id, 1);
    $pdf->Ln();



    // Output the PDF as a download
    $pdf->Output();
}
             else {
                $_SESSION['message'] = '<script>alert("Data not Added!");</script>';
                echo '<script>window.location.assign("../../employment_apply.php");</script>';
            }
        } else {
            $_SESSION['message'] = '<script>alert("Error uploading files!");</script>';
            echo '<script>window.location.assign("../../employment_apply.php");</script>';
        }
    }
}
?>
