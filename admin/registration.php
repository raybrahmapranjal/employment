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
				<h4 class="card-title">Basic Tables</h4>
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
                                	<th>EmploymentId</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>State</th>
                                    <th>Date of Submission</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
					        <tbody>
                         <?php 

                        if ($read) {
                          $n=0;

                          foreach ($read as $empKey)
                      { 
                            

                      ?>
					            <tr>
					                <td><?php echo $empKey['Emp_id'] ;?></td>
                          <td><?php echo $empKey['fullname'] ;?></td>
                          <td><?php echo $empKey['email'] ;?></td>
                          <td><?php echo $empKey['mobile'] ;?></td>
                          <td><?php echo $empKey['state'] ;?></td>
                          <td><?php echo $empKey['date_submitted'] ;?></td>
                          <td>  <div class="form-group">
                            <!-- Simple Icon Button -->
                            <button type="button" class="btn btn-icon btn-warning  mr-1" data-toggle="modal" data-target="#exampleModal">edit</button>
                            <button type="button" class="btn btn-icon btn-danger mr-1" data-toggle="modal" data-target="#exampleModal">delete</button>
                           
                        </div></td>
					            </tr>
                      <?php }}?>
					        </tbody>
					        <tfoot>
					        	    <th>EmploymentId</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>State</th>
                        <th>Date of Submission</th>
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
      <div class="modal-body">
    					<form class="form-horizontal" action="https://demos.themeselection.com/chameleon-admin-template/html/ltr/vertical-menu-template/index.html" novalidate>
                <h5 class="mt-2">name</h5>
                            <fieldset class="form-group position-relative has-icon-left">
                            	
                                <input type="text" class="form-control round" id="user-name" placeholder="Your Username" required>
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                            </fieldset>
                            <h5 class="mt-2">password</h5>
                            <fieldset class="form-group position-relative has-icon-left">
                            	
                                <input type="password" class="form-control round" id="user-password" placeholder="Enter Password" required>
                                <div class="form-control-position">
                                    <i class="ft-lock"></i>
                                </div>
                            </fieldset>

                           
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
   <?php include("include/footer.php");?>
   <!-- footer ends -->
  </body>
</html>