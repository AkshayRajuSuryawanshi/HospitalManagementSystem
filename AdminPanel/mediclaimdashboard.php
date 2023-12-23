<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>Hospital Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico"> 
         <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
		<style>
            table tr th{
                text-transform:uppercase;
            }
			table tr td{
				text-transform:uppercase;
			}
		</style>
    </head>

    <body data-topbar="light" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include'header.php';?>
    

           
            <!-- Start right Content here -->
          
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-cube-outline float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Today's Current Claim Patient</h6>
                                            <h2 class="mb-4 text-white">₹ 1,587</h2>
                                            <span class="badge bg-info"> +11% </span> <span class="ms-2">From previous period</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Today's Admitted Claim Patient</h6>
                                            <h2 class="mb-4 text-white">₹ 46,782</h2>
                                            <span class="badge bg-danger"> -29% </span> <span class="ms-2">From previous period</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                               <a href="#admittedpatient" role="button" data-bs-toggle="modal" data-bs-target="#admittedpatient"> 
                               <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">ADMITTED PATIENT</h6>
                                            <h2 class="mb-4 text-white">₹ 46,782</h2>
                                            <span class="badge bg-danger"> -29% </span> <span class="ms-2">From previous period</span>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!-- end row -->


						<div class="row">
							   <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
										<!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
													
                                                    <span class="d-none d-sm-block text-uppercase text-dark fw-bold">Registered Mediclaim Patient List</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block text-uppercase text-dark fw-bold">Due Patient List</span>
                                                </a>
                                            </li>
                                          </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                           <div class="tab-pane active p-3" id="home2" role="tabpanel">
										    <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.No.</th>
                                                        <th>Patient Details</th>
                                                        <th>Admission Details</th>
                                                        <th>TPA Details</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td> 
                                                    </tr>
                                                </tbody>                              
                                            </table>
											
                                            </div>
											<!--IPD Patients-->
											<div class="tab-pane p-3" id="profile2" role="tabpanel">
								                
                                                <div class="row">

                                                    <div class="col-xl-4">
                                                        <label class="control-label text-uppercase">Select Filter</label>
                                                        <select class="form-control">
                                                            <option>By IPD No.</option>
                                                            <option>By Discharge Date</option>
                                                            <option>By First & Last Name</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <label class="control-label text-uppercase">IPD No.</label>
                                                        <input type="text" class="form-control" name="" placeholder="Enter IPD No.">
                                                    </div> 
                                                    <div class="col-xl-4">
                                                        <button class="btn btn-success w-25 mt-4">SHOW</button>
                                                    </div>          
                                                </div>
											   
                                            </div>

										</div>
									</div>
                                </div>
                            </div>
						</div>
					</div> <!-- container-fluid -->
                </div>
                <!--End Page-content-->
				</div>
				
                                                
               <?php include'footer.php';?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

                                       
      <!-- Modal Admitted Patinet -->
        <div class="modal fade" id="admittedpatient" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">SEARCH PATIENT</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                               <div class="table-responsive">
                                   <table class="table table-striped">
                                       <thead>
                                           <tr>
                                               <th>Sr. No.</th>
                                               <th>Patient Details</th>
                                               <th>Admission Details</th>
                                               <th>Doctor Name</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <tr>
                                              <td>1</td>
                                              <td><p><b>Mr. GHANSHYAM LALCHAND PARDESHI</b></p>
                                                  <p style="margin-top: -20px;">UHID006417</p>
                                                  <p style="margin-top: -20px;">IPD No. :- 2808</p>
                                              </td> 
                                              <td>
                                                 <p>DOA :- 06/12/2023, TOA :- 6:40 PM</p>
                                                 <p style="margin-top: -20px;">Bed :- General Ward Bed 1</p>
                                              </td> 
                                              <td>Dr. PRASHANT DEORE</td> 
                                              <td>
                                                <a class="btn btn-primary" href="#registermediclaim" role="button" data-bs-toggle="modal" data-bs-target="#registermediclaim">Register To Mediclaim</a>  
                                              </td>  
                                           </tr>
                                       </tbody>
                                   </table>
                               </div>
                            </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                         <button class="btn btn-primary">SEND AUTHORIZATION REQUEST</button>
                     </div>
                 </div>
            </div>
        </div>   
      
         <!-- Modal Register Mediclaim -->
        <div class="modal fade" id="registermediclaim" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Mr. GHANSHYAM LALCHAND PARDESHI</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                         <div class="row">
                            <div class="col-xl-6">
                                <label class="control-label text-primary fw-bold text-uppercase">Request Date</label>
                                <input type="date" name="" class="form-control" placeholder="Request date">
                            </div>
                            <div class="col-xl-6">
                                <label class="control-label text-primary fw-bold text-uppercase">Request Time</label>
                                <input type="time" name="" class="form-control" placeholder="Request time">
                            </div>
                         </div>
                     </div>
                 </div>
                 <div class="row mt-3">
                          <div class="col-xl-3">
                               <label class="control-label text-primary fw-bold">IC Name</label>
                               <select class="form-control">
                                   <option>Aditya Birla Health Insurance Co. Ltd.</option>
                               </select>
                           </div>
                           <div class="col-xl-1">
                               <a href="#addicname" role="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addicname" style="margin-top: 30px;">+</a>
                           </div>
                           <div class="col-xl-3">
                               <label class="control-label text-primary fw-bold">TPA Name</label>
                               <select class="form-control">
                                   <option>Alankit Insurance TPA Limited</option>
                               </select>
                           </div>
                           <div class="col-xl-1">
                               <a href="#addtpaname" role="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addtpaname" style="margin-top: 30px;">+</a>
                           </div>
                           <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold text-uppercase">Enter Policy No.</label>
                               <input type="text" class="form-control" name="" placeholder="Enter Policy No.">
                           </div>
                 </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal Add IC -->
        <div class="modal fade" id="addicname" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">IC MASTER</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                         <div class="row">
                            <div class="col-xl-12">
                                <label class="control-label text-primary text-uppercase fw-bold">IC NAME</label>
                                <input type="text" name="" class="form-control" placeholder="Enter IC Name">
                            </div>
                         </div>
                     </div>
                 </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>

         <!-- Modal Add TPA Name -->
        <div class="modal fade" id="addtpaname" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD TPA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                         <div class="row">
                            <div class="col-xl-12">
                                <label class="control-label text-primary text-uppercase fw-bold">Enter TPA</label>
                                <input type="text" name="" class="form-control" placeholder="Enter TPA">
                            </div>
                         </div>
                     </div>
                 </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>



        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
		<!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!--Morris Chart-->
        <script src="assets/libs/morris.js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>
		
		<!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>
		
        <!-- App js -->
        <script src="assets/js/app.js"></script>
		
    </body>
</html>