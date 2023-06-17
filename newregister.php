<?php 
session_start();

?>
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
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">New Registration</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>New Registration</li>
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
                                            <h4 class="panel-tittle m-a0">Registration form</h4>
                                         
                                        </div>
                                        <div class="modal-body">
                    <h4 style="color:#000">
                        <?php 
                    if (isset($_SESSION['imageMessage'])) {
                        echo $_SESSION['imageMessage']."<br>";
                        

                    } 
                    if (isset($_SESSION['phoneMessage'])) {
                        echo $_SESSION['phoneMessage']."<br>";
                        
                    }
                    if (isset($_SESSION['emailMessage'])) {
                        echo $_SESSION['emailMessage']."<br>";
                        
                    }
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message']."<br>";
                        
                    }

                ?>
                    </h4>
                    
                </div>
                
                                        <div class="panel-body wt-panel-body p-a20 ">

                                            

                                            <div class="twm-tabs-style-1">
                                                <form action="form/emp_register.php" method="post" class="form">
                                                          
                                                        
                                                         
                                                          <!-- Steps -->
                                                        <div class="form-step form-step-active">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Full Name</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control"  name="name" type="text" placeholder="Enter Your name" required>
                                                                            <i class="fs-input-icon fa fa-user "></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control"onchange = "validateEmail(this.value);" name="email" type="text" placeholder="email" required>
                                                                            <i class="fs-input-icon fas fa-at"></i>
                                                                            <i id = "email-message"></i>
                                                                        </div>
                                                                   
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Mobile no.</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="mobile" onchange = "validPhone(this.value);" type="text" placeholder="Enter Mobile no." required>
                                                                            <i class="fs-input-icon fa fa-phone "></i>
                                                                            <i id = "phone-message"></i>
                                                                        </div>
                                                                    
                                                                    </div>

                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Password</label>
                                                                        <div class="ls-inputicon-box"> 
                                                                            <input class="form-control" name="password" type="text" placeholder="enter password" required>
                                                                            <i class="fs-input-icon fa fa-user "></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>State</label>
                                                                    <div class="ls-inputicon-box">  
                                                                        <select class="wt-select-box selectpicker"  data-live-search="true" title="" id="s-Days_1" data-bv-field="size" name="select" required>
                                                                            <option class="bs-title-option" value="">Select State</option>
                                                                            <option value="assam">ASSAM</option>
                                                                            
                                                                            
                                                                        </select>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                         <button class="site-button" name="participantSubmit" id="participantSubmit" class="btn"style="padding: 10px 15px;margin-top: 10px;margin-right: 10px;font-size: 14px;background-color: "  >register</button>
                                              
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
             <!-- Employer Account START END -->
          
            
     
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <?php include("include/footer.php"); ?>
        <!-- FOOTER END -->


    </div>


<!-- JAVASCRIPT  FILES ========================================= --> 


<?php include("include/footer_javascipt.php"); ?>
<script type="text/javascript">
   function validPhone(val) {

        if (val != "") {

            $('#phone-message').css("color", 'black');

            $('#phone-message').html("loading...");

            $.ajax ({

                url: 'form/validPhone.php',

                data: {

                    check: val

                },

                dataType: 'text',

                method: 'get',

                success: function (response) {

                    if (response == "invalid") {
                      $('#partcipantSubmit').attr("disabled", true);

                      $('#phone-message').css("color", 'red');

                      $('#phone-message').html("Invalid Phone Number.");

                    } else if (response == "Not available") {

                        $('#partcipantSubmit').attr("disabled", true);

                        $('#phone-message').css("color", 'red');

                        $('#phone-message').html("Sorry! this phone already exists");

                    } else {

                        $('#partcipantSubmit').attr("disabled", false);

                        $('#phone-message').css("color", 'green');

                        $('#phone-message').html("phone  available");

                    } 

                }

            });

        } else {

            $('#phone-message').css("color", 'red');

            $('#phone-message').html("Please enter a phone");

        }

    }
  
   function validateEmail(val) {

        if (val != "") {

            $('#email-message').css("color", 'black');

            $('#email-message').html("loading...");

            $.ajax ({

                url: 'form/validEmail.php',

                data: {

                    email: val

                },

                dataType: 'text',

                method: 'get',

                success: function (response) {
                     if (response == "invalid") {
                      $('#submit').attr("disabled", true);

                      $('#email-message').css("color", 'red');

                      $('#email-message').html("Invalid email");

                    } else if (response == "already exists") {

                        $('#partcipantSubmit').attr("disabled", true);

                        $('#email-message').css("color", 'red');

                        $('#email-message').html("Sorry! email already exists");

                    } else {

                        $('#partcipantSubmit').attr("disabled", false);

                        $('#email-message').css("color", 'green');

                        $('#email-message').html("email  available");

                    }

                }

            });

        } else {

            $('#email-message').css("color", 'red');

            $('#email-message').html("Please enter a email");
            

        }

    }
  </script>
  <?php 
  if (isset($_SESSION['imageMessage']) ||isset($_SESSION['phoneMessage']) || isset($_SESSION['emailMessage']) || isset($_SESSION['message']) ) {
    echo '<script>$("#errorModal").modal();</script>';


    unset ($_SESSION['imageMessage']);
    unset ($_SESSION['phoneMessage']);
    unset ($_SESSION['emailMessage']);
    unset ($_SESSION['message']);
  }
  ?>

</body>



</html>
