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
      <div class="content-body">
         <!-- Basic Tables start -->
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">Application Details</h4>
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
                                 <label>Full Name</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" readonly name="emp_id" type="hidden" placeholder="Enter Your name" value="<?php echo $userID; ?>">
                                    <input class="form-control" readonly name="can_name" type="text" placeholder="Enter Your name" value="<?php echo $_SESSION['this_emp_name']; ?>">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Father Name(full name)</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="father_name" type="text" placeholder="Enter Your name">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Mother Name(full name)</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="mother_name" type="text" placeholder="Enter Your name">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Spouse Name(full name)</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="spouse_name" type="text" placeholder="Enter Your name">
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
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Adhar number</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="adhar" type="text" placeholder="Enter Your name">
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
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Phone Number</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" readonly name="can_phone" type="text" placeholder="(+91) Enter your phone number"value="<?php echo $_SESSION['_mobile']; ?>">
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
                                    <input class="form-control" name="city" type="text" placeholder="Enter your permanent Address"id="pCity">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Address 1</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="add1" type="text" placeholder="Enter your permanent Address"id="pAddress1">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Address 2</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="add2" type="text" placeholder="Enter your permanent Address"id="pAddress2">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Dist</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="dist" type="text" placeholder="Enter your permanent Address"id="pDist">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>State</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="state" type="text" placeholder="Enter your permanent Address"id="pState">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Pin</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="pin" type="text" placeholder="Enter your pin"id="pPin">
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
                                    <input class="form-control" name="present_city" type="text" placeholder="Enter your permanent Address" id="cCity">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Address 1</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_add1" type="text" placeholder="Enter your permanent Address" id="cAddress1">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Address 2</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_add2" type="text" placeholder="Enter your permanent Address" id="cAddress2">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Dist</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_dist" type="text" placeholder="Enter your permanent Address"id="cDist">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>State</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_state" type="text" placeholder="Enter your permanent Address"id="cState">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Pin</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="present_pin" type="text" placeholder="Enter your pin"id="cPin">
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
                                    <input class="form-control" name="job_name" type="text" placeholder="Your Job Title">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-12">
                              <div class="form-group">
                                 <label>Organization Name*</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="company_name" type="text" placeholder="Where you are currently working">
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
                                    <input class="form-control" name="role" type="text" placeholder="your role" >
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-12 col-md-12">
                              <div class="form-group">
                                 <label>Department Name</label>
                                 <div class="ls-inputicon-box"> 
                                    <input class="form-control" name="department" type="text" placeholder="Your Department">
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
                                                <input class="form-control" name="qualification" type="text" placeholder="Your Highest Qualification">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 col-md-12">
                                          <div class="form-group">
                                             <label>Course</label>
                                             <div class="ls-inputicon-box"> 
                                                <input class="form-control" name="course" type="text" placeholder="Your Course">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 col-md-12">
                                          <div class="form-group">
                                             <label>Specialization</label>
                                             <div class="ls-inputicon-box"> 
                                                <input class="form-control" name="special" type="text" placeholder="Your Specialization">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xl-4 col-lg-6 col-md-12">
                                          <div class="form-group">
                                             <label>University/Board</label>
                                             <div class="ls-inputicon-box"> 
                                                <input class="form-control" name="board" type="text" placeholder="University/College">
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
   <!-- ////////////////////////////////////////////////////////////////////////////-->
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form class="form-horizontal" action="https://demos.themeselection.com/chameleon-admin-template/html/ltr/vertical-menu-template/index.html" novalidate>
                  <h5 class="mt-2">name</h5>
                  <fieldset class="form-group position-relative has-icon-left">
                     <input type="text" class="form-control round" id="user-name" placeholder="Your Username" required>
                     <div class="form-control-position">
                        <i class="ft-user"></i>
                     </div>
                  </fieldset>
                  <h5 class="mt-2">password</h5>
                  <fieldset class="form-group position-relative has-icon-left">
                     <input type="password" class="form-control round" id="user-password" placeholder="Enter Password" required>
                     <div class="form-control-position">
                        <i class="ft-lock"></i>
                     </div>
                  </fieldset>
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </div>
   <!-- footer -->
   <?php include("include/footer.php");?>
   <!-- footer ends -->
</body>
</html>
