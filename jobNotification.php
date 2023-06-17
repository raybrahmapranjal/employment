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

                

            
 
    
        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Job Notification</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Job Notification</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

           
            
            <!-- HOW IT WORK SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area2">
                        
                <div class="container">
                    <div class="row">
                        
                           <!--Search Bar-->
                                <div class="twm-search-bar-2-wrap">
                                    <div class="container">
                                        <div class="twm-search-bar-2-inner">

                                            <div class="row">

                                                <div class="col-lg-12 col-md-12">
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
                                                                    <button type="button" class="site-button">search</button>
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

                   
            
                    <!-- FOOTER START -->
                    <?php include("include/footer.php"); ?>
                    <!-- FOOTER END -->
                    

        </div>


<?php include("include/footer_javascipt.php"); ?>



</body>

</html>
