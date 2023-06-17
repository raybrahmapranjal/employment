<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("emp_photo","`id`='$dataId'");

if ($readEnquiry) {

	$data['head']= $readEnquiry[0]['head'];
	$data['description']= $readEnquiry[0]['description'];
	// $data['link']= $readEnquiry[0]['link'];
	$data['category']= $readEnquiry[0]['category'];
	$data['image']= $readEnquiry[0]['image'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>