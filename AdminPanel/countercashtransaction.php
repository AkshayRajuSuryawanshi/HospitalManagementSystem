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
                                <div class="card-header">
                                    <nav class="nav">
                                      <a class="nav-link active fw-bold" aria-current="page" href="incometransaction.php">INCOME TRANSACTION</a>
                                      <a class="nav-link" href="grnagainsepo.php">EXPENSES TRANSACTION</a>
                                      <a class="nav-link" href="directgrn.php">BANK TRANSACTION</a>
                                      <a class="nav-link" href="materialissueentry.php">PETTY CASH TRANSACTION</a>
                                      <a class="nav-link" href="materialreturnentry.php">COUNTER CASH TRANSACTION</a>
                                      <a class="nav-link" href="purchasereturn.php">PURCHASE RETURN</a>
                                      <a class="nav-link" href="supplierpayment.php">SUPPLIER PAYMENT</a>
                                     </nav>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">SUPPLIER NAME</label>
                                         <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                         </div>
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">SUPPLIER NAME</label>
                                         <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                         </div>
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">PO DATE</label>
                                         <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                                         </div>
                                             </button>
                                         </div>
                                     </div>
                                     <button type="button" class="btn btn-primary">SEARCH OLD PO</button>
                                     <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">MATERIAL NAME</label>
                                        <select  class="form-control">
                                            <option>-Select Material Name-</option>
                                        </select>
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div>
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">UOM</label>
                                        <select  class="form-control">
                                            <option>-Select Uom-</option>
                                        </select>
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div>
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">QTY</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div>
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">RATE</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div>
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">TAX(%)</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div>
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">TAX AMT</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div>
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">TOTAL</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div>
                                         <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">REMARK</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div>
                                         <button type="button" class="btn btn-primary">ADD TO PO</button>

                                    <div class="row mt-3">
                                        <div class="col-xl-12">
                                            <table id="datatable" class="table dt-responsive nowrap table-striped" 
                                            style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>SR. NO</th>
                                                        <th>MATERIAL NAME</th>
                                                        <th>UOM</th>
                                                        <th>QTY</th>
                                                        <th>RATE</th>
                                                        <th>TAX(%)</th>
                                                        <th>TAX AMT</th>
                                                        <th>TOTAL</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">PO TOTAL</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div><div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">DISCOUNT(%)</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div><div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">DISCOUNT AMT</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div><div class="col-xl-3">   
                                         <div class="input-group mb-3">
                                        <label class="form-control text-primary fw-bold">FINAL TOTAL</label>
                                    <input class="form-control"  type="text" value="0">
                                         <!-- <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"> -->
                                         </div>

                                         <div class="col-xl-3">   
                                         <button type="button" class="btn btn-primary">SUBMIT</button>
                                         <button type="button" class="btn btn-primary">CANCEL</button>
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