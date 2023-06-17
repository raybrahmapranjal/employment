<?php include("include/header.php"); ?>
 <!-- Data Tables -->
     <!-- <link rel="stylesheet" href="../assets/datatable/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/datatable/css/datatables.min.css">
    <!-- <link rel="stylesheet" href="../assets/datatable/css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- datatable ends -->

  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
   <?php include("include/nav.php"); ?>


<?php include("include/sidebar.php");?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Tables</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Tables
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Basic Tables</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
                <?php 
                  if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                  }
                ?>
			<div class="card-content collapse show">
				<div class="card-body">
					
					<div class="table-responsive">
						<table id="example" class="display nowrap"style="width:100%">
                 
        					<thead>
                                <tr>
                                	  <th>ApplicationId</th>
                                    <th>Image</th>
                                    <th>Candidate Name</th>
                                    <th>Father Name</th>
                                    <th>Mother Name</th>
                                    <th>Spouse Name</th>
                                    <th>Gender</th>
                                    <th>Marital Status</th>
                                    <th>Caste</th>
                                    <th>Adhar number</th>
                                    <th>Date of Birth</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Identification</th>
                                    <th>Permanent City</th>
                                    <th>Permanent Address 1</th>
                                    <th>Permanent Address 2</th>
                                    <th>Permanent District</th>
                                    <th>Permanent State</th>
                                    <th>Permanent Pin</th>
                                    <th>Present City</th>
                                    <th>Present Address 1</th>
                                    <th>Present Address 2</th>
                                    <th>Present District</th>
                                    <th>Present State</th>
                                    <th>Present Pin</th>
                                    <th>Current job</th>
                                    <th>Organisation name</th>
                                    <th>Working years</th>
                                    <th>Working months</th>
                                    <th>Role</th>
                                    <th>Department</th>
                                    <th>Skill</th>
                                    <th>English</th>
                                    <th>Hindi</th>
                                    <th>Assamese</th>
                                    <th>Bodo</th>
                                    <th>Highest Qualification</th>
                                    <th>Course</th>
                                    <th>Specialization</th>
                                    <th>Institution</th>
                                    <th>Passing Year</th>
                                    <th>Course type</th>
                                    <th>Educational Documents</th>
                                    <th>Caste Certificate</th>
                                    <th>Class 10th admit </th>
                                    <th>Diploma</th>
                                    <th>Date of Submission</th>
                                    <th>Time of Submission</th>
                                    <th>status</th>
                                    <th>Employment Id</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
					        <tbody>
                         <?php 

                        if ($read2) {
                          $n=0;

                          foreach ($read2 as $app)
                      { 
                            

                      ?>
					            <tr>
					                <td><?php echo $app['application_ID'] ;?></td>
                          <td><img width="80px" src="admin/<?php echo $app['photo'] ;?>"></td>
                          <td><?php echo $app['fullname'] ;?></td>
                          <td><?php echo $app['father_name'] ;?></td>
                          <td><?php echo $app['mother_name'] ;?></td>
                          <td><?php echo $app['spouse_name'] ;?></td>
                          <td><?php echo $app['gender'] ;?></td>
                          <td><?php echo $app['marital_status'] ;?></td>
                          <td><?php echo $app['caste'] ;?></td>
                          <td><?php echo $app['adhar_number'] ;?></td>
                          <td><?php echo $app['date_of_birth'] ;?></td>
                          <td><?php echo $app['email'] ;?></td>
                          <td><?php echo $app['phone'] ;?></td>
                          <td><?php echo $app['identification'] ;?></td>
                          <td><?php echo $app['city_permanent'] ;?></td>
                          <td><?php echo $app['address1_permanent'] ;?></td>
                          <td><?php echo $app['address2_permanent'] ;?></td>
                          <td><?php echo $app['dist_permanent'] ;?></td>
                          <td><?php echo $app['state_permanent'] ;?></td>
                          <td><?php echo $app['pin_permanent'] ;?></td>
                          <td><?php echo $app['city_present'] ;?></td>
                          <td><?php echo $app['address1_present'] ;?></td>
                          <td><?php echo $app['address2_present'] ;?></td>
                          <td><?php echo $app['dist_present'] ;?></td>
                          <td><?php echo $app['state_present'] ;?></td>
                          <td><?php echo $app['pin_present'] ;?></td>
                          <td><?php echo $app['current_job'] ;?></td>
                          <td><?php echo $app['organisation_name'] ;?></td>
                          <td><?php echo $app['working_years'] ;?></td>
                          <td><?php echo $app['working_months'] ;?></td>
                          <td><?php echo $app['role'] ;?></td>
                          <td><?php echo $app['department'] ;?></td>
                          <td><?php echo $app['skill'] ;?></td>
                          <td><?php echo $app['english'] ;?></td>
                          <td><?php echo $app['hindi'] ;?></td>
                          <td><?php echo $app['assamese'] ;?></td>
                          <td><?php echo $app['bodo'] ;?></td>
                          <td><?php echo $app['highest_qualification'] ;?></td>
                          <td><?php echo $app['course'] ;?></td>
                          <td><?php echo $app['specialization'] ;?></td>
                          <td><?php echo $app['institution'] ;?></td>
                          <td><?php echo $app['passing_year'] ;?></td>
                          <td><?php echo $app['course_type'] ;?></td>
                          
                          <td><a href="images/<?php echo $app['educational_docs'] ;?>"target="_blank"><i class="fa fa-file-pdf-o" style="color:red"> </i> view</a></td>
                          <td><a href="images/<?php echo $app['caste_certificate'] ;?>"target="_blank"><i class="fa fa-file-pdf-o" style="color:red"> </i> view</a></td>
                          <td><a href="images/<?php echo $app['classX_admit'] ;?>"target="_blank"><i class="fa fa-file-pdf-o" style="color:red"> </i> view</a></td>
                          <td><a href="images/<?php echo $app['diploma'] ;?>"target="_blank"><i class="fa fa-file-pdf-o" style="color:red"> </i> view</a></td>
                          
                          
                          <td><?php echo $app['date_submitted'] ;?></td>
                          <td><?php echo $app['time_submitted'] ;?></td>
                          <td><?php echo $app['status'] ;?></td>
                          <td><?php echo $app['emp_ID'] ;?></td>
                          <td>  <div class="form-group">
                            <!-- Simple Icon Button -->
                            <button type="button" class="appID btn btn-danger"data-id="<?php echo $app['application_ID'];?>" data-toggle="modal" data-target=".bd-example-modal-lg">edit/delete</button>
                            <!-- <button type="button" class="btn btn-icon btn-warning  mr-1" data-toggle="modal" data-target="#exampleModal">edit</button> -->
                            
                           
                        </div></td>
					            </tr>
                      <?php }}?>
					        </tbody>
					        <tfoot>
            					        	    <th>ApplicationId</th>
                                    <th>Image</th>
                                    <th>Candidate Name</th>
                                    <th>Father Name</th>
                                    <th>Mother Name</th>
                                    <th>Spouse Name</th>
                                    <th>Gender</th>
                                    <th>Marital Status</th>
                                    <th>Caste</th>
                                    <th>Adhar number</th>
                                    <th>Date of Birth</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Identification</th>
                                    <th>Permanent City</th>
                                    <th>Permanent Address 1</th>
                                    <th>Permanent Address 2</th>
                                    <th>Permanent District</th>
                                    <th>Permanent State</th>
                                    <th>Permanent Pin</th>
                                    <th>Present City</th>
                                    <th>Present Address 1</th>
                                    <th>Present Address 2</th>
                                    <th>Present District</th>
                                    <th>Present State</th>
                                    <th>Present Pin</th>
                                    <th>Current job</th>
                                    <th>Organisation name</th>
                                    <th>Working years</th>
                                    <th>Working months</th>
                                    <th>Role</th>
                                    <th>Department</th>
                                    <th>Skill</th>
                                    <th>English</th>
                                    <th>Hindi</th>
                                    <th>Assamese</th>
                                    <th>Bodo</th>
                                    <th>Highest Qualification</th>
                                    <th>Course</th>
                                    <th>Specialization</th>
                                    <th>Institution</th>
                                    <th>Passing Year</th>
                                    <th>Course type</th>
                                    <th>Educational Documents</th>
                                    <th>Caste Certificate</th>
                                    <th>Class 10th admit </th>
                                    <th>Diploma</th>
                                    <th>Date of Submission</th>
                                    <th>Time of Submission</th>
                                    <th>status</th>
                                    <th>Employment Id</th>
                                    <th>Action</th>
					        </tfoot>
                
    					</table>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Basic Tables end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <form action="form/editApplication.php" class="form" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="content-body">
         <!-- Basic Tables start -->
         <div class="row">
            <div class="col-12">
               <div class="card" >
                  <div class="card-header">
                     <h4 class="card-title">Application Details</h4>
                     
                     
                  </div>
                  <div class="card-content collapse show">
                     <div class="card-body">
                     
                        <div class="row">
                           <div class="col-xl-12 col-lg-12">
                              <div class="form-group">
                                 <label  style="color: #fdce16;font-size: 25px;font-style: bold;font-weight: 600;">
                                 Personal
                                 </label>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Application ID</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" id="app_ID" name="app_ID" type="text" placeholder="id" >
                                    
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Employment ID</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" id="emp_ID" name="emp_ID" type="text" placeholder="id" >
                                    
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Full Name</label>
                                 <div class="ls-inputicon-box"> 
                                    
                                    <input class="form-control"name="can_name" id="fullname" type="text" placeholder="Enter Your name" >
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Father Name(full name)</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" id="fathername" name="father_name" type="text" placeholder="Enter Your name">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Mother Name(full name)</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" id="mothername" name="mother_name" type="text" placeholder="Enter Your name">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Spouse Name(full name)</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" id="spousename" name="spouse_name" type="text" placeholder="Enter Your name">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12">
                             
                                 <label>Gender</label>
                                 <div class="form-group">
                                      <div class="">
                                          <select class="genderSelect form-control show-tick" id="editForm" name="gender" required>
                                              <option value="0" selected disabled>Select gender</option>
                                          <option value="male">male</option>
                                          <option value="female">female</option>
                                          <option value="other">other</option>
                                          
                                          </select>
                                      </div>
                                     
                                  </div>
                             
                           </div>
                           <div class="col-xl-4 col-lg-12">
                              <div class="form-group">
                                 <label>Marital Status</label>
                                 <div class="row twm-form-radio-inline">
                                    <div class="col-md-4">
                                       <input class="form-check-input" type="radio" name="marital" value="single" id="Full_Time1" unchecked>
                                       <label class="form-check-label" for="Full_Time1">
                                       Single
                                       </label>
                                    </div>
                                    <div class="col-md-4">
                                       <input class="form-check-input" type="radio" name="marital" value="married" id="flexRadioDefault4" unchecked>
                                       <label class="form-check-label" for="flexRadioDefault4">
                                       Married
                                       </label>
                                    </div>
                                    <div class="col-md-4">
                                       <input class="form-check-input" type="radio" name="marital" value="divorced" id="flexRadioDefault4" unchecked>
                                       <label class="form-check-label" for="flexRadioDefault4">
                                       Divorced
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12">
                              <div class="form-group">
                                 <label>Caste</label>
                                 <div class="form-group">
                                      <div class="">
                                          <select class="casteSelect form-control show-tick" id="editForm" name="caste" required>
                                              <option value="0" selected disabled>Select caste</option>
                                          <option value="ST/SC">ST/SC</option>
                                          <option value="OBC/MOBC">OBC/MOBC</option>
                                          <option value="ST HILLS">ST HILLS</option>
                                          <option value="GENERAL">GENERAL</option>
                                          <option value="EWS">EWS</option>
                                              
                                          </select>
                                      </div>
                                     
                                  </div>
                                 
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Adhar number</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="adhar" id="adhar" type="text" placeholder="Enter Your name">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Date of Birth</label>
                                 <input class="form-control" name="DOB" id="date_of_birth" type="date" placeholder="Enter birth date" required>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Email Address</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="can_email" id="email" type="email" placeholder="Enter your enail">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Phone Number</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="can_phone" id="phone" type="text" placeholder="(+91) Enter your phone number">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Identification Mark</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="identity" id="identification" type="text" placeholder="identification">
                                    </i>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12">
                              <div class="form-group">
                                 <label  style="color: #fdce16;font-size: 25px;font-style: bold;font-weight: 600;">
                                 Permanent Address
                                 </label>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>City</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="city" id="city" type="text" placeholder="Enter your permanent Address"id="pCity">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Address 1</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="add1" id="add1" type="text" placeholder="Enter your permanent Address"id="pAddress1">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Address 2</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="add2" id="add2" type="text" placeholder="Enter your permanent Address"id="pAddress2">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Dist</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="dist" id="dist" type="text" placeholder="Enter your permanent Address"id="pDist">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>State</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="state" id="state" type="text" placeholder="Enter your permanent Address"id="pState">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Pin</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="pin" id="pin" type="text" placeholder="Enter your pin"id="pPin">
                                 </div>
                              </div>
                           </div>
                           <hr/>
                           <div class="col-xl-12 col-lg-12">
                              <div class="form-group">
                                 <label  style="color: #fdce16;font-size: 25px;font-style: bold;font-weight: 600;">
                                 Corresponding Address
                                 </label>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>City</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_city" id="present_city" type="text" placeholder="Enter your permanent Address" id="cCity">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Address 1</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_add1" id="present_add1" type="text" placeholder="Enter your permanent Address" id="cAddress1">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Address 2</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_add2" id="present_add2" type="text" placeholder="Enter your permanent Address" id="cAddress2">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Dist</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_dist" id="present_dist" type="text" placeholder="Enter your permanent Address"id="cDist">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>State</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_state" id="present_state" type="text" placeholder="Enter your permanent Address"id="cState">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Pin</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_pin" id="present_pin" type="text" placeholder="Enter your pin"id="cPin">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12">
                              <div class="form-group">
                                 <label  style="color: #fdce16;font-size: 25px;font-style: bold;font-weight: 600;">
                                 Occupation
                                 </label>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Current Job*</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="job_name" id="job_name" type="text" placeholder="Your Job Title">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Organization Name*</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="company_name" id="company_name" type="text" placeholder="Where you are currently working">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12">
                              <div>
                                 <label>Working Since</label>
                                 <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                       <div class="form-group">
                                          <div class="ls-inputicon-box">
                                             <div class="ls-inputicon-box">
                                                <div id="select-container">
                                                  <select class="yearSelect form-control show-tick" id="editForm" name="years" required>
                                                      <option class="bs-title-option" value="0"  selected disabled>select year</option>
                                                      <option value="0 year"> 0 year </option>
                                                      <option value="1 year"> 1 years </option>
                                                      <option value="2 years"> 2 years </option>
                                                      <option value="3 years"> 3 years</option>
                                                      <option value="4 years"> 4 years</option>
                                                      <option value="5 years"> 5 years</option>
                                                      <option value="5+ years">5+ years</option>
                                                  </select>
                                                   
                                                </div>
                                                <div id="input-container" style="display: none;">
                                                   <input type="text" class="form-control" id="other-option" name="select_years" placeholder="enter years">years
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                       <div class="form-group">
                                          <div class="ls-inputicon-box">
                                             <div class="ls-inputicon-box">
                                                <div id="select-container2">
                                                  <select class="monthSelect form-control show-tick" id="editForm" name="months" required>
                                                      <option class="bs-title-option" value="0"  selected disabled>select month</option>
                                                      <option value="0 month"> 0 month </option>
                                                      <option value="1 month"> 1 month </option>
                                                      <option value="2 months"> 2 months </option>
                                                      <option value="3 months"> 3 months </option>
                                                      <option value="4 months"> 4 months</option>
                                                      <option value="5 months"> 5 months</option>
                                                      <option value="6 months">6 months</option>
                                                      <option value="7 months">7 months</option>
                                                      <option value="8 months">8 months</option>
                                                      <option value="9 months">9  months</option>
                                                      <option value="10 months">10 months</option>
                                                      <option value="11 months">11 months</option>
                                                  </select>
                                                   
                                                </div>
                                                <div id="input-container2" style="display: none;">
                                                   <input type="text" class="form-control" name="select_months" id="other-option2" placeholder="enter months">months
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Role</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="role" id="role" type="text" placeholder="your role" >
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Department Name</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="department" id="department" type="text" placeholder="Your Department">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <div class="form-group">
                                    <label>skill</label>
                                    <div class="ls-inputicon-box"> 
                                       <textarea class="form-control" name="skill" id="skill" placeholder="Your skill"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <label  style="color: #fdce16;font-size: 25px;font-style: bold;font-weight: 600;">
                              Language
                              </label>
                              <hr/>
                              <div class="col-xl-12 col-lg-12">
                                 <div class="form-group">
                                    <label>1. English</label>
                                    <div class="row twm-form-radio-inline">
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="english[]" value="read" id="Full_Time1" unchecked>
                                          <label class="form-check-label" for="Full_Time1">
                                          read
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="english[]" value="write" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          write
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="english[]" value="speak" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          speak
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="english[]" value="none" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          none
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-12 col-lg-12">
                                 <div class="form-group">
                                    <label>2. Hindi</label>
                                    <div class="row twm-form-radio-inline">
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="hindi[]" value="read" id="Full_Time1" unchecked>
                                          <label class="form-check-label" for="Full_Time1">
                                          read
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="hindi[]" value="write" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          write
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="hindi[]" value="speak" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          speak
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="hindi[]" value="none" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          none
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-12 col-lg-12">
                                 <div class="form-group">
                                    <label>3. Assamese</label>
                                    <div class="row twm-form-radio-inline">
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="assamese[]" value="read" id="Full_Time1">
                                          <label class="form-check-label" for="Full_Time1">
                                          read
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="assamese[]" value="write" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          write
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="assamese[]" value="speak" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          speak
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="assamese[]" value="none" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          none
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-12 col-lg-12">
                                 <div class="form-group">
                                    <label>4. Bodo</label>
                                    <div class="row twm-form-radio-inline">
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="bodo[]" value="read" id="Full_Time1">
                                          <label class="form-check-label" for="Full_Time1">
                                          read
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="bodo[]" value="write" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          write
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="bodo[]" value="speak" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          speak
                                          </label>
                                       </div>
                                       <div class="col-md-3">
                                          <input class="form-check-input" type="checkbox" name="bodo[]" value="none" id="flexRadioDefault4" unchecked>
                                          <label class="form-check-label" for="flexRadioDefault4">
                                          none
                                          </label>
                                       </div>
                                       <div class="col-xl-12 col-lg-12">
                                          <div class="form-group">
                                             <label  style="color: #fdce16;font-size: 25px;font-style: bold;font-weight: 600;">
                                             Qualification
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 col-md-12">
                                          <div class="form-group">
                                             <label>Highest Qualification</label>
                                             <div class="ls-inputicon-box"> 
                                                <input class="form-control" name="qualification" type="text" id="qualification" placeholder="Your Highest Qualification">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 col-md-12">
                                          <div class="form-group">
                                             <label>Course</label>
                                             <div class="ls-inputicon-box"> 
                                                <input class="form-control" name="course" id="course" type="text" placeholder="Your Course">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 col-md-12">
                                          <div class="form-group">
                                             <label>Specialization</label>
                                             <div class="ls-inputicon-box"> 
                                                <input class="form-control" name="special" id="special" type="text" placeholder="Your Specialization">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 col-md-12">
                                          <div class="form-group">
                                             <label>University/Board</label>
                                             <div class="ls-inputicon-box"> 
                                                <input class="form-control" name="board" id="board" type="text" placeholder="University/College">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-12">
                                          <div class="form-group">
                                             <label>Passing Year</label>
                                             <div class="ls-inputicon-box">
                                                <input class="form-control" name="pass_year" id="pass_year" type="text" placeholder="Passing year">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-12 col-lg-12">
                                          <div class="form-group">
                                             <label>Course Type</label>
                                             <div class="row twm-form-radio-inline">
                                                <div class="col-md-4">
                                                   <input class="form-check-input" value="regular" type="radio" name="course_type" id="Full_Time1">
                                                   <label class="form-check-label" for="Full_Time1">
                                                   Regular
                                                   </label>
                                                </div>
                                                <div class="col-md-4">
                                                   <input class="form-check-input" type="radio" name="course_type" value="part time" id="flexRadioDefault4">
                                                   <label class="form-check-label" for="flexRadioDefault4">
                                                   Part Time
                                                   </label>
                                                </div>
                                                <div class="col-md-4">
                                                   <input class="form-check-input" type="radio" name="course_type" value="Correspondence" id="flexRadioDefault3" >
                                                   <label class="form-check-label" for="flexRadioDefault3">
                                                   Correspondence
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-12 col-lg-12">
                                          <div class="form-group">
                                             <label  style="color: #fdce16;font-size: 25px;font-style: bold;font-weight: 600;">
                                             Image Upload
                                             </label>
                                          </div>
                                       </div>
                                        <div class="panel panel-default">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                </div>
                                                
                                                <div class="panel-body wt-panel-body p-a20 ">
                                                   <div class="twm-tabs-style-1">
                                                      <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                                      <div class="tab-content" id="myTab3Content">
                                                         <div class="tab-pane fade show active" id="Personal">
                                                            <div class="row">
                                                               <div class="col-lg-12 col-md-12">
                                                                  <div class="form-group">
                                                                     <label>Upload your recent photo<span style="color: red">(max size 500kb)</span></label>
                                                                     <input name="image" id="image" type="file" class="inputFile" accept="image/*"/>
                                                                     <img id="responseImage" width="150px">
                                                                     
                                                                  </div>
                                                                </div>
                                                            </div>
                                                          </div>
                                                      </div>
                                                    </ul>
                                                </div>
                                            </div>
                                       <div class="col-xl-12 col-lg-12">
                                          <div class="form-group">
                                             <label  style="color: #fdce16;font-size: 25px;font-style: bold;font-weight: 600;">
                                             Documents
                                             </label>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading wt-panel-heading p-a20">
                                          </div>
                                          <div class="panel-body wt-panel-body p-a20 ">
                                             <div class="twm-tabs-style-1">
                                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                                <div class="tab-content" id="myTab3Content">
                                                   <div class="tab-pane fade show active" id="Personal">
                                                      <div class="row">
                                                         <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                               <label>Upload all educational documents</label>
                                                               <input type="file" name="pdf1" id="image1"  accept="application/pdf" >
                                                             </div>
                                                               <embed id="responseImage1" type="application/pdf"  width="280px" height="280px">
                                                            

                                                         </div>
                                                         <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                               <label>Upload Caste Certificate</label>
                                                               <input type="file" name="pdf2" id="image2"  accept="application/pdf" >
                                                             </div>
                                                              <embed id="responseImage2" type="application/pdf"  width="280px" height="280px">
                                                            
                                                         </div>
                                                         <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                               <label>Upload Class 10th Admit</label>
                                                               <input type="file" name="pdf3" id="image3"  accept="application/pdf">
                                                             </div>
                                                               
                                                               <embed id="responseImage3" type="application/pdf" width="280px" height="280px">
                                                          
                                                         </div>
                                                         <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                               <label>Upload other diplomas/courses</label>
                                                               <input type="file" name="pdf4" id="image4"  accept="application/pdf">
                                                             </div>
                                                               <embed id="responseImage4" type="application/pdf"width="280px" height="280px">
                                                            
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-12 col-lg-12">
                                          <div class="form-group">
                                             <label  style="color: #fdce16;font-size: 25px;font-style: bold;font-weight: 600;">
                                             Date of Registration
                                             </label>
                                          </div>
                                       </div>
                                        <div class="col-xl-4 col-lg-6 col-md-12">
                                          <div class="form-group">
                                             <label>Registration date</label>
                                             <div class="ls-inputicon-box"> 
                                                <input class="form-control" name="reg_date" id="reg_date" type="date" placeholder="Enter birth date" required>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="editSubmit">update</button>
        <a href="" id="deleteApplication" class="btn btn-danger">delete</a>
      </div>
      </form>
    </div>
    
  </div>
