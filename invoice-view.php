<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Invoice - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include_once("includes/header.php");?>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<?php include_once("includes/sidebar.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Invoice</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Invoice</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<div class="btn-group btn-group-sm">
									<button class="btn btn-white">CSV</button>
									<button class="btn btn-white">PDF</button>
									<button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6 m-b-20">
											<img src="assets/img/logo2.png" class="inv-logo" alt="">
				 							<ul class="list-unstyled">
												<li>SMART-HR</li>
												<li>Konappa Agrahara near ring road,</li>
												<li>Bengaluru, 560068</li>
												<li>GST No: </li>
											</ul>
										</div>
										<div class="col-sm-6 m-b-20">
											<div class="invoice-details">
												<h3 class="text-uppercase">Invoice INV-0001</h3>
												<ul class="list-unstyled">
													<li>Date: <span> Oct 11, 2023</span></li>
													<li>Due date: <span>Nov 07, 2023</span></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
											<h5>Invoice to:</h5>
				 							<ul class="list-unstyled">
												<li><h5><strong>Girish</strong></h5></li>
												<li><span>Global Technologies</span></li>
												<li>Electronic city</li>
												<li>Near plaza, 560068</li>
												<li>Bengaluru</li>
												<li>812-727-7644</li>
												<li><a href="#">girishclient123@gmail.com</a></li>
											</ul>
										</div>
										<div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
											<span class="text-muted">Payment Details:</span>
											<ul class="list-unstyled invoice-payment-details">
												<li><h5>Total Due: <span class="text-right">₹18,89,100</span></h5></li>
												<li>Bank name: <span>ICICI Bank</span></li>
												<li>Country: <span>India</span></li>
												<li>City: <span>Bengaluru</span></li>
												<li>Address: <span>Electronic city</span></li>
												<li>Transaction ID: <span>KFH37784028476740</span></li>
												<li>SWIFT code: <span>BPT4E</span></li>
											</ul>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-striped table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>ITEM</th>
													<th class="d-none d-sm-table-cell">DESCRIPTION</th>
													<th>UNIT COST</th>
													<th>QUANTITY</th>
													<th class="text-right">TOTAL</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Android Application</td>
													<td class="d-none d-sm-table-cell">.........................................</td>
													<td>₹2,45,550</td>
													<td>2</td>
													<td class="text-right">₹4,91,100</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Ios Application</td>
													<td class="d-none d-sm-table-cell">.........................................</td>
													<td>₹5,45,300</td>
													<td>1</td>
													<td class="text-right">₹5,45,300</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Codeigniter Project</td>
													<td class="d-none d-sm-table-cell">.........................................</td>
													<td>₹90,000</td>
													<td>3</td>
													<td class="text-right">₹2,70,000</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Phonegap Project</td>
													<td class="d-none d-sm-table-cell">.........................................</td>
													<td>₹2,00,000</td>
													<td>2</td>
													<td class="text-right">₹4,00,000</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Website Optimization</td>
													<td class="d-none d-sm-table-cell">.........................................</td>
													<td>₹1,82,700</td>
													<td>1</td>
													<td class="text-right">₹1,82,700</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div>
										<div class="row invoice-payment">
											<div class="col-sm-7">
											</div>
											<div class="col-sm-5">
												<div class="m-b-20">
													<div class="table-responsive no-border">
														<table class="table mb-0">
															<tbody>
																<tr>
																	<th>Subtotal:</th>
																	<td class="text-right">₹16,05,700</td>
																</tr>
																<tr>
																	<th>Tax: <span class="text-regular">(15%)</span></th>
																	<td class="text-right">₹2,83,365</td>
																</tr>
																<tr>
																	<th>Total:</th>
																	<td class="text-right text-primary"><h5>₹18,89,100</h5></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="invoice-info">
											<h5>Other information</h5>
											<p class="text-muted">................................................................................................................................................</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>