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
							   <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
										<!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
													
                                                    <span class="d-none d-sm-block">Register New Patient</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Today's OPD LIST</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Follow Up Patient</span>
                                                </a>
                                            </li>
                                             <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">Appointment Patient List</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3" id="home2" role="tabpanel">
									         <div class="row">
                                                <div class="col-xl-8">
                                                    <div class="row">
                                                        <div class="col-xl-4 text-uppercase">
                                                           <b class="text-primary fw-bold">LAST PATIENT :</b>&nbsp;&nbsp;Mr. AMIT YADAV 
                                                        </div>
                                                        <div class="col-xl-2 text-uppercase text-nowrap">
                                                           <b class="text-primary fw-bold">UHID :</b>&nbsp;&nbsp;UHID006413
                                                        </div>
                                                        <div class="col-xl-3 text-uppercase text-center">
                                                          <b class="text-primary fw-bold"> OPD No. :</b>&nbsp;&nbsp;4835
                                                        </div>
                                                        <div class="col-xl-3 text-uppercase">
                                                          <b class="text-primary fw-bold"> Next UHID :</b>&nbsp;&nbsp;UHID006414
                                                        </div>
                                                    </div>
                                                   <div class="row mt-3">
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-primary fw-bold">OPD DATE</label>
                                                           <input type="date" name="" class="form-control">
                                                       </div>
                                                       <div class="col-xl-4">
                                                            <label class="control-label text-primary fw-bold">OPD TIME</label>
                                                           <input type="time" name=""  class="form-control">
                                                       </div>
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-uppercase text-primary fw-bold">Select Title</label>
                                                           <select class="form-control">
                                                               <option>Title</option>
                                                           </select>
                                                       </div>
                                                   </div>
                                                   <div class="row mt-3">
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-primary fw-bold">FIRST NAME</label>
                                                           <input type="text" name="" class="form-control">
                                                       </div>
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-primary fw-bold">MIDDLE NAME</label>
                                                           <input type="text" name=""  class="form-control">
                                                       </div>
                                                       <div class="col-xl-4">
                                                            <label class="control-label text-primary fw-bold">LAST NAME</label>
                                                            <input type="text" name=""  class="form-control">
                                                       </div>
                                                   </div>
                                                   <div class="row mt-3">
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-primary fw-bold">GENDER</label>
                                                           <select class="form-control">
                                                               <option>Male</option>
                                                               <option>Female</option>
                                                           </select>
                                                       </div>
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-primary fw-bold">DOB</label>
                                                           <input type="date" name=""  class="form-control">
                                                       </div>
                                                       <div class="col-xl-4">
                                                            <label class="control-label text-primary fw-bold">AGE</label>
                                                            <input type="text" name=""  class="form-control">
                                                       </div>
                                                   </div>
                                                   <div class="row mt-3">
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-primary fw-bold">MOBILE NO</label>
                                                           <input type="text" name=""  class="form-control">
                                                       </div>
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-primary fw-bold">Height(In CM):</label>
                                                           <input type="text" name=""  class="form-control">
                                                       </div>
                                                       <div class="col-xl-4">
                                                            <label class="control-label text-primary fw-bold">Weight(In kg):</label>
                                                            <input type="text" name=""  class="form-control">
                                                       </div>
                                                   </div>
                                                   <div class="row mt-3">
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-primary fw-bold">BMI</label>
                                                           <input type="text" name=""  class="form-control">
                                                       </div>
                                                       <div class="col-xl-4">
                                                           <label class="control-label text-primary fw-bold">AADHAR NO</label>
                                                           <input type="text" name=""  class="form-control">
                                                       </div>
                                                       <div class="col-xl-4">
                                                            <label class="control-label text-primary fw-bold">ADDRESS</label>
                                                            <textarea style="width: 100%;height: 20px;" class="form-control"></textarea>
                                                       </div>
                                                   </div>
                                                   <div class="row mt-3">
                                                       <div class="col-xl-6">
                                                           <label class="control-label text-primary fw-bold">REFERENCE DOCTOR</label>
                                                           <select class="form-control">
                                                               <option>Dr.Self</option>
                                                               <option>GATANI</option>
                                                           </select>
                                                       </div>
                                                       <div class="col-xl-2">
                                                           <a href="#addnewreferencedoctor" role="button" class="btn btn-primary btn-sm" style="margin-top:30px;" data-bs-toggle="modal" data-bs-target="#addnewreferencedoctor">+</a>
                                                       </div>
                                                       <div class="col-xl-4" style="margin-top: 30px;">
                                                           <label class="control-label text-primary fw-bold">REFERENCE DOCTOR SMS</label>
                                                           <input type="checkbox" name="">
                                                       </div>
                                                  </div>
                                                   <div class="row mt-3">
                                                       <div class="col-xl-6">
                                                           <label class="control-label text-primary fw-bold">CONSULT DOCTOR</label>
                                                           <select class="form-control">
                                                               <option>Dr.Self</option>
                                                               <option>GATANI</option>
                                                           </select>
                                                       </div>
                                                       <div class="col-xl-6">
                                                           <a href="#addnewconsultdoctor" role="button" class="btn btn-primary btn-sm" style="margin-top:30px;" data-bs-toggle="modal" data-bs-target="#addnewconsultdoctor">+</a>
                                                        </div>
                                                  </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="card bg-primary">
                                                        <div class="card-header">
                                                            <h5 class="text-uppercase text-light">Patient Image</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <img src="assets/images/profile.png" class="img-fluid mb-2" style="width: 100px;height: 100px;">
                                                            <input type="file" name="">
                                                            <button class="btn btn-light mt-3 btn-sm">GET FROM WEB CAMERA</button><br/>
                                                            <button class="btn btn-danger btn-sm mt-3">REMOVE</button>
                                                        </div>
                                                        <div class="card-header">
                                                            <h5 class="text-uppercase text-light">Relative Image</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <img src="assets/images/profile.png" class="img-fluid mb-2" style="width: 100px;height: 100px;">
                                                            <input type="file" name="">
                                                            <button class="btn btn-light mt-3 btn-sm">GET FROM WEB CAMERA</button><br/>
                                                            <button class="btn btn-danger btn-sm mt-3">REMOVE</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
											<!--IPD Patients-->
											<div class="tab-pane p-3" id="profile2" role="tabpanel">
											  <div class="card">
                                                 <div class="card-body">
                                                     <div class="table-responsive">
                                                         <table class="table table-striped">
                                                             <thead>
                                                                 <tr>
                                                                     <th></th>
                                                                     <th></th>
                                                                     <th></th>
                                                                     <th></th>
                                                                     <th></th>
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

        <!-- Modal Add new reference doctor -->
        <div class="modal fade" id="addnewreferencedoctor" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Add New Reference Doctor</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="text" name="" placeholder="Enter First Name" class="form-control">
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="text" name="" placeholder="Enter Last Name" class="form-control">
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="text" name="" placeholder="Enter Mobile No." class="form-control">
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add new consult doctor -->
        <div class="modal fade" id="addnewconsultdoctor" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Add New Consultant Doctor</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="" placeholder="Enter First Name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="" placeholder="Enter Last Name" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="text" name="" placeholder="Enter Mobile No." class="form-control">
                            </div>
                            <div class="col-md-6">
                                <select class="form-control">
                                    <option>Select Doctor Type</option>
                                    <option>Inhouse</option>
                                    <option>Visiting</option>
                                </select>
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