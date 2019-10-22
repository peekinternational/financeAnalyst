@extends('layouts.app')
@section('content')
<style>
	body{
		background-color: #fff;
	}
	.hero{
		display: none;
	}
</style>
<div class="container" style="margin-top: 9rem;">
	<div class="row">
		<div class="col-md-12">
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs main-tabs" role="tablist">
					<li role="presentation">
						<a href="#job_section" aria-controls="job_section" role="tab" data-toggle="tab">Job Section</a>
					</li>
					<li role="presentation" class="active">
						<a href="#job_management" aria-controls="job_management" role="tab" data-toggle="tab">Job management</a>
					</li>
					<li role="presentation">
						<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a>
					</li>
					<li role="presentation">
						<a href="#account" aria-controls="account" role="tab" data-toggle="tab">Account section</a>
					</li>
					<li role="presentation">
						<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Personal messages with client</a>
					</li>
					<li role="presentation">
						<a href="#terms" aria-controls="terms" role="tab" data-toggle="tab">Terms & Conditions</a>
					</li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel">
						<div class="col-md-3">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs profile_tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#case_detail" aria-controls="case_detail" role="tab" data-toggle="tab">Case details</a>
								</li>
								<li role="presentation">
									<a href="#quote" aria-controls="quote" role="tab" data-toggle="tab">Quote</a>
								</li>
							</ul>
							<!-- Tab panes -->
						</div>
						<div class="col-md-9">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="case_detail">
									<div class="row">
										<div class="col-xs-12">
											<div class="row">
												<div class="col-xs-6">
													<div class="about-section-content">
														<h4>About the client</h4>
														<p>Case Status:  Won</p>
														<p><i class="fa fa-user"></i>  Client Name</p>
														<p><i class="fa fa-building"></i>  Company Name</p>
														<p><i class="fa fa-map-marker"></i>  Location</p>
														<br><br>
														<button class="btn btn-info btn-block btn-lg"><i class="fa fa-phone"></i> Call Client</button>
														<button class="btn btn-info btn-block btn-lg"><i class="fa fa-envelope"></i> E-mail the Client</button>
													</div>
												</div>
												<div class="col-xs-6"></div>
											</div>
											<div class="case-section">
												<div role="tabpanel">
													<!-- Nav tabs -->
													<ul class="nav nav-tabs" role="tablist">
														<li role="presentation" class="active">
															<a href="#highlights" aria-controls="highlights" role="tab" data-toggle="tab">Case Highlights</a>
														</li>
														<li role="presentation">
															<a href="#service_needed" aria-controls="service_needed" role="tab" data-toggle="tab">Services needed</a>
														</li>
														<li role="presentation">
															<a href="#caseDetail" aria-controls="caseDetail" role="tab" data-toggle="tab">Case detail</a>
														</li>
														<li role="presentation">
															<a href="#description" aria-controls="tab" role="tab" data-toggle="tab">Case description</a>
														</li>
													</ul>
												
													<!-- Tab panes -->
													<div class="tab-content">
														<div role="tabpanel" class="tab-pane active" id="highlights">
															<div class="row">
																<div class="col-md-12">
																	<div class="about-section-content">
																		<p>Newly Started Consulting Limited - Local - Fair Price - Annual Accounts #201396</p>
																		<div class="row">
																			<div class="col-md-6">Annual amount of annexes</div>
																			<div class="col-md-6">50</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="service_needed">
															<div class="row">
																<div class="col-md-12">
																	<div class="about-section-content">
																		<h4>Services needed</h4>
																		<div class="row">
																			<div class="col-md-6">Annual accounts</div>
																			<div class="col-md-6">Yearly</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Corporation tax</div>
																			<div class="col-md-6">Yearly</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Confirmation statement</div>
																			<div class="col-md-6">Yearly</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Self Assessment tax return</div>
																			<div class="col-md-6">Yearly</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="caseDetail">
															<div class="row">
																<div class="col-md-6">
																	<div class="about-section-content">
																		<h4>About the Client</h4>
																		<div class="row">
																			<div class="col-md-6">Vision for future</div>
																			<div class="col-md-6">Stable</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Experience as business owner</div>
																			<div class="col-md-6">Some experience</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Has had previous partner</div>
																			<div class="col-md-6">No</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Reason of change</div>
																			<div class="col-md-6">Price</div>
																		</div>
																		<h4>About the bookkeeping</h4>
																		<div class="row">
																			<div class="col-md-6">State of the bookkeeping</div>
																			<div class="col-md-6">Bookkept</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="about-section-content">
																		<h4>Preferences for the partner</h4>
																		<div class="row">
																			<div class="col-md-6">Partner should be (1)</div>
																			<div class="col-md-6">Focused on couseling</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Partner should be (2)</div>
																			<div class="col-md-6">Experienced</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Partner should be (3)</div>
																			<div class="col-md-6">Price transparent</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Communication style</div>
																			<div class="col-md-6">Formal</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">Material is delivered</div>
																			<div class="col-md-6">Mostly digital</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div role="tabpanel" class="tab-pane" id="description">
															<div class="about-section-content">
																<p>
																	Newly Started Consulting Limited - Local - Fair Price - Annual Accounts (#201396)

																	The client is a newly started consulting limited. She is looking for a long term partner who can advise her at the start and provide guidance through the year. The client would like an accountant who is local, reachable, and offers a fair price.
																</p>
																<button class="btn btn-primary">Download as PDF</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="quote">
									<div class="row">
										<div class="col-md-12">
											<div class="about-section-content">
												<h4>Quote</h4>
												<div class="row">
													<div class="col-md-6"><b>Status:</b> Case Won</div>
													<div class="col-md-6"><b>Created Date:</b> 12-12-2090</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<h5><strong>Description</strong></h5>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
			</div>
		</div>
	</div>
</div>
@endsection