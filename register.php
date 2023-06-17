<?php include("include/header.php");?>
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
        <?php include("include/navbar.php");?>
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
                                <h2 class="wt-title">Register Fresher</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Register Fresher</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- Employer Account START -->
            <div class="section-full p-t120  p-b90 site-bg-white bg-cover twm-ac-fresher-wrap" style="background-image:url(images/background/pattern.jpg)">
                <span class="twm-section-bg-img">
                    <img src="images/reg-bg2.png" alt="">
                </span>

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
                                            <div class="progressbar">
                                                <div class="progress" id="progress"></div>
                                                <div class="progress-step progress-step active"data-title="Personal"></div>
                                                <div class="progress-step" data-title="Occupation"></div>
                                                <div class="progress-step" data-title="Qualifications"></div>
                                                
                                            </div>

                                            

                                            <div class="twm-tabs-style-1">
                                                     
                                                <div class="tab-content" id="myTab3Content">
                                                    <div class="tab-pane fade show active" id="Personal">
                                                    
                                                        <div class="row">
                                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Your Name</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_name" type="text" placeholder="Enter Your name">
                                                                            <i class="fs-input-icon fa fa-user "></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Email Address</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_Email" type="email" placeholder="Enter your enail">
                                                                            <i class="fs-input-icon fas fa-at"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                               

                                                                <div class="col-xl-4 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Phone Number</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="(+91) Enter your phone number">
                                                                            <i class="fs-input-icon fa fa-phone-alt"></i>
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
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address"id="pCity">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Address 1</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address"id="pAddress1">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Address 2</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address"id="pAddress2">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Dist</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address"id="pDist">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address"id="pState">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Pin</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your pin"id="pPin">
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
                                                                    (Same as permanent address)
                                                             <input type="checkbox" value="" id="check-address">

                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>City</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address" id="cCity">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Address 1</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address" id="cAddress1">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Address 2</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address" id="cAddress2">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Dist</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address"id="cDist">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your permanent Address"id="cState">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 <div class="col-xl-4 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Pin</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Enter your pin"id="cPin">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>

    


                                                               <!--  <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Upload Resume</label>
                                                                        <form action="https://thewebmax.org/jobzilla/upload.php" class="dropzone"></form>
                                                                        <small>If you do not have a resume document, you may write your brief professional profile <a class="site-text-primary" href="javascript:void(0);">here</a></small>
                                                                    </div>                                    
                                                                </div> -->

                                                                <div class="col-xl-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                            I agree to the Terms and Conditions and Privacy Policy.
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                                
                                                                <div class="col-xl-4 col-lg-12 col-md-12">                                  
                                                                            <div class="">
                                                                              <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
                                                                            </div>
                                                                </div>                                         
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="tab-pane fade" id="Employment">
                                                        <div class="row">

                                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Current Desination*</label>
                                                                    <div class="ls-inputicon-box"> 
                                                                        <input class="form-control" name="company_name" type="text" placeholder="Your Job Title">
                                                                        <i class="fs-input-icon fa fa-address-card "></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Current Company*</label>
                                                                    <div class="ls-inputicon-box"> 
                                                                        <input class="form-control" name="company_Email" type="email" placeholder="Where you are currently working">
                                                                        <i class="fs-input-icon fas fa-building"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                           <!--  <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Expected Salary</label>
                                                                    <div class="row twm-form-radio-inline">
                                                                        
                                                                        <div class="col-md-6">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                US Dollars
                                                                            </label>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked>
                                                                            <label class="form-check-label" for="flexRadioDefault5">
                                                                                Indian Rupees
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12">
                                                                <div>
                                                                    <label>Annual Salary</label>
                                                                    <div class="row">

                                                                        <div class="col-xl-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <div class="ls-inputicon-box">  
                                                                                    <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-Lakh" data-bv-field="size">
                                                                                        <option class="bs-title-option" value="">Lakh</option>
                                                                                        <option>0 lakh</option>
                                                                                        <option>1 lakh</option>
                                                                                        <option>2 lakh</option>
                                                                                        <option>5 lakh</option>
                                                                                        <option>4 lakh</option>
                                                                                        <option>5 lakh</option>
                                                                                    </select>
                                                                                    <i class="fs-input-icon fa fa-dollar-sign"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <div class="ls-inputicon-box">  
                                                                                    <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-Thousand" data-bv-field="size">
                                                                                        <option class="bs-title-option" value="">Thousand</option>
                                                                                        <option> 05 Thousand </option>
                                                                                        <option> 10 Thousand </option>
                                                                                        <option> 15 Thousand </option>
                                                                                        <option> 20 Thousand </option>
                                                                                        <option> 25 Thousand </option>
                                                                                        <option> 30 Thousand </option>
                                                                                        <option> 35 Thousand </option>
                                                                                        <option> 40 Thousand </option>
                                                                                        <option> 45 Thousand </option>
                                                                                        <option> 50 Thousand </option>
                                                                                        </select>
                                                                                    <i class="fs-input-icon fa fa-dollar-sign"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->


                                                            <div class="col-xl-12 col-lg-12">
                                                                <div>
                                                                    <label>Working Since</label>
                                                                    <div class="row">

                                                                        <div class="col-xl-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <div class="ls-inputicon-box">  
                                                                                    <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-Year_1" data-bv-field="size">
                                                                                        <option class="bs-title-option" value="">Year</option>
                                                                                        <option>0</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                    </select>
                                                                                    <i class="fs-input-icon fa fa-calendar"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <div class="ls-inputicon-box">  
                                                                                    <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-Month_1" data-bv-field="size">
                                                                                        <option class="bs-title-option" value="">Month</option>
                                                                                        <option> 1 </option>
                                                                                        <option> 2 </option>
                                                                                        <option> 3 </option>
                                                                                        <option> 4 </option>
                                                                                        <option> 5 </option>
                                                                                        <option> 6 </option>
                                                                                        <option> 7 </option>
                                                                                        <option> 8 </option>
                                                                                        <option> 9 </option>
                                                                                        <option> 10 </option>
                                                                                        <option> 11 </option>
                                                                                        <option> 12 </option>
                                                                                        </select>
                                                                                    <i class="fs-input-icon fa fa-calendar"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Current Location</label>
                                                                    <div class="ls-inputicon-box"> 
                                                                        <input class="form-control" name="company_phone" type="text" placeholder="Tell us about your current city">
                                                                        <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Duration of Notice Period</label>
                                                                    <div class="ls-inputicon-box">  
                                                                        <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-Days_1" data-bv-field="size">
                                                                            <option class="bs-title-option" value="">Days</option>
                                                                            <option>05 Days</option>
                                                                            <option>10 Days</option>
                                                                            <option>15 Days</option>
                                                                            <option>30 Days</option>
                                                                            <option>2 Months</option>
                                                                            <option>3 Months</option>
                                                                        </select>
                                                                        <i class="fs-input-icon fa fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            
                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Role</label>
                                                                    <div class="ls-inputicon-box"> 
                                                                        <input class="form-control" type="text" value="your role">
                                                                        <i class="fs-input-icon fas fa-asterisk"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Industry</label>
                                                                    <div class="ls-inputicon-box"> 
                                                                        <input class="form-control" name="company_phone" type="text" placeholder="Your Industry">
                                                                        <i class="fs-input-icon fa fa-industry"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Functional Area</label>
                                                                    <div class="ls-inputicon-box"> 
                                                                        <input class="form-control" name="company_phone" type="text" placeholder="Your Department">
                                                                        <i class="fs-input-icon fa fa-industry"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Skill</label>
                                                                    <div class="ls-inputicon-box input_fields_custom"> 
                                                                        <input class="form-control" name="company_phone" type="text" placeholder="Enter Your Skill">
                                                                        <i class="fs-input-icon fa fa-user"></i>
                                                                    </div>
                                                                    <div class="text-right m-tb10">
                                                                        <button class="add_field_custom">Add More Fields <i class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Language</label>
                                                                    <div class="ls-inputicon-box input_fields_custom"> 
                                                                        <input class="form-control" name="company_phone" type="text" placeholder="Enter Languages you Know">
                                                                        <i class="fs-input-icon fa fa-user"></i>
                                                                    </div>
                                                                    <div class="text-right m-tb10">
                                                                        <button class="add_field_custom">Add More Fields <i class="fa fa-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12 col-md-12">                                  
                                                                <div class="btns-group">
                                                                  <a href="#" class="btn btn-prev">Previous</a>
                                                                  <a href="#" class="btn btn-next">Next</a>
                                                                </div>
                                                            </div>                                         
                                                        
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="Education">
                                                    
                                                        <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Highest Qualification</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_name" type="text" placeholder="Your Highest Qualification">
                                                                            <i class="fs-input-icon fa fa-user-graduate"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Course</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_Email" type="email" placeholder="Your Course">
                                                                            <i class="fs-input-icon fas fa-book"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Specialization</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_Email" type="email" placeholder="Your Specialization">
                                                                            <i class="fs-input-icon fas fa-asterisk"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>University/College</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="University/College">
                                                                            <i class="fs-input-icon fa fa-building"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Course Type</label>
                                                                        <div class="row twm-form-radio-inline">
                                                                            
                                                                            <div class="col-md-4">
                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Full_Time1">
                                                                                <label class="form-check-label" for="Full_Time1">
                                                                                    Full Time
                                                                                </label>
                                                                            </div>
        
                                                                            <div class="col-md-4">
                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                                                                <label class="form-check-label" for="flexRadioDefault4">
                                                                                    Part Time
                                                                                </label>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                                                                <label class="form-check-label" for="flexRadioDefault3">
                                                                                    Correspondence
                                                                                </label>
                                                                            </div>
        
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-xl-12 col-lg-12">
                                                            
                                                                    <div class="form-group">
                                                                        <label>Passing Year</label>
                                                                        <div class="ls-inputicon-box">  
                                                                            <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-category" data-bv-field="size">
                                                                                <option class="bs-title-option" value="">Year</option>
                                                                                <option>Select</option>
                                                                                <option>2021</option>
                                                                                <option>2021</option>
                                                                                <option>2021</option>
                                                                                <option>2021</option>
                                                                                <option>2021</option>
                                                                            </select>
                                                                            <i class="fs-input-icon fa fa-calendar"></i>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>

                                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Education</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Tell us about your current city">
                                                                            <i class="fs-input-icon fa fa-book-open"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-12 col-lg-12 col-md-12">                                  
                                                                    <div class="text-left">
                                                                        <button type="submit" class="site-button">Continue</button>
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
            <!-- Employer Account START END -->
            
     
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="footer-dark" style="background-image: url(images/f-bg.jpg);">
            <div class="container">

                <!-- NEWS LETTER SECTION START -->
                <div class="ftr-nw-content">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ftr-nw-title">
                                Join our email subscription now to get updates 
                                on new jobs and notifications.
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form>
                                <div class="ftr-nw-form">
                                    <input name="news-letter" class="form-control" placeholder="Enter Your Email" type="text">
                                    <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- NEWS LETTER SECTION END -->
                <!-- FOOTER BLOCKES START -->  
                <div class="footer-top">
                    <div class="row">

                        <div class="col-lg-3 col-md-12">
                            
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="index.html"><img src="images/logo-light.png" alt=""></a>
                                </div>
                                <p>Many desktop publishing packages and web page editors now.</p>
                                <ul class="ftr-list">
                                    <li><p><span>Address :</span>65 Sunset CA 90026, USA </p></li>
                                    <li><p><span>Email :</span>example@max.com</p></li>
                                    <li><p><span>Call :</span>555-555-1234</p></li>
                                </ul>
                            </div>                            
                            
                        </div> 

                        <div class="col-lg-9 col-md-12">
                            <div class="row">
                               
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Candidate</h3>
                                        <ul>
                                            <li><a href="dashboard.html">User Dashboard</a></li>
                                            <li><a href="dash-resume-alert.html">Alert resume</a></li>
                                            <li><a href="candidate-grid.html">Candidates</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog single</a></li>
                                        </ul>
                                    </div>
                                </div>
                            
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Employers</h3>
                                        <ul>
                                            <li><a href="dash-post-job.html">Post Jobs</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="job-list.html">Jobs Listing</a></li>
                                            <li><a href="job-detail.html">Jobs details</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Helpful Resources</h3>
                                        <ul>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="employer-detail.html">Employer detail</a></li>
                                            <li><a href="dash-my-profile.html">Profile</a></li>
                                            <li><a href="error-404.html">404 Page</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">  
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Quick Links</h3>
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-1.html">About us</a></li>
                                            <li><a href="dash-bookmark.html">Bookmark</a></li>
                                            <li><a href="job-grid.html">Jobs</a></li>
                                            <li><a href="employer-list.html">Employer</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>  

                        </div> 

                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                <div class="footer-bottom">
                
                    <div class="footer-bottom-info">
                    
                        <div class="footer-copy-right">
                            <span class="copyrights-text">Copyright © 2023 by thewebmax All Rights Reserved.</span>
                        </div>
                        <ul class="social-icons">
                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                        </ul>
                        
                    </div>
                    
                </div>

            </div>
    
        </footer>
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
                                <p>Sign Up and get access to all the features of Jobzilla</p>
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
<script  src="js/jquery-3.6.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script  src="js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
<script  src="js/bootstrap-select.min.js"></script><!-- Form js -->
<script  src="js/dropzone.js"></script><!-- IMAGE UPLOAD  -->
<script  src="js/jquery.scrollbar.js"></script><!-- scroller -->
<script  src="js/bootstrap-datepicker.js"></script><!-- scroller -->
<script  src="js/jquery.dataTables.min.js"></script><!-- Datatable -->
<script  src="js/dataTables.bootstrap5.min.js"></script><!-- Datatable -->
<script  src="js/chart.js"></script><!-- Chart -->
<script  src="js/bootstrap-slider.min"></script><!-- Price range slider -->
<script  src="js/swiper-bundle.min"></script><!-- Swiper JS -->
<script  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->



</body>

</html>
