<?php include("include/header.php"); ?>

 <!-- Data Tables -->
     <!-- <link rel="stylesheet" href="../assets/datatable/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/datatable/css/datatables.min.css">
    <!-- <link rel="stylesheet" href="../assets/datatable/css/style.css"> -->
    <!-- datatable ends -->

  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
   <?php include("include/nav.php"); ?>


<?php include("include/sidebar.php");?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Tables</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Tables
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">View Photos</h4>
        <h2>
                  
                    <?php 
                  if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                  }
                ?>
                </h2>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
				<div class="card-body">
					
					<div class="table-responsive">
						<table id="example" class="display nowrap"style="width:100%">
                 
        					<thead>
                                <tr>
                                	<th>Id</th>
                                    <th>Head</th>
                                    <th>Description</th>
                                    <th>category</th>
                                    <th>image</th>
                                    <th>Date Uploaded</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
					        <tbody>
                         <?php 

                        if ($read1) {
                          $n=0;

                          foreach ($read1 as $empphoto)
                      { 
                            

                      ?>
					            <tr>
					                <td><?php echo $empphoto['id'] ;?></td>
                          <td><?php echo $empphoto['head'] ;?></td>
                          <td><?php echo $empphoto['description'] ;?></td>
                          <td><?php echo $empphoto['category'] ;?></td>
                          <td><img width="120px" src="<?php echo $empphoto['image'] ;?>"></td>
                          <td><?php echo $empphoto['date_uploaded'] ;?></td>
                          <td>  <div class="form-group">
                            <!-- Simple Icon Button -->
                            <button type="button" class="aboutData btn btn-icon btn-warning  mr-1" data-id="<?php echo $empphoto['id'];?>" data-toggle="modal" data-target="#exampleModal">edit/delete</button>
                            <!-- <button type="button" class="btn btn-icon btn-danger mr-1" data-toggle="modal" data-target="#exampleModal">delete</button> -->
                           
                        </div></td>
					            </tr>
                      <?php }}?>
					        </tbody>
					        <tfoot>
					        	   <th>Id</th>
                                    <th>Head</th>
                                    <th>Description</th>
                                    <th>category</th>
                                    <th>image</th>
                                    <th>Date Uploaded</th>
                                    <th>Action</th>
					        </tfoot>
                
    					</table>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Basic Tables end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="content-body"><!-- Basic Inputs start -->
<section class="basic-inputs">
  <div class="row match-height">
      <div class="col-xl-12 col-lg-12 col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">FILL DETAILS</h4>
              </div>
              <form action="form/edit_photo.php" method="post" enctype="multipart/form-data">
              <div class="card-block">
                  <div class="card-body">
                    <fieldset class="form-group">
                           <input type="hidden" id="id" name="id">
                      </fieldset>
                     <h5 class="mt-2">head</h5>
                      <fieldset class="form-group">
                          <input type="text" name="head" onkeyup="validateHead(this.value);" class="form-control" id="head" >
                      </fieldset>

                       <h5 class="mt-2">description</h5>
                       <fieldset class="form-group">
                          <textarea class="form-control" name="description"  onkeyup="validateDescription(this.value);" id="description" rows="3"></textarea>
                      </fieldset>
                       <h5 class="mt-2">Select Category</h5>
                      <fieldset class="form-group">
                          <select class="categorySelect form-control "id="editForm" name="category">
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
                      <input type="submit" name="formSubmit" class="btn btn-success waves-effect" value="SAVE ">
                        <a href="" id="deletePhotos" class="btn btn-danger waves-effect">DELETE </a>
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

<!-- footer -->
   <?php include("include/footer.php");?>
   <!-- footer ends -->
   <script type="text/javascript">
  function validateHead(variable){
    var keyed = variable.replace(/\n/g, '<br/>');
      $("#targetHead").val(keyed);
  }
  function validateDescription(variable){
    var keyed = variable.replace(/\n/g, '<br/>');
      $("#targetDescription").val(keyed);
  }



  $(document).on("click touch", ".aboutData", function () {
      var dataId = $(this).data('id');
      $('#id').val(dataId);
   

      $.ajax({
         type: "POST", 
         dataType: "json", 
         url: "fetch/fetch_photo.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
          var keyed = response.head.replace(/<br ?\/?>/g,"\n");
        $("#head").val(keyed);
        var keyed = response.description.replace(/<br ?\/?>/g,"\n");
        $("#description").val(keyed);
            
            // $('#responseImage').attr("src",response.bg_img);
            $('#deletePhotos').attr("href","form/deletePhotos.php?id="+dataId);
            
            $('#responseImage').attr("src",response.image);
            // $("div.categorySelect select").val(response.category).change();
            $("select#editForm").val(response.category).change();
            // $('#responseImage2').attr("src",response.image2);
            // $('#responseImage3').attr("src",response.image3);
            // $('#responseImage').attr('src', 'images/' + response.image);
         


         },
         error: function(error){
            console.log("Error:");
            console.log(error);
         }

      });
      
   });
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