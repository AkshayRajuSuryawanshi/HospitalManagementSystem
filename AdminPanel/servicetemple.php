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
                                     <a class="nav-link" aria-current="page" href="ipdmaster.php">IPD SERVICE GROUP MASTER</a>
                                      <a class="nav-link" href="ipdservicecharges.php">IPD SERVICE CHARGES MASTER</a>
                                      <a class="nav-link  active fw-bold" href="servicetemple.php">SERVICE TEMPLATE</a>
                                    </nav>
                                </div>    
                                <div class="card-body">
                                    <div class="row">
                                         <div class="col-xl-12">   
                                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                              SERVICE TEMPLATE
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
                                                        <th>SERVICE TYPE</th>
                                                        <th>SERVICE NAME</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                          <select class="form-control">
                                                            <option>Select Type</option>
                                                            <option>NA</option>
                                                            <option>Default</option>
                                                          </select>
                                                        </td>
                                                        <td><input type="text" class="form-control" placeholder="Select Service" name=""></td>
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
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">SERVICE TEMPLATE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                         <div class="row">
                            <div class="col-xl-6">
                                <label class="control-label">TEMPLATE NAME</label>
                                <input type="text" class="form-control" placeholder="Template Name" name="">
                            </div>
                            <div class="col-xl-4">
                              <label class="control-label text-nowrap" style="margin-top: 35px !important;">ADD NEW SERVICE NAME</label>
                            </div>
                             <div class="col-xl-2">
                               <a href="#addnewservice" role="button" class="btn btn-primary btn-sm" style="margin-top:30px;" data-bs-toggle="modal" data-bs-target="#addnewservice">+</a>
                             </div>
                         </div>
                         <div class="row mt-3">
                            <div class="col-xl-12">
                                 <label class="control-label text-uppercase">Edit Template</label>
                                 <select class="form-control">
                                    <option>Cash & Claim</option>
                                    <option>Cash</option>
                                    <option>Claim</option>
                                 </select>
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

<!-- Add New Service Group -->
 <!-- Modal -->
        <div class="modal fade" id="addnewservicegroup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD IPD GROUP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                         <div class="row">
                            <div class="col-xl-12">
                                <label class="control-label text-uppercase">Enter Group</label>
                                <input type="text" class="form-control" placeholder="Enter Group" name="">
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


         <!-- Modal Add new specialization -->
        <div class="modal fade" id="addnewservice" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Add New Service</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-3">
                             <div class="col-xl-10">
                                  <label class="control-label text-uppercase">Service Group</label>
                                  <select class="form-control">
                                    <option>Single Room</option>
                                    <option>OT</option>
                                    <option>Hospital Services</option>
                                  </select>
                              </div>
                               <div class="col-xl-2">
                               <a href="#addnewservicegroup" role="button" class="btn btn-primary btn-sm" style="margin-top:30px;" data-bs-toggle="modal" data-bs-target="#addnewservicegroup">+</a>
                             </div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-xl-12">
                               <label class="control-label text-uppercase">Service Name</label>
                               <input type="text" name="" class="form-control" placeholder="IPD Service Name">
                            </div>
                          </div>
                           <div class="row mt-3">
                            <div class="col-xl-12">
                               <label class="control-label text-uppercase">Service For</label>
                               <select class="form-control">
                                 <option>Cash & Claim</option>
                                 <option>Cash</option>
                                 <option>Claim</option>
                               </select>
                            </div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-xl-12">
                               <label class="control-label text-uppercase">Service Code</label>
                               <input type="text" placeholder="Enter Service Code" name="" class="form-control">
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