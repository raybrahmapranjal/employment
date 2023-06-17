<?php include("include/header.php");?>

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
                                <h2 class="wt-title">Candidate Profile</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Candidate Profile</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="section-full p-t120  p-b90 site-bg-white">
                

                <div class="container">
                    <div class="row">
                        
                        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                            <div class="side-bar-st-1">
                                
                                <div class="twm-candidate-profile-pic">
                                    
                                    <img src="images/user-avtar/pic4.jpg" alt="">
                                    <div class="upload-btn-wrapper">
                                        
                                        <div id="upload-image-grid"></div>
                                        <button class="site-button button-sm">Upload Photo</button>
                                        <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
                                    </div>
                                    
                                </div>
                                <div class="twm-mid-content text-center">
                                    <a href="candidate-detail.html" class="twm-job-title">
                                        <h4>Randall Henderson </h4>
                                    </a>
                                    <p>IT Contractor</p>
                                </div>
                               
                                <div class="twm-nav-list-1">
                                    <ul>
                                        <li><a href="candidate-dashboard.html"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                        <li class="active"><a href="candidate-profile.html"><i class="fa fa-user"></i> My Pfofile</a></li>
                                        
                                    </ul>
                                </div>
                                
                            </div>

                        </div>

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <!--Filter Short By-->
                            <div class="twm-right-section-panel site-bg-gray">
                                <form>
                                    
                
                                    <!--Basic Information-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0">Basic Informations</h4>
                                        </div>
                                        <div class="panel-body wt-panel-body p-a20 m-b30 ">
                                            
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
                                                            <label>Phone</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="company_phone" type="text" placeholder="(251) 1234-456-7890">
                                                                <i class="fs-input-icon fa fa-phone-alt"></i>
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
                                                            <label>Website</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="company_website" type="text" placeholder="https://devsmith.net/">
                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                
                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Qualification</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="company_since" type="text" placeholder="BTech">
                                                                <i class="fs-input-icon fa fa-user-graduate"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Language</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" name="company_since" type="text" placeholder="e.x English, Spanish">
                                                                <i class="fs-input-icon fa fa-language"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Job Category</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="company_since" type="text" placeholder="IT & Software">
                                                                <i class="fs-input-icon fa fa-border-all"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Experience</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="company_since" type="text" placeholder="05 Years">
                                                                <i class="fs-input-icon fa fa-user-edit"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Current Salary</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="company_since" type="text" placeholder="65K">
                                                                <i class="fs-input-icon fa fa-dollar-sign"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Expected Salary</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="company_since" type="text" placeholder="75K">
                                                                <i class="fs-input-icon fa fa-dollar-sign"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Age</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="company_since" type="text" placeholder="35 Years">
                                                                <i class="fs-input-icon fa fa-child"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                

                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Country</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="company_since" type="text" placeholder="USA">
                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>City</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="company_since" type="text" placeholder="Texas">
                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Postcode</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="company_since" type="text" placeholder="75462">
                                                                <i class="fs-input-icon fas fa-map-pin"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Full Address</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="company_since" type="text" placeholder="1363-1385 Sunset Blvd Angeles, CA 90026 ,USA">
                                                                <i class="fs-input-icon fas fa-map-marker-alt"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>


                 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea class="form-control" rows="3">Greetings! when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</textarea>
                                                        </div>
                                                    </div>
                                                    
                                                                                                                
                                                    <div class="col-lg-12 col-md-12">                                   
                                                        <div class="text-left">
                                                            <button type="submit" class="site-button">Save Changes</button>
                                                        </div>
                                                    </div> 
                                                                                        
                                                
                                            </div>
                                                    
                                        </div>
                                    </div>
                
                                    <!--Social Network-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0">Social Network</h4>
                                        </div>
                                        <div class="panel-body wt-panel-body p-a20 m-b30 ">
                                            
                                            <div class="row">
                                                    
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Facebook</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.facebook.com/">
                                                                <i class="fs-input-icon fab fa-facebook-f"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-6 col-md-12">    
                                                        <div class="form-group">
                                                            <label>Twitter</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://twitter.com/">
                                                                <i class="fs-input-icon fab fa-twitter"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-6 col-md-12">    
                                                        <div class="form-group">
                                                            <label>linkedin</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://in.linkedin.com/">
                                                                <i class="fs-input-icon fab fa-linkedin-in"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-6 col-md-12">     
                                                        <div class="form-group">
                                                            <label>Whatsapp</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.whatsapp.com/">
                                                                <i class="fs-input-icon fab fa-whatsapp"></i>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    
                                                    <div class="col-xl-4 col-lg-6 col-md-12">                               
                                                        <div class="form-group">
                                                            <label>Instagram</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.instagram.com/">
                                                                <i class="fs-input-icon fab fa-instagram"></i>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                        
                                                    <div class="col-xl-4 col-lg-6 col-md-12">    
                                                        <div class="form-group">
                                                            <label>Pinterest</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://in.pinterest.com/">
                                                                <i class="fs-input-icon fab fa-pinterest-p"></i>
                                                            </div>
                                                        </div>                 
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-6 col-md-12">    
                                                        <div class="form-group">
                                                            <label>Tumblr</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.tumblr.com/">
                                                                <i class="fs-input-icon fab fa-tumblr"></i>
                                                            </div>
                                                        </div>                                                                                          
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-6 col-md-12">    
                                                        <div class="form-group">
                                                            <label>Youtube</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control wt-form-control" name="company_name" type="text" placeholder="https://www.youtube.com/">
                                                                <i class="fs-input-icon fab fa-youtube"></i>
                                                            </div>
                                                        </div>                  
                                                    </div> 
                                                                                                                
                                                <div class="col-lg-12 col-md-12">                                   
                                                        <div class="text-left">
                                                            <button type="submit" class="site-button">Save Changes</button>
                                                        </div>
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
            <!-- OUR BLOG END -->
          
            
     
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <?php include("include/footer.php");?>
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
