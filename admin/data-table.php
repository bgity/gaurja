<?php 
include 'header.php';
include 'sidebar.php';

?>
		
			
		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Data table</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>table</span></a></li>
						<li class="active"><span>data-table</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">data Table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
													</tr>
												</thead>
												
												<tbody>
													
													<tr>
														<td>Donna Snider</td>
														<td>Customer Support</td>
														<td>New York</td>
														<td>27</td>
														<td>2011/01/25</td>
														<td>$112,000</td>
													</tr>
												</tbody>
											
												<tfoot>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Complex Header</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_2" class="table table-hover table-bordered display mb-30" >
												<thead>
													<tr>
														<th rowspan="2">Name</th>
														<th colspan="2">HR Information</th>
														<th colspan="3">Contact</th>
													</tr>
													<tr>
														<th>Position</th>
														<th>Salary</th>
														<th>Office</th>
														<th>Extn.</th>
														<th>E-mail</th>
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>$320,800</td>
														<td>Edinburgh</td>
														<td>5421</td>
														<td>t.nixon@datatables.net</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>$170,750</td>
														<td>Tokyo</td>
														<td>8422</td>
														<td>g.winters@datatables.net</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>$86,000</td>
														<td>San Francisco</td>
														<td>1562</td>
														<td>a.cox@datatables.net</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>$433,060</td>
														<td>Edinburgh</td>
														<td>6224</td>
														<td>c.kelly@datatables.net</td>
													</tr>
												</tbody>
											
												<tfoot>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
														<th>Office</th>
														<th>Extn.</th>
														<th>E-mail</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>	
								</div>	
							</div>	
						</div>	
					</div>
				</div>
				<!-- /Row -->
			</div>
			
<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2018 &copy; Grandin. Pampered by Hencework</p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
			
			</div>			

    <?php include 'footer.php'; ?>