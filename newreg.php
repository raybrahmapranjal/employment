<?php 
session_start();
if (empty($_SESSION['this_emp_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location:employment_apply.php');
   exit();
} else {
   include 'admin/classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   $sessionName =  $_SESSION['this_emp_name'];

   $userID = $_SESSION['this_emp_id'];

   // Check if emp_ID already exists in emp_application table
   $existingData = $crud->Read("emp_application", "emp_ID = $userID");

   if ($existingData) {
      // Redirect to the dashboard or desired page
      header('location:candash.php');
      exit();
   }

   $read = $crud->Read("emp_register","1");
}
?>

<?php include("include/header.php"); ?>
<script src="css/form.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){ 
     $('#check-address').click(function(){ 
     if ($('#check-address').is(":checked")) {
      $('#cCity').val($('#pCity').val());
      $('#cAddress1').val($('#pAddress1').val());
      $('#cAddress2').val($('#pAddress2').val());
      $('#cDist').val($('#pDist').val());
      $('#cState').val($('#pState').val());
      $('#cPin').val($('#pPin').val());
      
     } else { //Clear on uncheck
      $('#cCity').val("");
      $('#cAddress1').val("");
      $('#cAddress2').val("");
      $('#cDist').val("");
      $('#cState').val("");
      $('#cPin').val("");
      
     };
    });
   
   });
