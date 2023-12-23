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
                                 <div class="card-header">
                                    <nav class="nav">
                                      <a class="nav-link active fw-bold text-uppercase" aria-current="page" href="employeemaster.php">Employee Master</a>
                                      <a href="employeetype.php" class="nav-link text-uppercase">Employee Type</a>
                                      <a href="shiftmaster.php" class="nav-link text-uppercase">Shift Master</a>
                                      <a href="empwork.php" class="nav-link text-uppercase">Emp. Work Assign Master</a>
                                     </nav>
                                </div>    
                                <div class="card-body">
                                    <div class="row">
                                         <div class="col-xl-12">   
                                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                              ADD NEW EMPLOYEE
                                             </button>
                                         </div>
                                     </div>
                                    <div class="row mt-3">
                                        <div class="col-xl-12">
                                            <table id="datatable" class="table dt-responsive nowrap table-striped" 
                                            style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Employee Name</th>
                                                        <th>Department</th>
                                                        <th>Gender</th>
                                                        <th>Mob. No.</th>
                                                        <th>Qualification</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dr. PRATIK SHETE</td>
                                                        <td>Reception</td>
                                                        <td>Male</td>
                                                        <td>7775888185</td>
                                                        <td>MBBS</td>
                                                        <td>
                                                            <a href="#" style="margin-right:10px;">
                                                                <i class="fas fa-edit text-primary fs-5"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="fas fa-trash-alt text-primary fs-5"></i>
                                                            </a>
                                                        </td>
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
                <!--End Page-content-->
                </div>
                
                                                
               <?php include'footer.php';?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD NEW EMPLOYEE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                         <div class="row mt-3">
                            <div class="col-xl-4">
                                <label class="control-label">First Name</label>
                                <input type="text" name="" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-xl-4">
                                <label class="control-label">Middle Name</label>
                                <input type="text" name="" class="form-control" placeholder="Middle Name">
                            </div>
                            <div class="col-xl-4">
                                <label class="control-label">Last Name</label>
                                <input type="text" name="" class="form-control" placeholder="Last Name">
                            </div>
                         </div>
                         <div class="row mt-3">
                             <div class="col-xl-4">
                                <label class="control-label">Gender</label>
                                <select class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                             <div class="col-xl-4">
                                <label class="control-label">Date Of Birth</label>
                                <input type="date" name="" class="form-control" placeholder="Date Of Birth">
                            </div>
                            <div class="col-xl-4">
                                <label class="control-label">Mobile No.</label>
                                <input type="text" name="" class="form-control" placeholder="Mobile No.">
                            </div>
                          </div>
                         <div class="row mt-3">
                            <div class="col-xl-4">
                                <label class="control-label">Qualification</label>
                                <input type="text" name="" class="form-control" placeholder="Qualification">
                            </div>
                             <div class="col-xl-4">
                                <label class="control-label">Email</label>
                                <input type="text" name="" class="form-control" placeholder="Email">
                            </div>
                             <div class="col-xl-4">
                                <label class="control-label">Address</label>
                                <input type="text" name="" class="form-control" placeholder="Address">
                            </div>
                          </div>
                          
                           <div class="row mt-3">
                           <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold text-uppercase">Department</label>
                               <select class="form-control">
                                   <option>HR_ADMIN</option>
                                   <option>ADMIN</option>
                                   <option>ASS-HR</option>
                                   <option>ACCOUNTANT</option>
                               </select>
                           </div>
                           <div class="col-xl-2">
                               <a href="#addnewspecialization" role="button" class="btn btn-primary btn-sm" style="margin-top:30px;" data-bs-toggle="modal" data-bs-target="#addnewspecialization">+</a>
                           </div>
                           <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold">VILLAGE/TOWN</label>
                               <select class="form-control">
                                   <option>Satana</option>
                                   <option>Kalwan</option>
                                   <option>Sambhaji Nagar</option>
                                   <option>Nashik</option>
                               </select>
                           </div>
                           <div class="col-xl-2">
                               <a href="#addnewvillage" role="button" class="btn btn-primary btn-sm" style="margin-top:30px;" data-bs-toggle="modal" data-bs-target="#addnewvillage">+</a>
                           </div>
                          </div>

                          <div class="row mt-3">
                           <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold text-uppercase">Employee Type</label>
                               <select class="form-control">
                                   <option>INCHARGE</option>
                                   <option>ASSITANT</option>
                                   <option>HEAD</option>
                                   <option>ACCOUNTANT</option>
                               </select>
                           </div>
                           <div class="col-xl-2">
                               <a href="#addemployeetype" role="button" class="btn btn-primary btn-sm" style="margin-top:30px;" data-bs-toggle="modal" data-bs-target="#addemployeetype">+</a>
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

        <!-- Modal Add new employee type -->
        <div class="modal fade" id="addemployeetype" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Add New Employee Type Master</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="text" name="" placeholder="Enter Employee Type" class="form-control">
                            </div>
                        </div>
                     </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add new village -->
        <div class="modal fade" id="addnewvillage" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Add New Village / Town</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <label class="control-label text-uppercase">Select State</label>
                                <select class="form-control">
                                    <option>Maharashtra</option>
                                    <option>Gujrath</option>
                                    <option>Goa</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="control-label text-uppercase">Select City</label>
                                <select class="form-control">
                                    <option>Maharashtra</option>
                                    <option>Gujrath</option>
                                    <option>Goa</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="control-label text-uppercase">Enter Town</label>
                                <input type="text" class="form-control" placeholder="Enter Town" name="">
                            </div>
                        </div>
                     </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add new department -->
        <div class="modal fade" id="addedepartment" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Add New Department In Master</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="text" name="" placeholder="Enter Department Name" class="form-control">
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