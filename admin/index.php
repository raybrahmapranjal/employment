

<?php include("include/header.php"); ?>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    
<?php include("include/nav.php"); ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


   <!-- sidebar -->
   <?php include("include/sidebar.php");?>
   <!-- sidebar ends -->
        

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
      <div class="content-header row">

    </div>

<!-- Statistics -->
<div class="row match-height">
    <div class="col-xl-12 col-lg-12">
            <div class="card">
               
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">WELCOME !</h4>
                        <p class="card-text"><?php echo $_SESSION['this_user_username']; ?></p>
                        <div class="form-group">
                          <form method="POST" action="session/admin_destroy.php">
                              <button type="submit" class="btn mr-1 mb-1 btn-success btn-sm" name="admin_destroy">Admin Logout</button>
                          </form>

                            
                        </div>
                    </div>
                 
                </div>
            </div>
    </div>
</div>
<!--/ Statistics -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>