</script>
<body>
   <!-- LOADING AREA START ===== -->
   <div class="loading-area">
      <div class="loading-box"></div>
      <div class="loading-pic">
         <div class="wrapper">
            <div class="cssload-loader"></div>
         </div>
      </div>
   </div>
   <!-- LOADING AREA  END ====== -->  
   <div class="page-wraper">
      <!-- HEADER START -->
      
        <!-- HEADER START -->
        <header  class="site-header header-style-3 mobile-sider-drawer-menu">

            <div class="sticky-header main-bar-wraper  navbar-expand-lg" style="background: linear-gradient(135deg, #657382 0%, #b7dbc7 100%);">
                <div class="main-bar">  
                                    
                    <div class="container-fluid clearfix"> 
                
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.html">
                                <img src="images/seed4.png" alt="">
                                </a>
                            </div>
                        </div>  
                        
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
 
                            <ul class=" nav navbar-nav">
                                <li class="has-child"><a href="index.php">Home</a>
                                                                                                
                                </li>
                                <li class="has-child"><a href="about.php">About</a>
                                                                                                 
                                </li>
                                 <li class="has-child"><a href="jobNotification.php">Job Notifications</a>
                                                                                                 
                                </li>
                                <!-- <li class="has-child"><a href="blog.php">Blog</a> -->
                                   <li class="has-child"><a href="">Blog</a>                                                              
                                </li>
                                 <li class="has-child"><a href="photoGallery.php">Gallery</a>
                                                                                                 
                                </li>
                                <li class="has-child"><a href="contact.php">Contact us</a>
                                                                                                 
                                </li>
                               
                            </ul>

                        </div>
                        
                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                           
                            <div class="extra-cell">
                                <div class="header-nav-btn-section">
                                    <div class="twm-nav-btn-left">
                                        <form method="post" action="session/user_destroy.php">
                                            <button type="submit" class="twm-nav-sign-up" name="user_destroy">Logout</button>
                                        </form>

                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div> 
                </div>

               
            </div>

 </header>
        <!-- HEADER END -->
         
      <!-- HEADER END -->
      <!-- CONTENT START -->
      <div class="page-content">
         <!-- INNER PAGE BANNER -->
         <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
               <div class="wt-bnr-inr-entry">
                  <div class="banner-title-outer">
                     <div class="banner-title-name">
                        <h2 class="wt-title">New Registration</h2>
                     </div>
                  </div>
                  <!-- BREADCRUMB ROW -->                            
                  <div>
                     <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.html">Home</a></li>
                        <li>New Registration</li>
                     </ul>
                  </div>
                  <!-- BREADCRUMB ROW END -->                        
               </div>
            </div>
         </div>
         <!-- INNER PAGE BANNER END -->
         <!-- Employer Account START -->
         <div class="section-full p-t120  p-b90 site-bg-white bg-cover twm-ac-fresher-wrap" >
            <div class="container">
               <div class="row d-flex justify-content-center">
                  <div class="col-lg-12 col-md-12">
                     <div class="twm-right-section-panel-wrap2">
                        <!--Filter Short By-->
                        <div class="twm-right-section-panel site-bg-primary">
                           <!--Basic Information-->
                           <div class="panel panel-default">
                              <div class="panel-heading wt-panel-heading p-a20">
                                 <h4 class="panel-tittle m-a0">Application form</h4>
                              </div>
                            
                              <div class="panel-body wt-panel-body p-a20 ">
                                <div class="twm-tabs-style-1">
                                    
                                       <!-- Progress bar -->
                                       <div class="progressbar">
                                          <div class="progress" id="progress"></div>
                                          <div
                                             class="progress-step progress-step-active"
                                             data-title="Personal"
                                             ></div>
                                          <div class="progress-step" data-title="Occupation"></div>
                                          <div class="progress-step" data-title="Qualifications & documents"></div>
                                       </div>
                                       <!-- Steps -->
                                 <form action="admin/form/application_submit.php" class="form" method="post" enctype="multipart/form-data">
                                        <div class="form-step form-step-active">
                                           <div class="row">
                                                 
                                                 <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Full Name</label>
                                                   <div class="ls-inputicon-box"> 
                                                    <input class="form-control" readonly name="emp_id" type="hidden" placeholder="Enter Your name" value="<?php echo $userID; ?>">
                                                      <input class="form-control" readonly name="can_name" type="text" placeholder="Enter Your name" value="<?php echo $_SESSION['this_emp_name']; ?>">
                                                      <i class="fs-input-icon fa fa-user "></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Father Name(full name)</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="father_name" type="text" placeholder="Enter Your name">
                                                      <i class="fs-input-icon fa fa-user "></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Mother Name(full name)</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="mother_name" type="text" placeholder="Enter Your name">
                                                      <i class="fs-input-icon fa fa-user "></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Spouse Name(full name)</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="spouse_name" type="text" placeholder="Enter Your name">
                                                      <i class="fs-input-icon fa fa-user "></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12">
                                                <div class="form-group">
                                                   <label>Gender</label>
                                                   <div class="ls-inputicon-box">
                                                      <select class="wt-select-box selectpicker"  data-live-search="true" name="gender" title="" id="s-Days_1" data-bv-field="size">
                                                         <option class="bs-title-option" value="0"  selected disabled>Select Gender</option>
                                                         <option value="male">Male</option>
                                                         <option value="female">Female</option>
                                                         <option value="other">Other</option>
                                                      </select>
                                                      <i class="fs-input-icon fa fa-user "></i>
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
                                                   <div class="ls-inputicon-box">
                                                      <select class="wt-select-box selectpicker"  data-live-search="true" name="caste" title="" id="s-Days_1" data-bv-field="size">
                                                         <option class="bs-title-option" value="0"  selected disabled>Select Caste</option>
                                                         <option value="ST/SC">ST/SC</option>
                                                         <option value="OBC/MOBC">OBC/MOBC</option>
                                                         <option value="ST HILLS">ST HILLS</option>
                                                         <option value="GENERAL">GENERAL</option>
                                                         <option value="EWS">EWS</option>
                                                      </select>
                                                      <i class="fs-input-icon fa fa-user "></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Adhar number</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="adhar" type="text" placeholder="Enter Your name">
                                                      <i class="fs-input-icon fa fa-user "></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Date of Birth</label>
                                                   <input class="form-control" name="DOB" type="date" placeholder="Enter birth date" required>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Email Address</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" readonly name="can_email" type="email" placeholder="Enter your enail"value="<?php echo $_SESSION['_email']; ?>">
                                                      <i class="fs-input-icon fas fa-at"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Phone Number</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" readonly name="can_phone" type="text" placeholder="(+91) Enter your phone number"value="<?php echo $_SESSION['_mobile']; ?>">
                                                      <i class="fs-input-icon fa fa-phone-alt"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Identification Mark</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="identity" type="text" placeholder="identification">
                                                      </i>
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             <label class="form-check-label" for="flexRadioDefault2" style="color: #0d6efd;">
                                             Permanent Address
                                             </label>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>City</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="city" type="text" placeholder="Enter your permanent Address"id="pCity">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>Address 1</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="add1" type="text" placeholder="Enter your permanent Address"id="pAddress1">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>Address 2</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="add2" type="text" placeholder="Enter your permanent Address"id="pAddress2">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>Dist</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="dist" type="text" placeholder="Enter your permanent Address"id="pDist">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>State</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="state" type="text" placeholder="Enter your permanent Address"id="pState">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>Pin</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="pin" type="text" placeholder="Enter your pin"id="pPin">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <hr/>
                                             <div class="col-xl-12 col-lg-12">
                                                <div class="form-group">
                                                   <label class="form-check-label" for="flexRadioDefault2" style="color: #0d6efd;">
                                                   Current Address
                                                   </label>
                                                   <small>(Same as permanent address) </small>
                                                   <input type="checkbox" value="" id="check-address">
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>City</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="present_city" type="text" placeholder="Enter your permanent Address" id="cCity">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>Address 1</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="present_add1" type="text" placeholder="Enter your permanent Address" id="cAddress1">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>Address 2</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="present_add2" type="text" placeholder="Enter your permanent Address" id="cAddress2">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>Dist</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="present_dist" type="text" placeholder="Enter your permanent Address"id="cDist">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>State</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="present_state" type="text" placeholder="Enter your permanent Address"id="cState">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>Pin</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="present_pin" type="text" placeholder="Enter your pin"id="cPin">
                                                      <i class="fs-input-icon fa fa-globe-americas"></i>
                                                   </div>
                                                </div>
                                             </div>
                                                 <div class="col-xl-4 col-lg-6 col-md-12">
                                                    <div class="">
                                                       <a href="#" class="btn btn-next">Next</a>
                                                    </div>
                                                 </div>
                                           </div>
                                        </div>
                                          <div class="form-step">
                                             <div class="row">
                                              <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Current Job*</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="job_name" type="text" placeholder="Your Job Title">
                                                      <i class="fs-input-icon fa fa-address-card "></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Organization Name*</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="company_name" type="text" placeholder="Where you are currently working">
                                                      <i class="fs-input-icon fas fa-building"></i>
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
                                                            <select class="wt-select-box selectpicker" data-live-search="true" id="select-option" name="years" onchange="handleSelectOption(this.value)">
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
                                                           <i class="fs-input-icon fa fa-calendar"></i>
                                                         </div>




                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-xl-6 col-lg-6">
                                                         <div class="form-group">
                                                            <div class="ls-inputicon-box">
                                                               <div class="ls-inputicon-box">
                                                                 <div id="select-container2">
                                                                  <select class="wt-select-box selectpicker" name="months" data-live-search="true" id="select-option2" onchange="handleSelectOption2(this.value)">
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
                                                                 <i class="fs-input-icon fa fa-calendar"></i>
                                                               </div>



                                                               <i class="fs-input-icon fa fa-calendar"></i>
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
                                                      <input class="form-control" name="role" type="text" placeholder="your role" >
                                                      <i class="fs-input-icon fas fa-asterisk"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                   <label>Department Name</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="department" type="text" placeholder="Your Department">
                                                      <i class="fs-input-icon fa fa-industry"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="form-group">
                                                  <div class="form-group">
                                                   <label>skill</label>
                                                    <div class="ls-inputicon-box"> 
                                                       <textarea class="form-control" name="skill" placeholder="Your skill"></textarea>
                                                    </div>

                                                </div>
                                                  
                                             </div>
                                             <label class="form-check-label" for="flexRadioDefault2" style="color: #0d6efd;">
                                             Languages
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
                                                     
  
                                                   </div>
                                                </div>
                                             </div>
                                             </div>
                                             <!-- <div class="col-xl-12 col-lg-12 col-md-12">
                                               <div class="form-group">
                                                 <label>Language</label>
                                                 <div class="ls-inputicon-box input_fields_custom">
                                                   <div class="language-fields">
                                                     <div class="row language-row">
                                                      <input class="form-control" name="company_phone" type="text" placeholder="Your Department">
                                                       <div class="col-md-4">
                                                         <div class="form-check">
                                                           <input class="form-check-input" type="checkbox" name="language[]" value="read">
                                                           <label class="form-check-label">Read</label>
                                                         </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                         <div class="form-check">
                                                           <input class="form-check-input" type="checkbox" name="language[]" value="write">
                                                           <label class="form-check-label">Write</label>
                                                         </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                         <div class="form-check">
                                                           <input class="form-check-input" type="checkbox" name="language[]" value="speak">
                                                           <label class="form-check-label">Speak</label>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                 </div>
                                                 <div class="text-right m-tb10">
                                                   <button class="add_field_custom">Add More Fields <i class="fa fa-plus"></i></button>
                                                 </div>
                                               </div>
                                             </div>-->

                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="buttons-group">
                                                   <a href="#" class="btn btn-prev">Previous</a>
                                                   <a href="#" class="btn btn-next">Next</a>
                                                </div>
                                             </div>
                                                     
                                             </div>
                                          </div> 
                                     <div class="form-step">
                                        <div class="row">
                                          <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Highest Qualification</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="qualification" type="text" placeholder="Your Highest Qualification">
                                                      <i class="fs-input-icon fa fa-user-graduate"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Course</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="course" type="text" placeholder="Your Course">
                                                      <i class="fs-input-icon fas fa-book"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>Specialization</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="special" type="text" placeholder="Your Specialization">
                                                      <i class="fs-input-icon fas fa-asterisk"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                <div class="form-group">
                                                   <label>University/Board</label>
                                                   <div class="ls-inputicon-box"> 
                                                      <input class="form-control" name="board" type="text" placeholder="University/College">
                                                      <i class="fs-input-icon fa fa-building"></i>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-12">
                                                <div class="form-group">
                                                   <label>Passing Year</label>
                                                   <div class="ls-inputicon-box">
                                                     <input class="form-control" name="pass_year" type="text" placeholder="Passing year">
                                                      
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
                                                         <input class="form-check-input" type="radio" name="course_type" value="part time" id="flexRadioDefault4" checked>
                                                         <label class="form-check-label" for="flexRadioDefault4">
                                                         Part Time
                                                         </label>
                                                      </div>
                                                      <div class="col-md-4">
                                                         <input class="form-check-input" type="radio" name="course_type" value="Correspondence" id="flexRadioDefault3" checked>
                                                         <label class="form-check-label" for="flexRadioDefault3">
                                                         Correspondence
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                </div>
                                                <label class="form-check-label" for="flexRadioDefault2" style="color: #0d6efd;">Image Upload</label>
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
                                            </div>
                                             <div class="panel panel-default">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                </div>
                                                <label class="form-check-label" for="flexRadioDefault2" style="color: #0d6efd;">Documents</label>
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
                                                               <div class="col-lg-12 col-md-12">
                                                                  <div class="form-group">
                                                                     <label>Upload Caste Certificate</label>
                                                                     <input type="file" name="pdf2" id="image2"  accept="application/pdf" >
                                                                     
                                                                  </div>
                                                               </div>
                                                               <div class="col-lg-12 col-md-12">
                                                                  <div class="form-group">
                                                                     <label>Upload Class 10th Admit</label>
                                                                     <input type="file" name="pdf3" id="image3"  accept="application/pdf" >
                                                                     
                                                                  </div>
                                                               </div>
                                                               <div class="col-lg-12 col-md-12">
                                                                  <div class="form-group">
                                                                     <label>Upload other diplomas/courses</label>
                                                                     <input type="file" name="pdf4" id="image4"  accept="application/pdf">
                                                                     
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                              
                                             
                                              
                                          
                                              <div class="col-xl-4 col-lg-6 col-md-12">
                                                 <div class="buttons-group">
                                                    <a href="#" class="btn btn-prev">Previous</a>
                                                    <button name="submit" class="btn btn-primary">submit</button>
                                                 </div>
                                              </div>
                                        </div>
                                     </div>

                                        </form>  
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
      <!-- Employer Account START END -->
   </div>
   <!-- CONTENT END -->
   <!-- FOOTER START -->
   <?php include("include/footer.php"); ?>
   <!-- FOOTER END -->
   <!-- BUTTON TOP START -->
   <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
   <!--Model Popup Section Start-->
   <!--Signup popup -->
   <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <form>
               <div class="modal-header">
                  <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="twm-tabs-style-2">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <!--Signup Candidate-->  
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                        </li>
                        <!--Signup Employer-->
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                        </li>
                     </ul>
                     <div class="tab-content" id="myTabContent">
                        <!--Signup Candidate Content-->  
                        <div class="tab-pane fade show active" id="sign-candidate">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <div class=" form-check">
                                       <input type="checkbox" class="form-check-input" id="agree1">
                                       <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                       <p>Already registered?
                                          <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <button type="submit" class="site-button">Sign Up</button>
                              </div>
                           </div>
                        </div>
                        <!--Signup Employer Content--> 
                        <div class="tab-pane fade" id="sign-Employer">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <div class=" form-check">
                                       <input type="checkbox" class="form-check-input" id="agree2">
                                       <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                       <p>Already registered?
                                          <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <button type="submit" class="site-button">Sign Up</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            
         </div>
      </div>
   </div>
   <!--Login popup -->
   <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <form>
               <div class="modal-header">
                  <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                  <p>Login and get access to all the features of Jobzilla</p>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="twm-tabs-style-2">
                     <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <!--Login Candidate-->  
                        <li class="nav-item">
                           <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                        </li>
                        <!--Login Employer-->
                        <li class="nav-item">
                           <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                        </li>
                     </ul>
                     <div class="tab-content" id="myTab2Content">
                        <!--Login Candidate Content-->  
                        <div class="tab-pane fade show active" id="login-candidate">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <div class=" form-check">
                                       <input type="checkbox" class="form-check-input" id="Password3">
                                       <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <button type="submit" class="site-button">Log in</button>
                                 <div class="mt-3 mb-3">Don't have an account ? 
                                    <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--Login Employer Content--> 
                        <div class="tab-pane fade" id="login-Employer">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group mb-3">
                                    <div class=" form-check">
                                       <input type="checkbox" class="form-check-input" id="Password4">
                                       <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <button type="submit" class="site-button">Log in</button>
                                 <div class="mt-3 mb-3">Don't have an account ? 
                                    <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <span class="modal-f-title">Login or Sign up with</span>
                  <ul class="twm-modal-social">
                     <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                     <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                  </ul>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!--Model Popup Section End-->
   </div>
   <!-- JAVASCRIPT  FILES ========================================= --> 
   <?php include("include/footer_javascipt.php"); ?>
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
   
   <script>
  function handleSelectOption(value) {
    var selectContainer = document.getElementById("select-container");
    var inputContainer = document.getElementById("input-container");
    var otherOptionInput = document.getElementById("other-option");
    if (value === "other") {
      selectContainer.style.display = "none";
      inputContainer.style.display = "block";
      otherOptionInput.value = ""; // Clear the input field when showing it
    } else {
      selectContainer.style.display = "block";
      inputContainer.style.display = "none";
    }
  }
