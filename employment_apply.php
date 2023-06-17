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
                                                                         <li>jlkn lk </li>
                                                                         <li>oiuho</li>
                                                                         <li>jkbjnjoklb</li>
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

                                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                   ksbcvdiksu
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Education">
                                                        <div class="row">

                                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                   iopyutuy
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
