<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("emp_application","`application_ID`='$dataId'");

if ($readEnquiry) {

	$data['can_name']= $readEnquiry[0]['fullname'];
	$data['father_name']= $readEnquiry[0]['father_name'];
	$data['mother_name']= $readEnquiry[0]['mother_name'];
	$data['spouse_name']= $readEnquiry[0]['spouse_name'];
	$data['gender']= $readEnquiry[0]['gender'];
	$data['marital']= $readEnquiry[0]['marital_status'];
	$data['caste']= $readEnquiry[0]['caste'];
	$data['adhar']= $readEnquiry[0]['adhar_number'];
	$data['DOB']= $readEnquiry[0]['date_of_birth'];
	$data['can_email']= $readEnquiry[0]['email'];
	$data['can_phone']= $readEnquiry[0]['phone'];
	$data['identity']= $readEnquiry[0]['identification'];
	$data['city']= $readEnquiry[0]['city_permanent'];
	$data['add1']= $readEnquiry[0]['address1_permanent'];
	$data['add2']= $readEnquiry[0]['address2_permanent'];
	$data['dist']= $readEnquiry[0]['dist_permanent'];
	$data['state']= $readEnquiry[0]['state_permanent'];
	$data['pin']= $readEnquiry[0]['pin_permanent'];
	$data['present_city']= $readEnquiry[0]['city_present'];
	$data['present_add1']= $readEnquiry[0]['address1_present'];
	$data['present_add2']= $readEnquiry[0]['address2_present'];
	$data['present_dist']= $readEnquiry[0]['dist_present'];
	$data['present_state']= $readEnquiry[0]['state_present'];
	$data['present_pin']= $readEnquiry[0]['pin_present'];
	$data['job_name']= $readEnquiry[0]['current_job'];
	$data['company_name']= $readEnquiry[0]['organisation_name'];
	$data['years']= $readEnquiry[0]['working_years'];
	$data['months']= $readEnquiry[0]['working_months'];
	$data['role']= $readEnquiry[0]['role'];
	$data['department']= $readEnquiry[0]['department'];
	$data['skill']= $readEnquiry[0]['skill'];
	
	$data['english'] = explode(",", $readEnquiry[0]['english']);
    $data['hindi'] = explode(",", $readEnquiry[0]['hindi']);
    $data['assamese'] = explode(",", $readEnquiry[0]['assamese']);
    $data['bodo'] = explode(",", $readEnquiry[0]['bodo']);
	
	$data['image']= $readEnquiry[0]['photo'];
	$data['qualification']= $readEnquiry[0]['highest_qualification'];
	$data['course']= $readEnquiry[0]['course'];
	$data['special']= $readEnquiry[0]['specialization'];
	$data['board']= $readEnquiry[0]['institution'];
	$data['pass_year']= $readEnquiry[0]['passing_year'];
	$data['course_type']= $readEnquiry[0]['course_type'];
	$data['pdf1']= $readEnquiry[0]['educational_docs'];
	$data['pdf2']= $readEnquiry[0]['caste_certificate'];
	$data['pdf3']= $readEnquiry[0]['classX_admit'];
	$data['pdf4']= $readEnquiry[0]['diploma'];
	$data['emp_ID']= $readEnquiry[0]['emp_ID'];
	$data['reg_date']= $readEnquiry[0]['date_submitted'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>