</div>

<!-- footer -->
   <?php include("include/footer.php");?>
   <!-- footer ends -->
  <script type="text/javascript">
   document.getElementById('image1').addEventListener('change', function(event) {
      var file = event.target.files[0];
      var reader = new FileReader();
      reader.onload = function(e) {
         document.getElementById('responseImage1').src = e.target.result;
      };
      reader.readAsDataURL(file);
   });

   document.getElementById('image2').addEventListener('change', function(event) {
      var file = event.target.files[0];
      var reader = new FileReader();
      reader.onload = function(e) {
         document.getElementById('responseImage2').src = e.target.result;
      };
      reader.readAsDataURL(file);
   });

   document.getElementById('image3').addEventListener('change', function(event) {
      var file = event.target.files[0];
      var reader = new FileReader();
      reader.onload = function(e) {
         document.getElementById('responseImage3').src = e.target.result;
      };
      reader.readAsDataURL(file);
   });

   document.getElementById('image4').addEventListener('change', function(event) {
      var file = event.target.files[0];
      var reader = new FileReader();
      reader.onload = function(e) {
         document.getElementById('responseImage4').src = e.target.result;
      };
      reader.readAsDataURL(file);
   });

   function validateCompany(variable) {
      var keyed = variable.replace(/\n/g, '<br/>');
      $("#targetCompany").val(keyed);
   }

   function validateVision(variable) {
      var keyed = variable.replace(/\n/g, '<br/>');
      $("#targetVision").val(keyed);
   }

   $(document).on("click touch", ".appID", function () {
      var dataId = $(this).data('id');
      $('#app_ID').val(dataId);

      $.ajax({
         type: "POST",
         dataType: "json",
         url: "fetch/fetch_application.php",
         data: {
            dataId: dataId
         },
         success: function(response) {
            var keyed = response.emp_ID.replace(/<br ?\/?>/g, "\n");
            $("#emp_ID").val(keyed);
            var keyed = response.can_name.replace(/<br ?\/?>/g, "\n");
            $("#fullname").val(keyed);
            var keyed = response.father_name.replace(/<br ?\/?>/g, "\n");
            $("#fathername").val(keyed);
            var keyed = response.mother_name.replace(/<br ?\/?>/g, "\n");
            $("#mothername").val(keyed);
            var keyed = response.spouse_name.replace(/<br ?\/?>/g, "\n");
            $("#spousename").val(keyed);
            $("select.genderSelect").val(response.gender).change();
            $('input[name="marital"][value="' + response.marital + '"]').prop('checked', true);
            $("select.casteSelect").val(response.caste).change();
            var keyed = response.adhar.replace(/<br ?\/?>/g, "\n");
            $("#adhar").val(keyed);
            var keyed = response.DOB.replace(/<br ?\/?>/g, "\n");
            $("#date_of_birth").val(keyed);
            var keyed = response.can_email.replace(/<br ?\/?>/g, "\n");
            $("#email").val(keyed);
            var keyed = response.can_phone.replace(/<br ?\/?>/g, "\n");
            $("#phone").val(keyed);
            var keyed = response.identity.replace(/<br ?\/?>/g, "\n");
            $("#identification").val(keyed);
            var keyed = response.city.replace(/<br ?\/?>/g, "\n");
            $("#city").val(keyed);
            var keyed = response.add1.replace(/<br ?\/?>/g, "\n");
            $("#add1").val(keyed);
            var keyed = response.add2.replace(/<br ?\/?>/g, "\n");
            $("#add2").val(keyed);
            var keyed = response.dist.replace(/<br ?\/?>/g, "\n");
            $("#dist").val(keyed);
            var keyed = response.state.replace(/<br ?\/?>/g, "\n");
            $("#state").val(keyed);
            var keyed = response.pin.replace(/<br ?\/?>/g, "\n");
            $("#pin").val(keyed);
            var keyed = response.present_city.replace(/<br ?\/?>/g, "\n");
            $("#present_city").val(keyed);
            var keyed = response.present_add1.replace(/<br ?\/?>/g, "\n");
            $("#present_add1").val(keyed);
            var keyed = response.present_add2.replace(/<br ?\/?>/g, "\n");
            $("#present_add2").val(keyed);
            var keyed = response.present_dist.replace(/<br ?\/?>/g, "\n");
            $("#present_dist").val(keyed);
            var keyed = response.present_state.replace(/<br ?\/?>/g, "\n");
            $("#present_state").val(keyed);
            var keyed = response.present_pin.replace(/<br ?\/?>/g, "\n");
            $("#present_pin").val(keyed);
            var keyed = response.job_name.replace(/<br ?\/?>/g, "\n");
            $("#job_name").val(keyed);
            var keyed = response.company_name.replace(/<br ?\/?>/g, "\n");
            $("#company_name").val(keyed);
            $("select.yearSelect").val(response.years).change();
            $("select.monthSelect").val(response.months).change();
            var keyed = response.role.replace(/<br ?\/?>/g, "\n");
            $("#role").val(keyed);
            var keyed = response.department.replace(/<br ?\/?>/g, "\n");
            $("#department").val(keyed);
            var keyed = response.skill.replace(/<br ?\/?>/g, "\n");
            $("#skill").val(keyed);
            $.each(response.english, function(index, value) {
               $('input[name="english[]"][value="' + value + '"]').prop('checked', true);
            });

            // Update the checkbox values for Hindi
            $.each(response.hindi, function(index, value) {
               $('input[name="hindi[]"][value="' + value + '"]').prop('checked', true);
            });

            // Update the checkbox values for Assamese
            $.each(response.assamese, function(index, value) {
               $('input[name="assamese[]"][value="' + value + '"]').prop('checked', true);
            });

            // Update the checkbox values for Bodo
            $.each(response.bodo, function(index, value) {
               $('input[name="bodo[]"][value="' + value + '"]').prop('checked', true);
            });
            
            var keyed = response.qualification.replace(/<br ?\/?>/g, "\n");
            $("#qualification").val(keyed);
            var keyed = response.course.replace(/<br ?\/?>/g, "\n");
            $("#course").val(keyed);
            var keyed = response.special.replace(/<br ?\/?>/g, "\n");
            $("#special").val(keyed);
            var keyed = response.board.replace(/<br ?\/?>/g, "\n");
            $("#board").val(keyed);
            var keyed = response.pass_year.replace(/<br ?\/?>/g, "\n");
            $("#pass_year").val(keyed);
            $('input[name="course_type"][value="' + response.course_type + '"]').prop('checked', true);
            $('#responseImage').attr("src",'../admin/images/' +response.image);
            $('#responseImage1').attr("src", '../admin/images/' + response.pdf1);
            $('#responseImage2').attr("src",'../admin/images/' + response.pdf2);
            $('#responseImage3').attr("src",'../admin/images/' + response.pdf3);
            $('#responseImage4').attr("src",'../admin/images/' + response.pdf4);
            var keyed = response.reg_date.replace(/<br ?\/?>/g, "\n");
            $("#reg_date").val(keyed);
            $('#deleteApplication').attr("href", "form/deleteApplications.php?id=" + dataId);
         },
         error: function(error) {
            console.log("Error:");
            console.log(error);
         }
      });
   });

   function readURL(input) {
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function(e) {
            if (input.id === 'image1') {
               $('#responseImage1').attr('src', e.target.result);
            } else if (input.id === 'image2') {
               $('#responseImage2').attr('src', e.target.result);
            } else if (input.id === 'image3') {
               $('#responseImage3').attr('src', e.target.result);
            } else if (input.id === 'image4') {
               $('#responseImage4').attr('src', e.target.result);
            }
         };
         reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
       function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      if(input.id === 'image') {
        $('#responseImage').attr('src', e.target.result);
      }
    };
    reader.readAsDataURL(input.files[0]);
  }

  }

$("#image").change(function() {
  readURL(this);
});

    </script>


  </body>
</html>