</script>
<script>
  function handleSelectOption2(value) {
    var selectContainer2 = document.getElementById("select-container2");
    var inputContainer2 = document.getElementById("input-container2");
    var otherOptionInput2 = document.getElementById("other-option2");
    if (value === "other") {
      selectContainer2.style.display = "none";
      inputContainer2.style.display = "block";
      otherOptionInput2.value = ""; // Clear the input field when showing it
    } else {
      selectContainer2.style.display = "block";
      inputContainer2.style.display = "none";
    }
  }
</script>
<script type="text/javascript">
   $(document).ready(function() {
  var maxFields = 8; // Maximum number of additional fields
  var addButton = $('.add_field_custom'); // Add More Fields button
  var wrapper = $('.language-fields'); // Container for language fields
  var fieldHTML = '<div class="row language-row">' +
  '<input class="form-control" name="company_phone" type="text" placeholder="enter language you know">'+
    '<div class="col-md-4">' +
    '<div class="form-check">' +
    '<input class="form-check-input" type="checkbox" name="language[]" value="">' +
    '<label class="form-check-label">Read</label>' +
    '</div>' +
    '</div>' +
    '<div class="col-md-4">' +
    '<div class="form-check">' +
    '<input class="form-check-input" type="checkbox" name="language[]" value="">' +
    '<label class="form-check-label">Write</label>' +
    '</div>' +
    '</div>' +
    '<div class="col-md-4">' +
    '<div class="form-check">' +
    '<input class="form-check-input" type="checkbox" name="language[]" value="">' +
    '<label class="form-check-label">Speak</label>' +
    '</div>' +
    '</div>' +
    '</div>'; // HTML code for additional language field

  var x = 1; // Initial field counter

  // Function to add more fields
  $(addButton).click(function(e) {
    e.preventDefault();
    if (x < maxFields) {
      x++;
      $(wrapper).append(fieldHTML);
    }
  });
});

</script>
</body>
</html>
