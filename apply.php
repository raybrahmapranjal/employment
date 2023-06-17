<?php include("include/header.php"); ?>

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
        <?php include("include/navbar.php"); ?>
             
          
        <!-- HEADER END -->

      
        <!-- CONTENT START -->
        <div class="page-content">

            

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
                                                <ul class="nav nav-tabs" id="myTab3" role="tablist">

                                                    <li class="nav-item">
                                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#Personal" type="button" role="tab" >Personal</button>
                                                    </li>

                                                    <li class="nav-item">
                                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Employment" type="button" role="tab">Employment</button>
                                                    </li>

                                                    <li class="nav-item">
                                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Education" type="button" role="tab">Education</button>
                                                    </li>
                                                    
                                                </ul>
                                                <div class="tab-content" id="myTab3Content">
                                                    <div class="tab-pane fade show active" id="Personal">
                                                    
                                                        <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Your Name</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_name" type="text" placeholder="Devid Smith">
                                                                            <i class="fs-input-icon fa fa-user "></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Email Address</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_Email" type="email" placeholder="Devid@example.com">
                                                                            <i class="fs-input-icon fas fa-at"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Create Password</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_Email" type="email" placeholder="Create Password">
                                                                            <i class="fs-input-icon fas fa-asterisk"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Phone Number</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="(251) 1234-456-7890">
                                                                            <i class="fs-input-icon fa fa-phone-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Current City</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="company_phone" type="text" placeholder="Tell us about your current city">
                                                                            <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Upload Resume</label>
                                                                        <form action="https://thewebmax.org/jobzilla/upload.php" class="dropzone"></form>
                                                                        <small>If you do not have a resume document, you may write your brief professional profile <a class="site-text-primary" href="javascript:void(0);">here</a></small>
                                                                    </div>                                    
                                                                </div>

                                                                <div class="col-xl-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                            I agree to the Terms and Conditions and Privacy Policy.
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                                
                                                                <div class="col-xl-12 col-lg-12 col-md-12">                                  
                                                                    <div class="text-left">
                                                                        <button type="submit" class="site-button">Register Now</button>
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

                                                            <div class="col-xl-12 col-lg-12">
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
                                                            </div>


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

                                                            <div class="col-xl-12 col-lg-12 col-md-12">
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
                                                            </div>
                                                            
                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Skills</label>
                                                                    <div class="ls-inputicon-box"> 
                                                                        <input class="form-control" type="text" value="Finance, Sales, Retail, Engineering">
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
                                                                    <label>Role</label>
                                                                    <div class="ls-inputicon-box input_fields_custom"> 
                                                                        <input class="form-control" name="company_phone" type="text" placeholder="Select the role that you work in">
                                                                        <i class="fs-input-icon fa fa-user"></i>
                                                                    </div>
                                                                    <div class="text-right m-tb10">
                                                                        <button class="add_field_custom">Add More Fields <i class="fa fa-plus"></i></button>
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


<?php include("include/footer_javascipt.php"); ?>

</body>



</html>
