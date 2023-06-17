<?php include("include/header.php"); ?>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    <?php include("include/nav.php"); ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include("include/sidebar.php");?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Add Photos</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">add photos
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Inputs start -->
<section class="basic-inputs">
  <div class="row match-height">
      <div class="col-xl-12 col-lg-12 col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">FILL DETAILS</h4>
              </div>
              <form action="form/edit_photos.php" method="post" enctype="multipart/form-data">
              <div class="card-block">
                  <div class="card-body">
                     <h5 class="mt-2">head</h5>
                      <fieldset class="form-group">
                          <input type="text" name="head" class="form-control" id="basicInput" >
                      </fieldset>
                       <h5 class="mt-2">description</h5>
                       <fieldset class="form-group">
                          <textarea class="form-control" name="description" id="basicTextarea" rows="3"></textarea>
                      </fieldset>
                       <h5 class="mt-2">Select Category</h5>
                      <fieldset class="form-group">
                          <select class="form-control" name="category" id="basicSelect">
                            <option value="0" selected disabled>Select Option</option>
                            <option value="assam">ASSAM</option>
                            <option value="btr">BTR</option>
                            <option value="central">CENTRAL</option>
                            
                          </select>
                      </fieldset>
                      <h5 class="mt-2">Select Image</h5>
                      <fieldset class="form-group">
                        <input type="file" name="image" id="image" accept="image/*" >
                         <img id="responseImage" width="100px" height="100px">
                      </fieldset>
                       <input type="submit" name="submit" value="Save" class="btn btn-success waves-effect btnSubmit" />
                  </div>
               
              </div>
              </form>
          </div>
      </div>
      
      
  </div>
</section>
<!-- Basic Inputs end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php include("include/footer.php");?>
      <script type="text/javascript">
       function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      if(input.id === 'image') {
        $('#responseImage').attr('src', e.target.result);
      } 
    };
    reader.readAsDataURL(input.files[0]);
  }

  }

$("#image").change(function() {
  readURL(this);
});

    </script>
  </body>
</html>