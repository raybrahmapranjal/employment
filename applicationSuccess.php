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
     <!-- navbar START -->
        <?php include("include/navbar.php"); ?>
             
          
        <!-- navbar END -->



      
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- OUR BLOG START -->
            <div class="section-full site-bg-gray twm-c-soon-area" style="background-image:url(images/background/bg-3.jpg)">
               
                <div class="twm-c-soon-wrap">
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="twm-c-soon-content">
                                
                                <h2 class="twm-c-soon-title"><span class="site-text-primary">Application  Submitted!</span></h2>
                                  
                            </div>
                            
                        </div>

                    </div>
                </div>

            </div>   
            <!-- OUR BLOG END -->
          
            
     
        </div>
        <!-- CONTENT END -->


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
<script>
function myTimer() {
  var ending = jQuery("#timer").attr("data-endtime"),
      endTime = new Date(ending);
  endTime = Date.parse(endTime) / 1000;

  var now = new Date();
  now = Date.parse(now) / 1000;

  var timeLeft = endTime - now;

  var days = Math.floor(timeLeft / 86400);
  var hours = Math.floor((timeLeft - days * 86400) / 3600);
  var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
  var seconds = Math.floor(
    timeLeft - days * 86400 - hours * 3600 - minutes * 60
  );

  if (days < "10") {
    days = "0" + days;
  }
  if (days < "1") {
    days = "0";
  }
  if (hours < "10") {
    hours = "0" + hours;
  }
  if (hours < "1") {
    hours = "0";
  }
  if (minutes < "10") {
    minutes = "0" + minutes;
  }
  if (minutes < "1") {
    minutes = "0";
  }
  if (seconds < "10") {
    seconds = "0" + seconds;
  }
  if (seconds < "1") {
    seconds = "0";
  }

  $("#timer").html(
    "<span id='days'>" +
    days +
    "<span>Days</span></span>" +
    "<span id='hours'>" +
    hours +
    "<span>Hrs</span></span>" +
    "<span id='minutes'>" +
    minutes +
    "<span>Mins</span></span>" +
    "<span id='seconds'>" +
    seconds +
    "<span>Secs</span></span>"
  );
}

setInterval(function() {
  myTimer();
}, 1000);

</script>
</body>

</html>
