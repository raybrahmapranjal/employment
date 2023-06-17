<?php 

session_start();
?>
<?php include("include/header.php"); ?>
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
        <?php include("include/navbar.php"); ?>
             
          
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
                                <div class="" style="color:red;">
                                 <?php if (isset($_SESSION['errorLogin'])) {
                                    echo $_SESSION['errorLogin'];
                                    unset($_SESSION['errorLogin']);

                                } 
                                    
                                ?>
                                </div>
                                <h2 class="wt-title">Registration</h2>

                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li> Registration</li>
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
                                            <div class="row ">
                        
                        <div class="col-lg-6 col-md-6">
                                           
                                        </div>
                                         <div class="col-lg-6 col-md-6">
                                             <ul class="nav " id="myTab3" role="tablist" style="margin-top: -20px">

                                                    <li class="nav-item">
                                                        <button class="site-button active"style="padding: 5px 15px;margin-top: 10px;margin-right: 10px;font-size: 14px;background-color: "  data-bs-toggle="modal" href="#registerPop_up" type="button" role="tab" >Apply with Adhar</button>
                                                    </li>

                                                    <li class="nav-item">
                                                        <button class="site-button" data-bs-toggle="modal" href="#registerPop_up" type="button" role="tab"  style="padding: 5px 15px;margin-top: 10px;margin-right: 10px;font-size: 14px">Apply without Adhar</button>
                                                    </li>

                                                    <li class="nav-item">
                                                      <a href="newregister.php" style="padding: 5px 15px;margin-top: 10px;font-size: 14px;background-color: red" class="site-button">Register</a>   
                                                
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="panel-body wt-panel-body p-a20 ">

                                            

                                            <div class="twm-tabs-style-1">
                                                <ul class="nav nav-tabs" id="myTab3" role="tablist">

                                                    <li class="nav-item">
                                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#Personal" type="button" role="tab" >GUIDELINES</button>
                                                    </li>

                                                    <li class="nav-item">
                                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Employment" type="button" role="tab">REQUIREMENTS</button>
                                                    </li>

                                                    <li class="nav-item">
                                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Education" type="button" role="tab">NOTICE</button>
                                                    </li>
                                                    
                                                </ul>
                                                <div class="tab-content" id="myTab3Content">
                                                    <div class="tab-pane fade show active" id="Personal">
                                                    
                                                        <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                                      <ul type="1">
                                                                          <li>All citizens of India above the age of 14 years who are permanent residents of Assam are eligible to register their names in the Employment Exchange of the State of Assam.</li>
                                                                         <li>The candidates are eligible for Registration in one Employment Exchange only in the state, where they are permanent residents within the jurisdiction of the District.</li>
                                                                         <li>Applicants who are already employed and seeking better employment have to be registered only after production of a “No Objection Certificate” issued by the employer.</li>
                                                                         <li>All text box with asterisk (*) symbol is mandatory to filled up.</li>
                                                                         <li>Please scan all Educational Qualification (Pass Certificate & Mark sheets in chronological order from lowest level to highest level) into a single PDF and upload as one single PDF.</li>
                                                                         <li>After successfully submission of application Employment Exchange Card (X 10) will be issued to his/her registered Email.</li>
                                                                         <li>Every registrant shall renew his /her registration once in three (3) years in the due month as indicated on his/her Registration card.</li>
                                                                         <li>Failure to renew the registration even after lapse of grace period (3 months), will lead to cancellation of registration and subsequent removal from Live Register maintained in the Employment Exchange.</li>
                                                                         <li>No request for renewal of registration after the expiry of the due month and grace period shall be entertained under any circumstances.</li>
                                                                     </ul>
                                                                </div>
                                                                <div class="form-group mb-3">
                                                                    <div class=" form-check">
                                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                                        <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                                       
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        
                                                    </div>
                                                    

                                                    <div class="tab-pane fade" id="Employment">
                                                        <div class="row">

                                                            <div class="col-xl-12 col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                   <ul type="1"> 
                                                                       <li>Age Proof:- Birth Certificate/ HSLC Admit card/ School Certificate (Any one of these three documents)</li>
                                                                       <li>Proof of Residency:-
                                                                       </li>
                                                                       <ul>
                                                                           <li>
                                                                           Applicants having AADHAAR Card with permanent address within the state of Assam will be allowed to Register Online without      visiting the Employment Exchange as per Office Memorandum issued vide no. SKE. 42/2021/32 Dated Dispur the 19th July 2021. (Only for verification of the state of ASSAM) </li>
                                                                           <li>Passport/EPIC/Certified copy of Electoral Rolls/Land documents/Marriage Certificate/Electricity Bill/Driving License ( to be uploaded any one of these documents for permanent address of applicant )</li>
                                                                       </ul>
                                                                          <li>Educational Qualification Certificate:- Pass Certificate   (S) and Mark Sheet(S)</li>
                                                                          <li>Caste Certificate in cases of SC/ST/OBC/MOBC applicants   </li>
                                                                          <li>In case of P.W.D ( Persons With Disability) candidate –Disability certificate issued by competent authority.</li>
                                                                          <li>Additional Qualification Certificate ( if any)</li>
                                                                          <li>Experience Certificate ( If any)</li>
                                                                          <li>Non- Creamy Layer Certificate.</li>
                                                                   </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Education">
                                                        <div class="row">

                                                            <div class="col-xl-12 col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                   NOTICE:  It is for information to all concerned that following 3 (three ) nos. of Non AADHAAR based services under Skill, Employment & Entrepreneurship Department are applicable only for those candidates whose AADHAAR Cards have been kept on hold due to NRC related issues and for the sole purpose of applying in the Class III/ IV recruitment process. They will approach the concerned Employment Exchanges for manual verification of documents if eligible otherwise.
                                                                    </div>
                                                                    <ul type="1">
                                                                        <li>
                                                                       Registration of Employment Seeker in Employment Exchange.
                                                                       </li>
                                                                       <li>
                                                                        Renewal of Registration Card of Employment Seeker in Employment Exchange.
                                                                       </li>
                                                                       <li>
                                                                       Re-Registration of Employment Seeker in Employment Exchange.
                                                                       </li>
                                                                       </ul>

                                                                       Rest of the applicants may apply AADHAAR based registration.
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
        <!-- register -->
            <div class="modal fade twm-sign-up" id="registerPop_up" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form>

                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel">Please Login</h2>
                                 <hr>
                                <!-- <p>Sign Up and get access to all the features of Employment</p> -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    
                                    <div class="tab-content" id="myTabContent">
                                    <!--Signup Candidate Content-->  
                                    <div class="tab-pane fade show active" id="sign-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="LoginID">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="OTP/Password">
                                                </div>
                                            </div>
                                            
                                            
                                            
                                           <!--  <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Login</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    

                            <div class="modal-footer">
                                <span class="modal-f-title"> or </span>
                                <h4><a href="">forgot password?</a></h4>
                            </div>


                        </form>
                    </div>
                </div>
                
            </div>
            <!-- register -->

           
            

    </div>


<!-- JAVASCRIPT  FILES ========================================= --> 


<?php include("include/footer_javascipt.php"); ?>

</body>



</html>
