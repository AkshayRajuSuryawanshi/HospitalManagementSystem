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
                            <div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-cube-outline float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Today's Collection</h6>
                                            <h2 class="mb-4 text-white">₹ 1,587</h2>
                                            <span class="badge bg-info"> +11% </span> <span class="ms-2">From previous period</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Waiting Patient</h6>
                                            <h2 class="mb-4 text-white">₹ 46,782</h2>
                                            <span class="badge bg-danger"> -29% </span> <span class="ms-2">From previous period</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-tag-text-outline float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Expenses</h6>
                                            <h2 class="mb-4 text-white">₹ 50,000</h2>
                                            <span class="badge bg-warning"> 0% </span> <span class="ms-2">From previous period</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-briefcase-check float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Cash In Hand</h6>
                                            <h2 class="mb-4 text-white">₹ 1890</h2>
                                            <span class="badge bg-info"> +89% </span> <span class="ms-2">From previous period</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

						<div class="row">
							<div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                       <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">₹ Daily Cash Details</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
							 <div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                       <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">₹ Income Entry</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                       <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">₹ Expenses Entry</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-3 col-sm-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                       <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">₹ Counter Cash Transfer</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
						</div>
						<div class="row">
							   <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
										<!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
													
                                                    <span class="d-none d-sm-block">OPD PATIENTS</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                    <span class="d-none d-sm-block">IPD PATIENTS</span>
                                                </a>
                                            </li>
                                           
                                            
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          <div class="tab-pane active p-3" id="home2" role="tabpanel">
										    <div class="card">
												<div class="card-body">
												   <div class="row">
													<div class="col-xl-3">
													   <a class="btn btn-outline-primary waves-effect waves-light text-uppercase" data-bs-toggle="modal" href="#exampleModalToggle" role="button" style="width:100%;">Search & Register OPD Patient</a>
													</div>
													<div class="col-xl-3">
														<button class="btn btn-outline-primary waves-effect waves-light text-uppercase" data-bs-toggle="modal" data-bs-target="#opdstatus" style="width:100%;">OPD Status</button>
													</div>
													<div class="col-xl-3">
														<button class="btn btn-outline-primary waves-effect waves-light text-uppercase" style="width:100%;">Today's OPD</button>
													</div>
													<div class="col-xl-3">
														<button type="button" class="btn btn-outline-primary waves-effect waves-light text-uppercase" style="width:100%;" data-bs-toggle="modal" data-bs-target="#pendingpaymentOPD">
                                                         Pending Payments
                                                        </button>
													</div>
												  </div>
												  <div class="row mt-3">
													<div class="col-xl-3">
														<input type="date" class="form-control btn btn-outline-primary waves-effect waves-light">
													</div>
													<div class="col-xl-3">
														<select class="form-control btn btn-outline-primary waves-effect waves-light">
															<option>SEARCH DOCTOR</option>
															<option>Dr. Pratik Shete</option>
															<option>Dr.Pratikshit Mahajan</option>
															<option>Dr.Nilesh Nikam</option>
															<option>Dr. Bhausaheb More</option>
															<option>Dr.Nitin Wagh</option>
															<option>Dr.Amit Yeole</option>
															<option>Dr.Mahesh Patil</option>
														</select>
													</div>
													<div class="col-xl-3">
														<button class="btn btn-outline-primary waves-effect waves-light" style="width:100%;">SHOW</button>
													</div>
													
												  </div>
												</div>
											</div>
											<div class="row">
												<table id="datatable" class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
												<thead class="text-uppercase">
													<tr>
														<th>Sr.No.</th>
														<th>Patient Name</th>
														<th>Patient Type</th>
														<th>Consulting Doctor</th>
														<th>Payment Status</th>
														<th>Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Vishal Mahajan</td>
														<td>Edinburgh</td>
														<td>Dr.Sanklecha</td>
														<td><button class="btn btn-success btn-sm"><i class="mdi mdi-check"></i> Success</button></td>
														<td>₹ 320,800</td>
													</tr>
												 </tbody>
												</table>
											</div>
                                            </div>
											<!--IPD Patients-->
											<div class="tab-pane p-3" id="profile2" role="tabpanel">
											 <div class="card">
												  <div class="card-body">
													<div class="row">
													<div class="col-xl-3">
													   <a class="btn btn-outline-primary waves-effect waves-light text-uppercase" data-bs-toggle="modal" href="#exampleModalToggle101" role="button" style="width:100%;">Search & Register IPD Patient</a>
													</div>
													<div class="col-xl-3">
														<button class="btn btn-outline-primary waves-effect waves-light text-uppercase" data-bs-toggle="modal" data-bs-target="#srchdischargedpatient" style="width:100%;">Search Discharged Patient</button>
													</div>
													<div class="col-xl-2">
														<button class="btn btn-outline-primary waves-effect waves-light text-uppercase" style="width:100%;">IPD Chart</button>
													</div>
													<div class="col-xl-2">
														<button type="button" class="btn btn-outline-primary waves-effect waves-light text-uppercase" style="width:100%;" data-bs-toggle="modal" data-bs-target="#roomstatus">
                                                         Room Status
                                                        </button>
													</div>
													<div class="col-xl-2">
														<button type="button" class="btn btn-outline-primary waves-effect waves-light text-uppercase" style="width:100%;" data-bs-toggle="modal" data-bs-target="#ipdpendingpayment">
                                                         Pending Payments
                                                        </button>
													</div>
												   </div>
												   <div class="row mt-3">
												    <div class="col-xl-3">
														<label class="control-label text-uppercase">From Date</label>
														<input Type="date" class="form-control btn-outline-primary"/>
													</div>
													<div class="col-xl-3">
													    <label class="control-label text-uppercase">To Date</label>
														<input Type="date" class="form-control btn-outline-primary"/>
													</div>
													<div class="col-xl-3">
													    <label class="control-label text-uppercase text-white">To Date</label>
														<button type="button" class="btn btn-outline-primary waves-effect waves-light text-uppercase" style="width:100%;">
														 SHOW
														</button>
													</div>
													<div class="col-xl-3">
														<label class="control-label text-uppercase text-white">To Date</label>
														<button type="button" class="btn btn-outline-primary waves-effect waves-light text-uppercase" style="width:100%;">
														 SHOW ALL
														</button>
													</div>
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

                                        <!--  Modal SEARCH DISCHARGED PATIENT -->
                                                <div class="modal fade" id="srchdischargedpatient" tabindex="-1" role="dialog"
                                                     aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                     <div class="modal-dialog modal-xl">
                                                     <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0 text-uppercase" id="myExtraLargeModalLabel">Search Discharged Patient</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                       <div class="card">
                                                            <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <input Type="text" class="form-control btn-outline-primary" placeholder="ENTER UHID NO">
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <input Type="text" class="form-control btn-outline-primary" placeholder="ENTER IPD NO">
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <input Type="text" class="form-control btn-outline-primary" placeholder="ENTER FIRST NAME">
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <input Type="text" class="form-control btn-outline-primary" placeholder="ENTER MIDDLE NAME">
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <input Type="text" class="form-control btn-outline-primary" placeholder="ENTER LAST NAME">
                                                        </div>
                                                        <div class="col-xl-2">
                                                                <!--<input Type="text" class="form-control btn-primary" placeholder="SEARCH">-->
                                                        <button class="btn btn-primary" style="width:100%;">SEARCH</button>
                                                        </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                                            <div class="col-xl-12">
                                                                                <table id="datatable" class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                                <thead class="text-uppercase">
                                                                                    <tr>
                                                                                        <th>Sr.No.</th>
                                                                                        <th>IPD No.</th>
                                                                                        <th>Patient Details</th>
                                                                                        <th>Admission Details</th>
                                                                                        <th>Discharge Details</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Vishal Mahajan</td>
                                                                                        <td>Edinburgh</td>
                                                                                        <td>Dr.Sanklecha</td>
                                                                                        <td>sdscs</td>
                                                                                        <td>scsdcs</td>
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

        <!--IPD Pending payment -->
                 <div class="modal fade" id="ipdpendingpayment" tabindex="-1" role="dialog"
                                                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0 text-uppercase" id="myExtraLargeModalLabel">Pending Payment List Of</h5>
                                                                <select class="form-control w-25" style="margin-left:30px;">
                                                                    <option>IPD</option>
                                                                </select>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-4">
                                                                        <label class="control-label text-uppercase">From Date</label>
                                                                        <input type="date" class="form-control">
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <label class="control-label text-uppercase">To Date</label>
                                                                        <input type="date" class="form-control">
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <button class="btn btn-primary mt-4" style="width:100%;">SEARCH GET RECORDS</button>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-xl-12">
                                                                        <table class="table table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>SR. NO.</th>
                                                                                    <th>UHID</th>
                                                                                    <th>IPD NO.</th>
                                                                                    <th>PATIENT NAME</th>
                                                                                    <th>PENDING AMOUNT</th>
                                                                                    <th>LAST PAID DATE</th>
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
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                </div>
        <div class="modal fade" id="roomstatus" tabindex="-1" role="dialog"
                                                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0 text-uppercase" id="myExtraLargeModalLabel">Room Status</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <div class="card">
                                                                <div class="card-body">
                                                                       <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped">
                                                                            <thead class="text-uppercase">
                                                                                <tr>
                                                                                    <th>Room Type</th>
                                                                                    <th>Capacity</th>
                                                                                    <th>Engaged</th>
                                                                                    <th>Available</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>General Ward</td>
                                                                                    <td>29</td>
                                                                                    <td>0</td>
                                                                                    <td>29</td>
                                                                                </tr>
                                                                                <tr class="fw-bold">
                                                                                    <td class="text-end">Total</td>
                                                                                    <td>101</td>
                                                                                    <td>0</td>
                                                                                    <td>101</td>
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
        <!--Modal Pending Payment List of-->
         <div class="modal fade" id="pendingpaymentOPD" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                        <div class="modal-header">
                          
                            <h5 class="modal-title mt-0 text-nowrap text-uppercase" id="myExtraLargeModalLabel">Pending Payment List of</h5>
                            
                            <select class="form-control w-25" style="margin-left:30px;">
                                <option>OPD</option>
                            </select>
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <table id="datatable" class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Patient Name</th>
                                                <th>Bill Details</th>
                                                <th>Pending Amount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                <p><b>Mr. Gajanan Thakre</b></p>
                                                <div style="margin-top:-15px;">
                                                    <span>UHID005140</span> 
                                                    <span><b>OPD No :-</b> 4052</span>
                                                    <span><b>OPD Date :-</b> 12/05/2022</span>
                                                </div>  
                                                </td>
                                                <td>
                                                    <p><b>Total Bill :</b>&nbsp;&nbsp;780.00</p>
                                                    <p style="margin-top:-18px;"><b>Last Paid Amt   :</b>&nbsp;&nbsp;0.00</p>
                                                    <p style="margin-top:-18px;"><b>Last Concession :</b>&nbsp;&nbsp;0.00</p>
                                                </td>
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

                <!--  Modal OPD Status -->
                 <div class="modal fade" id="opdstatus" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Doctors (OPD) :</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                               <div class="row">
                                <div class="col-xl-12">
                                    <table id="datatable" class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th>Consulting Doctor</th>
                                                <th>New OPD</th>
                                                <th>Follow Up</th>
                                                <th>Total</th>
                                                <th>Check Out</th>
                                                <th>Running Patients</th>
                                                <th>Waiting Patients</th>
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
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="text-end text-uppercase"><b>Total</b></td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                               </div>                               
                            </div>
                      </div>
                 </div>
        </div>

        <!--OPD Search Follow Up Patient  -->

        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalToggleLabel">Search Follow up Patient</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <div class="card">
                   <div class="card-header">
                       <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Register New OPD</button>
                   </div>
                   <div class="card-body">
                       <div class="row">
                         <div class="col-xl-2">
                             <input Type="text" class="form-control btn-outline-primary" placeholder="ENTER UHID NO">
                         </div>
                         <div class="col-xl-2">
                             <input Type="text" class="form-control btn-outline-primary" placeholder="FIRST NAME">
                          </div>
                          <div class="col-xl-2">
                             <input Type="text" class="form-control btn-outline-primary" placeholder="MIDDLE NAME">
                          </div>
                          <div class="col-xl-2">
                            <input Type="text" class="form-control btn-outline-primary" placeholder="LAST NAME">
                          </div>
                          <div class="col-xl-2">
                             <input Type="text" class="form-control btn-outline-primary" placeholder="MOBILE NO">
                          </div>
                          <div class="col-xl-2">
                             <!--<input Type="text" class="form-control btn-primary" placeholder="SEARCH">-->
                             <button class="btn btn-primary" style="width:100%;">SEARCH</button>
                          </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-12">
                                <table id="datatable" class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="text-uppercase">
                                         <tr>
                                           <th>Sr.No.</th>
                                           <th>Patient Details</th>
                                           <th>Last Visit Details</th>
                                           <th>Action</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                         <tr>
                                            <td>1</td>
                                            <td>Vishal Mahajan</td>
                                            <td>Edinburgh</td>
                                            <td>Dr.Sanklecha</td>
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
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">REGISTER NEW OPD</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
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
              <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
              </div>
            </div>
          </div>
        </div>
       <!--IPD Search Follow Up Patient  -->

        <div class="modal fade" id="exampleModalToggle101" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalToggleLabel">Search Follow up Patient</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <div class="card">
                   <div class="card-header">
                       <button class="btn btn-primary" data-bs-target="#exampleModalToggle102" data-bs-toggle="modal">Register New IPD</button>
                   </div>
                   <div class="card-body">
                       <div class="row">
                         <div class="col-xl-2">
                             <input Type="text" class="form-control btn-outline-primary" placeholder="ENTER UHID NO">
                         </div>
                         <div class="col-xl-2">
                             <input Type="text" class="form-control btn-outline-primary" placeholder="FIRST NAME">
                          </div>
                          <div class="col-xl-2">
                             <input Type="text" class="form-control btn-outline-primary" placeholder="MIDDLE NAME">
                          </div>
                          <div class="col-xl-2">
                            <input Type="text" class="form-control btn-outline-primary" placeholder="LAST NAME">
                          </div>
                          <div class="col-xl-2">
                             <input Type="text" class="form-control btn-outline-primary" placeholder="MOBILE NO">
                          </div>
                          <div class="col-xl-2">
                             <!--<input Type="text" class="form-control btn-primary" placeholder="SEARCH">-->
                             <button class="btn btn-primary" style="width:100%;">SEARCH</button>
                          </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-12">
                                <table id="datatable" class="table table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="text-uppercase">
                                         <tr>
                                           <th>Sr.No.</th>
                                           <th>Patient Details</th>
                                           <th>Last Visit Details</th>
                                           <th>Action</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                         <tr>
                                            <td>1</td>
                                            <td>Vishal Mahajan</td>
                                            <td>Edinburgh</td>
                                            <td>Dr.Sanklecha</td>
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
        <div class="modal fade" id="exampleModalToggle102" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalToggleLabel2">Register New IPD</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row mt-3">
                            <div class="col-xl-4 text-uppercase">
                               <b class="text-primary fw-bold">LAST PATIENT :</b>&nbsp;&nbsp;Mr. AMIT YADAV 
                            </div>
                            <div class="col-xl-2 text-uppercase text-nowrap">
                               <b class="text-primary fw-bold">UHID :</b>&nbsp;&nbsp;UHID006413
                            </div>
                            <div class="col-xl-3 text-uppercase text-center">
                              <b class="text-primary fw-bold"> IPD No. :</b>&nbsp;&nbsp;4835
                            </div>
                            <div class="col-xl-3 text-uppercase">
                              <b class="text-primary fw-bold"> Next UHID :</b>&nbsp;&nbsp;UHID006414
                            </div>
                        </div>
                       <div class="row mt-3">
                           <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold">IPD DATE</label>
                               <input type="date" name="" class="form-control">
                           </div>
                           <div class="col-xl-4">
                                <label class="control-label text-primary fw-bold">IPD TIME</label>
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
                       <div class="row">
                          <div class="col-xl-12 mt-3">
                              <h5 class="text-uppercase">Guardian Info</h5>
                          </div>
                       </div>

                        <div class="row mt-3">
                           <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold">G.FIRST NAME</label>
                               <input type="text" name="" class="form-control">
                           </div>
                           <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold">G.MIDDLE NAME</label>
                               <input type="text" name=""  class="form-control">
                           </div>
                           <div class="col-xl-4">
                                <label class="control-label text-primary fw-bold">G.LAST NAME</label>
                                <input type="text" name=""  class="form-control">
                           </div>
                       </div>
                       <div class="row mt-3">
                           <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold">G.MOBILE NO.</label>
                               <input type="text" name="" class="form-control">
                           </div>
                          <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold">G.GENDER</label>
                               <select class="form-control">
                                   <option>Male</option>
                                   <option>Female</option>
                               </select>
                           </div>
                           <div class="col-xl-4">
                               <label class="control-label text-primary fw-bold">G.RELATION</label>
                               <select class="form-control">
                                   <option>Friends</option>
                                   <option>Brother</option>
                               </select>
                           </div>
                       </div>
                       <div class="row mt-3">
                           <div class="col-xl-12">
                                <label class="control-label text-primary fw-bold">ADDRESS</label>
                                <textarea style="width: 100%;height: 20px;" class="form-control"></textarea>
                           </div> 
                       </div>
                       <div class="row">
                           <div class="col-xl-12 mt-3">
                              <h5 class="text-uppercase">Type Of Admission</h5>
                           </div>
                           <div class="col-xl-3 mt-1">
                               <input type="radio" name="">
                               <label class="control-label text-uppercase">Regular</label>
                           </div>
                           <div class="col-xl-3 mt-1">
                               <input type="radio" name="">
                               <label class="control-label text-uppercase">Emergency</label>
                           </div>
                           <div class="col-xl-3 mt-1">
                               <input type="radio" name="">
                               <label class="control-label text-uppercase">Transfer</label>
                           </div>
                           <div class="col-xl-3 mt-1">
                               <input type="radio" name="">
                               <label class="control-label text-uppercase">Readmission</label>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xl-12 mt-3">
                              <h5 class="text-uppercase">IPD Info</h5>
                           </div>
                           <div class="col-xl-3 mt-1">
                               <input type="radio" name="">
                               <label class="control-label text-uppercase">Now Allocate</label>
                           </div>
                           <div class="col-xl-3 mt-1">
                               <input type="radio" name="">
                               <label class="control-label text-uppercase">Later Allocate</label>
                           </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-12">
                               <label class="control-label text-primary fw-bold">PATIENT PAYMENT TYPE</label>
                               <select class="form-control">
                                   <option>CASH</option>
                                   <option>CORPORATE</option>
                               </select>
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
              <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
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

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div> 

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