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
                                      <a class="nav-link" aria-current="page" href="inventorymaster.php">MATERIAL</a>
                                      <a class="nav-link" href="uom.php">UOM</a>
                                      
                                      <a class="nav-link" href="department1.php">DEPARTMENT</a>
                                      <a class="nav-link" href="store.php">STORE</a>
                                      <a class="nav-link active fw-bold" href="supplier.php">SUPPLIER</a>
                                     </nav>
                                </div>    
                                <div class="card-body">
                                    <div class="row">
                                         <div class="col-xl-12"> 
                                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnewspecialization">
                                              ADD SUPPLIER
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
                                                        <th>Supplier Name</th>
                                                        <th>Company Name</th>
                                                        <th>Mobile No.</th>
                                                        <th>VAT / TIN No.</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td></td>
                                                        <td>STATIONARY</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
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

        <!-- Modal Add New Uom In Master -->
        <div class="modal fade" id="addnewspecialization" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">  
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Add Supplier</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">First Name</label>
                                <input type="text" name="" placeholder="ENTER FIRST NAME" class="form-control">
                            </div>
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">Middle Name</label>
                                <input type="text" name="" placeholder="ENTER MIDDLE NAME" class="form-control">
                            </div>
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">Last Name</label>
                                <input type="text" name="" placeholder="ENTER LAST NAME" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">Company Name</label>
                                <input type="text" name="" placeholder="ENTER COMPANY NAME" class="form-control">
                            </div>
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">Mobile No</label>
                                <input type="text" name="" placeholder="ENTER MOBILE NO." class="form-control">
                            </div>
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">Landline No</label>
                                <input type="text" name="" placeholder="ENTER LANDLINE NO" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">Address</label>
                                <textarea type="text" name="" placeholder="ENTER ADDRESS" class="form-control" style="height: 18px;"></textarea> 
                            </div>
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">Opening Balance</label>
                                <input type="text" name="" placeholder="ENTER OPENING BALANCE" class="form-control">
                            </div>
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">Email Address</label>
                                <input type="text" name="" placeholder="ENTER EMAIL ADDRESS" class="form-control">
                            </div>
                        </div>
                         <div class="row mt-3">
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">Website</label>
                              <input type="text" name="" placeholder="ENTER WEBSITE" class="form-control">  
                            </div>
                            <div class="col-md-4">
                              <label class="control-label text-uppercase">GST NO.</label>
                                <input type="text" name="" placeholder="ENTER GST NO." class="form-control">
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