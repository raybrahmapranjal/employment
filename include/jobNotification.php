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
       <?php include("navbar.php"); ?>

                <!-- SITE Search -->
                <div id="search"> 
                    <span class="close"></span>
                    <form role="search" id="searchform" action="https://thewebmax.org/search" method="get" class="radius-xl">
                        <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                        <span class="input-group-append">
                            <button type="button" class="search-btn">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </span>
                    </form>
                </div> 
            </div>



            
             


            
        </header>
        <!-- HEADER END -->
    
        <!-- CONTENT START -->
        <div class="page-content">

            <div class="twm-home2-banner-section site-bg-gray bg-cover" style="background-image:url(images/main-slider/slider2/bg1.jpg)">
                <div class="row">
                    
                    <!--Left Section-->
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="twm-bnr-left-section">
                            <div class="twm-bnr-title-small">We Have <span class="site-text-secondry">208,000+</span> Live Jobs</div>
                            <div class="twm-bnr-title-large">Your <span class="site-text-primary">Dream Job </span> in one place</div> 
                            <div class="twm-bnr-discription">Find jobs that match your interests with us. Jobzilla provides a place you to find your Job.</div>
                            <a href="job-list.html" class="site-button">Get Started</a>
                        </div>
                    </div>

                    <!--right Section-->
                    <div class="col-xl-6 col-lg-6 col-md-12 twm-bnr-right-section">
                        <div class="twm-bnr2-right-content">

                            <div class="twm-img-bg-circle-area2">
                                <div class="twm-outline-ring-wrap">
                                    <div class="twm-outline-ring-dott-wrap">
                                       <span class="outline-dot-1"></span>
                                       <span class="outline-dot-2"></span>
                                       <span class="outline-dot-3"></span>
                                       <!--Samll Ring Left-->
                                       <div class="twm-small-ring-l scale-up-center"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="twm-home-2-bnr-images">
                                <div class="bnr-image-1">
                                    <img src="images/main-slider/slider2/right-pic-1.jpg" alt="">
                                </div>
                                <div class="bnr-image-2">
                                    <img src="images/main-slider/slider2/right-pic-2.jpg" alt="">
                                </div>
                                <div class="twm-small-ring-2 scale-up-center"></div>
                            </div>

                            <!--icon-block-1-->
                            <div class="twm-bnr-blocks twm-bnr-blocks-position-1">
                                <div class="twm-icon">
                                    <img src="images/main-slider/slider2/icon-1.png" alt="">
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-sky">
                                        <span class="counter">12</span>K+
                                    </div>
                                    <p class="icon-content-info">Companies Jobs</p>
                                </div>
                            </div>

                            <!--icon-block-2-->
                            <div class="twm-bnr-blocks twm-bnr-blocks-position-2">
                                <div class="twm-icon pink">
                                    <img src="images/main-slider/slider2/icon-2.png" alt="">
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-pink">
                                        <span class="counter">98</span> +
                                    </div>
                                    <p class="icon-content-info">Job For Countries </p>
                                </div>
                            </div>

                            <!--icon-block-3-->
                            <div class="twm-bnr-blocks-3 twm-bnr-blocks-position-3">
                                <div class="twm-pics">
                                    <span><img src="images/main-slider/slider2/user/u-1.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-2.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-3.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-4.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-5.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-6.jpg" alt=""></span>
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-green">
                                        <span class="counter">3</span>K+
                                    </div>
                                    <p class="icon-content-info">Jobs Done</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                
            </div>
            <!--Search Bar-->
            <div class="twm-search-bar-2-wrap">
                <div class="container">
                    <div class="twm-search-bar-2-inner">

                        <div class="row">

                            <div class="col-lg-9 col-md-12">
                                <div class="twm-bnr-search-bar">
                                    <form>
                                        <div class="row">
                                            <!--Title-->
                                            <div class="form-group col-lg-3 col-md-6">
                                                <label>What</label>
                                                <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-Job_Title" data-bv-field="size">
                                                    <option disabled selected value="">Select Category</option>
                                                    <option selected>Job Title</option>
                                                    <option>Web Designer</option>
                                                    <option>Developer</option>
                                                    <option>Acountant</option>
                                                </select>
                                            </div>

                                            <!--All Category-->
                                            <div class="form-group col-lg-3 col-md-6">
                                                <label>Type</label>
                                                <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                                                    <option disabled selected value="">Select Category</option>
                                                    <option selected>All Category</option>
                                                    <option>Web Designer</option>
                                                    <option>Developer</option>
                                                    <option>Acountant</option>
                                                </select>
                                            </div>

                                            <!--Location-->
                                            <div class="form-group col-lg-3 col-md-6">
                                                <label>Location</label>
                                                <div class="twm-inputicon-box">
                                                    <input name="username" type="text" required class="form-control" placeholder="Location">
                                                    <i class="twm-input-icon fas fa-map-marker-alt"></i>
                                                </div>
                                            </div>

                                            <!--Find job btn-->
                                            <div class="form-group col-lg-3 col-md-6">
                                                <button type="button" class="site-button">Find Job</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="twm-trusted-by-wrap">
                                    <div class="twm-trusted-by-title">Trusted By :</div>
                                    <div class="owl-carousel trusted-logo owl-btn-vertical-center">
                            
                                        <div class="item">
                                            <div class="twm-trusted-logo">
                                                <a href="employer-list.html">
                                                    <img src="images/trusted/logo-1.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="twm-trusted-logo">
                                                <a href="employer-list.html">
                                                    <img src="images/trusted/logo-2.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="twm-trusted-logo">
                                                <a href="employer-list.html">
                                                    <img src="images/trusted/logo-3.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="twm-trusted-logo">
                                                <a href="employer-list.html">
                                                    <img src="images/trusted/logo-1.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="twm-trusted-logo">
                                                <a href="employer-list.html">
                                                    <img src="images/trusted/logo-2.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <div class="twm-trusted-logo">
                                                <a href="employer-list.html">
                                                    <img src="images/trusted/logo-3.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                       
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="twm-bnr-popular-search">
                            <span class="twm-title">Popular Searches:</span>
                            <a href="job-list.html">Developer</a> ,
                            <a href="job-list.html">Designer</a> ,
                            <a href="job-list.html">Architect</a> ,
                            <a href="job-list.html">Engineer</a> ,
                            <a href="job-list.html">PHP</a> ,
                            <a href="job-list.html">Banking</a> ,
                            <a href="job-list.html">Ios</a> ,
                            <a href="job-list.html">Freelance</a> ,
                            <a href="job-list.html">Writing</a> ,
                            <a href="job-list.html">Accountancy</a>...
                        </div>
                    </div>
                </div>
            </div>

            <!-- HOW IT WORK SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area2">
                        
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                    <div>How It Works </div>                                
                                    </div>
                                    <h2 class="wt-title">Follow our steps we will help you.</h2>
                                    
                                </div>
                                <ul class="description-list">
                                    <li>
                                        <i class="feather-check"></i>
                                        Trusted & Quality Job 
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                        International Job 
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                        No Extra Charge 
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                        Top Companies 
                                    </li>
                                </ul>                  
                            <!-- TITLE END-->
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="twm-w-process-steps-2-wrap">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-sky-light bg-sky-light-shadow">
                                                <span class="twm-large-number text-clr-sky">01</span>
                                                <div class="twm-media">
                                                    <span><img src="images/work-process/icon1.png" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Register<br>Your Account</h4>
                                                <p>You need to create an account to find the best and preferred job.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
        
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-yellow-light bg-yellow-light-shadow">
                                                <span class="twm-large-number text-clr-yellow">02</span>
                                                <div class="twm-media">
                                                    <span><img src="images/work-process/icon4.png" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Search <br>
                                                    Your Job</h4>                                                
                                                <p>You need to create an account to find the best and preferred job.</p>
                                            </div>
                                        
                                        </div>
                                    </div>
        
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-pink-light bg-pink-light-shadow">
                                                <span class="twm-large-number text-clr-pink">03</span>
                                                <div class="twm-media">
                                                    <span><img src="images/work-process/icon3.png" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Apply <br>For Dream Job</h4>
                                                <p>You need to create an account to find the best and preferred job.</p>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-green-light bg-clr-light-shadow">
                                                <span class="twm-large-number text-clr-green">04</span>
                                                <div class="twm-media">
                                                    <span><img src="images/work-process/icon3.png" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Upload <br>Your Resume</h4>
                                                <p>You need to create an account to find the best and preferred job.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="twm-how-it-work-section">
                        
                    </div>                  
                </div>

            </div>   
            <!-- HOW IT WORK SECTION END -->

            <!-- JOBS CATEGORIES SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-gray twm-job-categories-area2">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer">
                    <div class="wt-small-separator site-text-primary">
                       <div>Jobs by Categories</div>                                
                    </div>
                    <h2 class="wt-title">Choose Your Desire Category</h2>
                </div>                  
                <!-- TITLE END--> 
                
                <div class="container">

                    <div class="twm-job-categories-section-2">
                       
                        <div class="job-categories-style1 m-b30">
                            <div class="row">
                            
                                <!-- COLUMNS 1 --> 
                                <div class="col-lg-3 col-md-6">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div class="flaticon-dashboard"></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">9,185 Jobs</div>
                                            <a href="job-detail.html">Business Development</a>
                                        </div>                               
                                    </div>
                                </div>

                                <!-- COLUMNS 2 --> 
                                <div class="col-lg-3 col-md-6">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div class="flaticon-project-management"></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">3,205 Jobs</div>
                                            <a href="job-detail.html">Project Management</a>
                                        </div>                               
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 3 --> 
                                <div class="col-lg-3 col-md-6">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div class="flaticon-note"></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">2,100 Jobs</div>
                                            <a href="job-detail.html">Content Writer</a>
                                        </div>                               
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 4 --> 
                                <div class="col-lg-3 col-md-6">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div class="flaticon-customer-support"></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">1,500 Jobs</div>
                                            <a href="job-detail.html">Costomer Services</a>
                                        </div>                               
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 5 --> 
                                <div class="col-lg-3 col-md-6">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div class="flaticon-bars"></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">9,185 Jobs</div>
                                            <a href="job-detail.html">Finance</a>
                                        </div>                               
                                    </div>
                                </div>

                                <!-- COLUMNS 6 --> 
                                <div class="col-lg-3 col-md-6">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div class="flaticon-user"></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">3,205 Jobs</div>
                                            <a href="job-detail.html">Marketing</a>
                                        </div>                               
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 7 --> 
                                <div class="col-lg-3 col-md-6">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div class="flaticon-computer"></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">2,100 Jobs</div>
                                            <a href="job-detail.html">Design & Art</a>
                                        </div>                               
                                    </div>
                                </div>
                                
                                <!-- COLUMNS 8 --> 
                                <div class="col-lg-3 col-md-6">
                                    <div class="job-categories-block-2 m-b30">
                                        <div class="twm-media">
                                            <div class="flaticon-coding"></div>
                                        </div>                                   
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">1,500 Jobs</div>
                                            <a href="job-detail.html">Web Development</a>
                                        </div>                               
                                    </div>
                                </div>                                         

                            </div>
                        </div>

                        <div class="text-center job-categories-btn">
                            <a href="job-list.html" class=" site-button">All Categories</a>
                        </div>

                    </div>

                </div>

            </div>   
            <!-- JOBS CATEGORIES SECTION END -->

            <!-- EXPLORE NEW LIFE START -->
            <div class="section-full p-t120 p-b120 site-bg-white twm-explore-area2">
                <div class="container">

                    <div class="section-content">
                        <div class="twm-explore-content-2">
                            <div class="row">

                                <div class="col-lg-8 col-md-12">
                                    <div class="twm-explore-content-outer2">
                                        <div class="twm-explore-top-section">
                                            <div class="twm-title-small">For Employee</div>
                                            <div class="twm-title-large">
                                                <h2>We help you connect 
                                                    with the organizer</h2>
                                                <p>Get paid easily and security. Use our resources to become
                                                    independent and showcase your professional skills.</p>
                                            </div>
                                            <div class="twm-read-more">
                                                <a href="about-1.html" class="site-button">Read More</a>
                                            </div>
                                        </div>

                                        <div class="twm-explore-bottom-section">
                                            <div class="row">

                                                <!--block 1-->
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="counter-outer-two">
                                                        <div class="icon-content">
                                                            <div class="tw-count-number text-clr-yellow-2">
                                                                <span class="counter">5</span>M+</div>
                                                            <p class="icon-content-info">Million daily active users</p>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <!--block 2-->
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="counter-outer-two">
                                                        <div class="icon-content">
                                                            <div class="tw-count-number text-clr-green">
                                                                <span class="counter">9</span>K+</div>
                                                            <p class="icon-content-info">Open job positions</p>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <!--block 3-->
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="counter-outer-two">
                                                        <div class="icon-content">
                                                            <div class="tw-count-number text-clr-pink">
                                                                <span class="counter">2</span>M+</div>
                                                            <p class="icon-content-info">Million stories shared</p>
                                                        </div>
                                                    </div>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div class="twm-explore-media-wrap2">
                                        <div class="twm-media">
                                            <img src="images/gir-large-2.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- EXPLORE NEW LIFE END -->

            <!-- JOB POST START -->
            <div class="section-full p-t120 p-b90 site-bg-gray twm-bg-ring-wrap2">
                <div class="twm-bg-ring-right"></div>
                <div class="twm-bg-ring-left"></div>
                <div class="container">

                    <div class="wt-separator-two-part">
                        <div class="row wt-separator-two-part-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                    <div>All Jobs Post</div>                                
                                    </div>
                                    <h2 class="wt-title">Find Your Career You Deserve it</h2>
                                </div>                  
                                <!-- TITLE END-->
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                                <a href="job-list.html" class=" site-button">Browse All Jobs</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="section-content">
                       <div class="twm-jobs-grid-wrap">
                           <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="twm-jobs-grid-style1  m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4>Senior Web Designer , Developer</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <div class="twm-jobs-amount">$2000 - $2500 <span>/ Month</span></div>
                                            <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="twm-jobs-grid-style1 m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic2.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">15 days ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-brown">Intership</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4>Senior Rolling Stock Technician</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            <div class="twm-jobs-amount">$7 <span>/ Hour</span></div>
                                            <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="twm-jobs-grid-style1  m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic3.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">6 Month ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-purple">Fulltime</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4 class="twm-job-title">IT Department Manager</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <div class="twm-jobs-amount">$2000 - $2500 <span>/ Month</span></div>
                                            <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="twm-jobs-grid-style1 m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic4.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">2 days ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-sky">Freelancer</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4 class="twm-job-title">Art Production Specialist</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <div class="twm-jobs-amount">$1500 - $1800 <span>/ Month</span></div>
                                            <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="twm-jobs-grid-style1  m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic5.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-golden">Temporary</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4 class="twm-job-title">Recreation & Fitness Worker</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            <div class="twm-jobs-amount">$500 - $1000 <span>/ Month</span></div>
                                            <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="twm-jobs-grid-style1 m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4>Senior Web Designer , Developer</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <div class="twm-jobs-amount">$19 <span>/ Hour</span></div>
                                            <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                           
                       </div>
                    </div>
                   
                </div>
            </div>
            <!-- JOB POST END -->

            <!-- FOR EMPLOYEE START -->
            <div class="section-full p-t120 p-b120 twm-for-employee-area site-bg-white">
                <div class="container">

                    <div class="section-content">
                        <div class="row">

                            <div class="col-lg-5 col-md-12">
                                <div class="twm-explore-media-wrap">
                                    <div class="twm-media">
                                        <img src="images/boy-large.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-12">
                                <div class="twm-explore-content-outer-3">

                                    <div class="twm-explore-content-3">
                                        <div class="twm-title-small">Explore New Life</div>
                                        <div class="twm-title-large">
                                            <h2>Build your personal account profile</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                the standard dummy text ever since the  when an printer took. lorem Ipsum is 
                                                simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="twm-upload-file">
                                            <button type="button" class="site-button">Upload Your Resume <i class="feather-upload"></i></button>
                                        </div>
                                        
                                    </div>

                                    <div class="twm-l-line-1"></div>
                                    <div class="twm-l-line-2"></div>

                                </div>
                            </div>

                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- FOR EMPLOYEE END -->

            <!-- TESTIMONIAL SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-gray twm-testimonial-2-area">

                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer">
                    <div class="wt-small-separator site-text-primary">
                       <div>Clients Testimonials</div>                                
                    </div>
                    <h2 class="wt-title">What Our Customers Say About Us</h2>
                </div>                  
                <!-- TITLE END--> 

                <div class="container">

                    <div class="section-content"> 
                        
                        <div class="owl-carousel twm-testimonial-2-carousel owl-btn-bottom-center ">
                        
                            <!-- COLUMNS 1 --> 
                            <div class="item ">
                                <div class="twm-testimonial-2">
                                    <div class="twm-testimonial-2-content">
                                        <div class="twm-testi-media">
                                            <img src="images/testimonials/pic-1.png" alt="#">
                                        </div>
                                        <div class="twm-testi-content">
                                            <div class="twm-quote">
                                                <img src="images/quote-dark.png" alt="">
                                            </div>
                                            <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</div>
                                            <div class="twm-testi-detail">
                                                <div class="twm-testi-name">Nikola Tesla</div>
                                                <div class="twm-testi-position">Accountant</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNS 2 --> 
                            <div class="item ">
                                <div class="twm-testimonial-2">
                                    <div class="twm-testimonial-2-content">
                                        <div class="twm-testi-media">
                                            <img src="images/testimonials/pic-2.png" alt="#">
                                        </div>
                                        <div class="twm-testi-content">
                                            <div class="twm-quote">
                                                <img src="images/quote-dark.png" alt="">
                                            </div>
                                            <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</div>
                                            <div class="twm-testi-detail">
                                                <div class="twm-testi-name">Collis Pong</div>
                                                <div class="twm-testi-position">UI/UX Designer</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <!-- COLUMNS 3 --> 
                            <div class="item ">
                                <div class="twm-testimonial-2">
                                    <div class="twm-testimonial-2-content">
                                        <div class="twm-testi-media">
                                            <img src="images/testimonials/pic-3.png" alt="#">
                                        </div>
                                        <div class="twm-testi-content">
                                            <div class="twm-quote">
                                                <img src="images/quote-dark.png" alt="">
                                            </div>
                                            <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</div>
                                            <div class="twm-testi-detail">
                                                <div class="twm-testi-name">Nikola Tesla</div>
                                                <div class="twm-testi-position">Accountant</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <!-- COLUMNS 4 --> 
                            <div class="item ">
                                <div class="twm-testimonial-2">
                                    <div class="twm-testimonial-2-content">
                                        <div class="twm-testi-media">
                                            <img src="images/testimonials/pic-4.png" alt="#">
                                        </div>
                                        <div class="twm-testi-content">
                                            <div class="twm-quote">
                                                <img src="images/quote-dark.png" alt="">
                                            </div>
                                            <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</div>
                                            <div class="twm-testi-detail">
                                                <div class="twm-testi-name">Collis Pong</div>
                                                <div class="twm-testi-position">UI/UX Designer</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
  
                    
                        </div>
                        
                    </div>                              
                </div>
                
            </div>
            <!-- TESTIMONIAL SECTION END -->
            
            <!-- OUR BLOG START -->
            <div class="section-full p-t120 p-b90 site-bg-gray bg-cover overlay-wraper" style="background-image:url(images/background/bg-2.jpg)">
                <div class="overlay-main site-bg-primary opacity-01"></div>
                <div class="container">
                   
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>Our Blogs</div>                                
                        </div>
                        <h2 class="wt-title site-text-white">Latest Article</h2>
                        
                    </div>                  
                    <!-- TITLE END-->


                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5 col-md-12 m-b30">
                                <!--Block one-->
                                <div class="blog-post twm-blog-post-2-outer">
                                    <div class="wt-post-media">
                                        <a href="blog-single.html"><img src="images/blog/latest-2/l-1.jpg" alt=""></a>
                                    </div>                                    
                                    <div class="wt-post-info">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date">April 05, 2023</li>
                                            </ul>
                                        </div>
                                                                     
                                    <div class="wt-post-title ">
                                        <h4 class="post-title">
                                            <a href="blog-single.html">
                                                How to convince recruiters and get your 
                                                dream job. Get behind the wheel!
                                            </a>
                                        </h4>
                                    </div>
                                   
                                    <div class="wt-post-readmore ">
                                        <a href="blog-single.html" class="site-button-link site-text-secondry">Read More</a>
                                    </div>                                        
                                </div>                                
                                </div>
                            </div>
                            
                            <div class="col-lg-7 col-md-12">

                                <div class="twm-blog-post-wrap-right">
                                    <!--Block two-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b30">
                                        <div class="wt-post-info">

                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">March 05, 2023</li>
                                                    <li class="post-author">By <a href="candidate-detail.html">David Wish</a></li>
                                                </ul>
                                            </div>
                                                                        
                                            <div class="wt-post-title ">
                                                <h4 class="post-title">
                                                    <a href="blog-single.html">5 things to know about the March
                                                        2023 jobs report</a>
                                                </h4>
                                            </div>
                                            <div class="wt-post-text ">
                                                <p>
                                                    New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis.
                                                </p>
                                            </div>
                                            <div class="wt-post-readmore ">
                                                <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                            </div> 

                                        </div>                                
                                    </div>

                                    <!--Block three-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b30">
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">March 05, 2023</li>
                                                    <li class="post-author">By <a href="candidate-detail.html">Mike Doe</a></li>
                                                </ul>
                                            </div>
                                                                        
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">
                                                <a href="blog-single.html">Job Board is the most important 
                                                    sector in the world</a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text ">
                                            <p>
                                                New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis.
                                            </p>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                        </div>                                        
                                        </div> 
                                    </div>

                                    <!--Block four-->
                                    <div class="blog-post twm-blog-post-1-outer shadow-none  m-b30">
                                        <div class="wt-post-info">

                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">March 05, 2023</li>
                                                    <li class="post-author">By <a href="candidate-detail.html">David Wish</a></li>
                                                </ul>
                                            </div>
                                                                        
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">
                                                <a href="blog-single.html">5 things to know about the March
                                                    2023 jobs report</a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text ">
                                            <p>
                                                New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis.
                                            </p>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                        </div>                                        
                                        </div>                                
                                    </div>
                                </div>

                            </div>                                                        
                                                        
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- OUR BLOG END -->


        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="footer-light">
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
                                    <a href="index.html"><img src="images/logo-light-2.png" alt=""></a>
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


<!-- Mirrored from thewebmax.org/jobzilla/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2023 05:57:37 GMT -->
</html>
