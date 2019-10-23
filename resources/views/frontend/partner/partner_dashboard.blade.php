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
<?php
$service=json_decode($userinfo->services, true);

$userImage = url('frontend-assets/images/images.png');
if($userinfo->logo != ''){

	$userImage = url('frontend-assets/partner/profile-photos/'.$userinfo->logo);

}

?>
  
<div class="container" style="margin-top: 9rem;">
	<div class="row">
		<div class="col-md-12">
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs main-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#job_section" aria-controls="job_section" role="tab" data-toggle="tab">Job Section</a>
					</li>
					<li role="presentation">
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

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="job_section">
						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-pills" role="tablist">
								<li role="presentation" class="active">
									<a href="#all_jobs" aria-controls="all_jobs" role="tab" data-toggle="tab">All Jobs ({{$alljobs->count()}})</a>
								</li>
								<li role="presentation">
									<a href="#profile_jobs" aria-controls="profile_jobs" role="tab" data-toggle="tab">Profile Jobs ({{$jobs->count()}})</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="all_jobs">
									<div class="row">
										@foreach($alljobs as $alljob)
										<div class="col-md-8">
											<div>
												<div class="sc-hmzhuo fPEirj">
													<div class="sc-caSCKo dokwNX">
														<div class="sc-jhAzac ibcqOI">
															<div>
																<div class="mdi mdi-factory sc-kvZOFW eXQcCf"></div>
															</div>
														
															<div>
																<div class="sc-TOsTZ hiHQAi">{{$alljob->job_title}}</div>
																<p class="sc-ksYbfQ dFOSHG">
																	<span>{{$alljob->city}} • </span>#{{$alljob->id}}</p>
																</div>
															</div>
															<div class="sc-cHGsZl iTODfi">Description</div>
															{{$alljob->job_case}}
														</div>
														<div class="job_type">
															<div class="sc-caSCKo jKLHsR">
																<div class="row">
																	<div class="col-sm-12">
																		<label class="sc-kjoXOD cVJCmw"><b>Type</b></label>
																		<div class="sc-kgAjT jAtXPi">
																			<span class="sc-hqyNC bVcWWB">{{$alljob->job_type}}</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="sc-caSCKo laCNAj">
															<div class="sc-kgAjT ktcFPK">Services needed</div>
															<div class="sc-cJSrbW irwWzV"></div>
															<div class="sc-jbKcbu eUIbYn row">
																<div class="col-sm-6">{{$alljob->services}}</div>
																<div class="col-sm-6">
																	<span class="sc-hqyNC bVcWWB">Yearly</span>
																	<span> {{$alljob->ended_year}}</span>
																</div>
															</div>
														</div>
														<div class="collapse"></div>
														<div class="sc-jqCOkK btptCT sc-jhAzac hBLiWj">
															<div>
																<button type="button" class="sc-iRbamj gkmRbZ">Read more</button>
															</div>
															<div class="sc-jhAzac jqgdQA">
																<a type="button" class="sc-bRBYWo eeChfy" data-toggle="modal" data-target="#myModal{{$alljob->id}}" style="cursor: pointer;">Create a quote for this client</a>
																<div class="text-center" style="color: rgb(126, 126, 126); margin-top: 10px;">
																</div>
															</div>
															
														</div>
																
														
													</div>
												</div>
											</div>
											<!-- Modal -->
											<div id="myModal{{$alljob->id}}" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Quotes</h4>
												</div>
												<div class="modal-body">
													
													<form action="{{ url('quotepost')}}" method="POST" role="form">
														 {{ csrf_field() }}
														<input type="hidden" name="job_id" id="" value="{{$alljob->id}}" >
														<div class="form-group">
															<div class="row">
																<div class="col-xs-6">
																	<label>Service</label>
																	<select class="form-control" name="q_services">
																		<option>Select Service</option>
																		<option value="Accountant">Accountant</option>
																		<option value="Bookkeeper">Bookkeeper</option>
																		<option value="Tax">Tax</option>
																		<option value="Audit">Audit</option>
																		<option value="Payroll">Payroll</option>
																		<option value="Incorporation">Incorporation</option>
																		<option value="Secretarial service">Secretarial service</option>
																		<option value="Mix your own service pack">Mix your own service pack</option>

															

																	</select>
																</div>
																<div class="col-xs-3">
																	<label>Payment frequency</label>
																	<select class="form-control" name="payment_frquency">
																		<option>Weekly</option>
																		<option>Monthly</option>
																		<option>Yearly</option>
																	</select>
																</div>
																<div class="col-xs-3">
																	<label>Price</label>
																	<input type="text" name="quote_price" class="form-control">
																</div>	
															</div>
														</div>
														<div class="form-group">
															<label for="">Enter Quote</label>
															<textarea name="quote" id="" class="form-control" rows="6" required="required"></textarea>
														</div>
													
														<button type="submit" class="btn btn-success btn-block">Submit</button>
													</form>
												</div>
												</div>

											</div>
											</div>

											<div class="col-md-4"></div>
											@endforeach
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="profile_jobs">
										<div class="row">
											@foreach($jobs as $job)
										<div class="col-md-8">
											<div>
												<div class="sc-hmzhuo fPEirj">
													<div class="sc-caSCKo dokwNX">
														<div class="sc-jhAzac ibcqOI">
															<div>
																<div class="mdi mdi-factory sc-kvZOFW eXQcCf"></div>
															</div>
														
															<div>
																<div class="sc-TOsTZ hiHQAi">{{$job->job_title}}</div>
																<p class="sc-ksYbfQ dFOSHG">
																	<span>{{$job->city}} • </span>#{{$job->id}}</p>
																</div>
															</div>
															<div class="sc-cHGsZl iTODfi">Description</div>
															{{$job->job_case}}
														</div>
														<div class="job_type">
															<div class="sc-caSCKo jKLHsR">
																<div class="row">
																	<div class="col-sm-12">
																		<label class="sc-kjoXOD cVJCmw"><b>Type</b></label>
																		<div class="sc-kgAjT jAtXPi">
																			<span class="sc-hqyNC bVcWWB">{{$job->job_type}}</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="sc-caSCKo laCNAj">
															<div class="sc-kgAjT ktcFPK">Services needed</div>
															<div class="sc-cJSrbW irwWzV"></div>
															<div class="sc-jbKcbu eUIbYn row">
																<div class="col-sm-6">{{$job->services}}</div>
																<div class="col-sm-6">
																	<span class="sc-hqyNC bVcWWB">Yearly</span>
																	<span>{{$job->ended_year}}</span>
																</div>
															</div>
														</div>
														<div class="collapse"></div>
														<div class="sc-jqCOkK btptCT sc-jhAzac hBLiWj">
															<div>
																<button type="button" class="sc-iRbamj gkmRbZ">Read more</button>
															</div>
															<div class="sc-jhAzac jqgdQA">
																<a type="button" class="sc-bRBYWo eeChfy" modifiers="action,p_2,fullWidth"  data-toggle="modal" data-target="#profileJob{{$job->id}}">Create a quote for this client</a>
																<div class="text-center" style="color: rgb(126, 126, 126); margin-top: 10px;">
																</div>
															</div>
															
														</div>
																
														
													</div>
												</div>
											</div>
											<!-- Modal -->
											<div id="profileJob{{$job->id}}" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Quotes</h4>
												</div>
												<div class="modal-body">
													
													<form action="{{ url('quotepost')}}" method="POST" role="form">
														 {{ csrf_field() }}
														<input type="hidden" name="job_id" id="" value="{{$alljob->id}}" >
														<div class="form-group">
															<div class="row">
																<div class="col-xs-6">
																	<label>Service</label>
																	<select class="form-control">
																		<option>Select</option>
																	</select>
																</div>
																<div class="col-xs-3">
																	<label>Payment frequency</label>
																	<select class="form-control" name="payment_frquency">
																		<option>Weekly</option>
																		<option>Monthly</option>
																		<option>Yearly</option>
																	</select>
																</div>
																<div class="col-xs-3">
																	<label>Price</label>
																	<input type="text" name="quote_price" class="form-control">
																</div>	
															</div>
														</div>
														<div class="form-group">
															<label for="">Enter Quote</label>
															<textarea name="quote" id="" class="form-control" rows="6" required="required"></textarea>
														</div>
													
														
													
														<button type="submit" class="btn btn-success btn-block">Submit</button>
													</form>
													
													
													
												</div>
												</div>

											</div>
											</div>

											<div class="col-md-4"></div>
											@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="job_management">
								<div role="tabpanel">
									<!-- Nav tabs -->
									<ul class="nav nav-pills" role="tablist">
										<li role="presentation" class="active">
											<a href="#current_quote" aria-controls="current_quote" role="tab" data-toggle="tab">Current Quotes</a>
										</li>
										<li role="presentation">
											<a href="#previous_quote" aria-controls="previous_quote" role="tab" data-toggle="tab">Previous Quotes</a>
										</li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="current_quote">
											<div class="row">
												<div class="col-md-12">
													<table class="table table-hover">
														<thead>
															<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Location</th>
																<th>Phone</th>
																<th>Notes</th>
																<th>Quote Date</th>
																<th>Status</th>
															</tr>
														</thead>
														<tbody>
														@foreach($rquote as $quots)
															<tr>
																<td><a href="{{url('partner/template_detail/'.$quots->job_id)}}">{{$quots->id}}</a></td>
																<td>{{$quots->job_title}}</td>
																<td>{{$quots->city}}</td>
																<td>{{$quots->mobilenumber}}</td>
																<td>{{$quots->quote}}</td>
																<td>{{$quots->created_at}}</td>
																<td>{{$quots->status}}</td>
															</tr>
															@endforeach
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="previous_quote">
											<div class="row">
												<div class="col-md-12">
													<table class="table table-hover">
													<thead>
															<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Location</th>
																<th>Phone</th>
																<th>Notes</th>
																<th>Quote Date</th>
																<th>Status</th>
															</tr>
														</thead>
														<tbody>
														@foreach($pquote as $quots)
															<tr>
																<td><a href="{{url('partner/template_detail/'.$quots->job_id)}}">{{$quots->id}}</a></td>
																<td>{{$quots->job_title}}</td>
																<td>{{$quots->city}}</td>
																<td>{{$quots->mobilenumber}}</td>
																<td>{{$quots->quote}}</td>
																<td>{{$quots->created_at}}</td>
																<td>{{$quots->status}}</td>
															</tr>
															@endforeach
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="profile">
								<!-- Profile Section -->
								<div class="row">
									<div role="tabpanel">
										<div class="col-md-3">
											<!-- Nav tabs -->
											<ul class="nav nav-tabs profile_tabs" role="tablist">
												<li role="presentation" class="active">
													<a href="#profile_tab" aria-controls="profile_tab" role="tab" data-toggle="tab">Profile</a>
												</li>
												<li role="presentation">
													<a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews</a>
												</li>
												<li role="presentation">
													<a href="#cv" aria-controls="cv" role="tab" data-toggle="tab">Specialities</a>
												</li>
												<li role="presentation">
													<a href="#widget" aria-controls="widget" role="tab" data-toggle="tab">Certifications</a>
												</li>
												<li role="presentation">
													<a href="#segmentation" aria-controls="segmentation" role="tab" data-toggle="tab">Profile Badges</a>
												</li>
											</ul>

											<!-- Tab panes -->
										</div>
										<div class="col-md-9">
											<div class="tab-content">
												<div role="tabpanel" class="tab-pane active" id="profile_tab">
													<div class="sc-hmzhuo fPEirj">
														<div class="sc-caSCKo jKLHsR">
															<h2>Company profile</h2>
															<div class="sc-cHGsZl iTzrAd">{{$userinfo->company_des}}</div>
															<div class="sc-cJSrbW gCuqTd"></div>
															<div class="sc-TOsTZ hiHQAi">Company logo</div>
															
															<div class="dropzone text-center">
															<img class="uploaded-logo" src="{{$userImage}}" alt="...">
																
																
																
															</div>
															<div class="row">
																<div class="col-sm-6">
																	<button type="button" class="sc-iRbamj jRzhOj" onclick="deletepicture()">Delete logo</button>
																</div>
																<div class="col-sm-6">
																	<label type="button" for="upload_logo" class="sc-iRbamj mfToJ">Upload logo</label>
																	<input type="file" class="upload" id="upload_logo"  name="logo"  onchange="uploadpicture(this)" style="opacity: 0;">
																</div>
															</div>
														</div>
														<div class="sc-cJSrbW jcDgkN"></div>
														<div>
															<form action="{{url('partner/partner_dashboard')}}" method="post">
															{{ csrf_field() }}
																<div class="sc-caSCKo jKLHsR">
																	<div class="sc-TOsTZ hiHQAi">Company information</div>
																	<div class="sc-cHGsZl iTzrAd">Inform clients of basic information about your company, headquarter location and phone number.</div>
																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>Company Name</label>
																				<input type="text" name="company_name" class="form-control" placeholder="Company Name">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>Company Email</label>
																				<input type="Email" name="company_email" class="form-control" placeholder="Company Email">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group undefined">
																				<label for="availability" class="sc-bbmXgH fNHatV control-label">Availability</label>
																				<select id="availability" name="availability" class="sc-tilXH bOxhYq form-control">
																					<option value="" >Select..</option>
																					<option value="1" {{ $userinfo->availability == '1' ? 'selected="selected"' : '' }}>24 / 7 - 365</option>
																					<option value="2" {{ $userinfo->availability == '2' ? 'selected="selected"' : '' }}>Regular office hours</option>
																					<option value="3" {{ $userinfo->availability == '3' ? 'selected="selected"' : '' }} >Extended office hours</option>
																				</select>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group undefined">
																				<label for="no_clients" class="sc-bbmXgH fNHatV control-label">Number of clients</label>
																				<select id="no_clients" name="no_clients" class="sc-tilXH bOxhYq form-control">
																					<option value="" >Select..</option>
																					<option value="1" {{ $userinfo->no_clients == '1' ? 'selected="selected"' : '' }}>0-50</option>
																					<option value="2" {{ $userinfo->no_clients == '2' ? 'selected="selected"' : '' }}>51-100</option>
																					<option value="3" {{ $userinfo->no_clients == '3' ? 'selected="selected"' : '' }}>101-200</option>
																					<option value="4" {{ $userinfo->no_clients == '4' ? 'selected="selected"' : '' }}>201-300</option>
																					<option value="5" {{ $userinfo->no_clients == '5' ? 'selected="selected"' : '' }}>301-500</option>
																					<option value="6" {{ $userinfo->no_clients == '6' ? 'selected="selected"' : '' }}>501-750</option>
																					<option value="7" {{ $userinfo->no_clients == '7' ? 'selected="selected"' : '' }}>751-1000</option>
																					<option value="8" {{ $userinfo->no_clients == '8' ? 'selected="selected"' : '' }}>&gt;1000</option>
																				</select>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group undefined">
																				<label for="no_employs" class="sc-bbmXgH fNHatV control-label">Number of employees</label>
																				<select id="no_employs" name="no_employs" class="sc-tilXH bOxhYq form-control">
																					<option value="" >Select..</option>
																					<option value="1" {{ $userinfo->no_employs == '1' ? 'selected="selected"' : '' }}>0-5</option>
																					<option value="2" {{ $userinfo->no_employs == '2' ? 'selected="selected"' : '' }}>6-10</option>
																					<option value="3" {{ $userinfo->no_employs == '3' ? 'selected="selected"' : '' }}>11-15</option>
																					<option value="4" {{ $userinfo->no_employs == '4' ? 'selected="selected"' : '' }}>16-20</option>
																					<option value="5" {{ $userinfo->no_employs == '5' ? 'selected="selected"' : '' }}>21-30</option>
																					<option value="6" {{ $userinfo->no_employs == '6' ? 'selected="selected"' : '' }}>31-45</option>
																					<option value="7" {{ $userinfo->no_employs == '7' ? 'selected="selected"' : '' }}>46-70</option>
																					<option value="8" {{ $userinfo->no_employs == '8' ? 'selected="selected"' : '' }}>71-100</option>
																					<option value="9" {{ $userinfo->no_employs == '9' ? 'selected="selected"' : '' }}>&gt;100</option>
																				</select>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group undefined">
																				<label for="establish" class="sc-bbmXgH fNHatV control-label">Established</label>
																				<input name="established" id="establish" class="sc-tilXH bOxhYq form-control" value="{{$userinfo->established}}" >
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group undefined">
																				<label for="website" class="sc-bbmXgH fNHatV control-label">Website</label>
																				<input name="website" id="website" class="sc-tilXH bOxhYq form-control" value="{{$userinfo->website}}">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group undefined">
																				<label for="address" class="sc-bbmXgH fNHatV control-label">Address</label>
																				<input name="address" id="address" class="sc-tilXH bOxhYq form-control" value="{{$userinfo->address}}">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group undefined">
																				<label for="post code" class="sc-bbmXgH fNHatV control-label">Postal code</label>
																				<input name="post_code" id="post code" class="sc-tilXH bOxhYq form-control" value="{{$userinfo->post_code}}" >
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group undefined">
																				<label for="city" class="sc-bbmXgH fNHatV control-label">City</label>
																				<input name="city" id="city" class="sc-tilXH bOxhYq form-control" value="{{$userinfo->city}}">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group undefined">
																				<label for="phoneno" class="sc-bbmXgH fNHatV control-label">Phone number</label>
																				<input name="phoneno" id="phoneno" class="sc-tilXH bOxhYq form-control" value="{{$userinfo->phoneno}}" >
																			</div>
																		</div>
																	</div>
																</div>
																<div class="sc-cJSrbW jcDgkN"></div>
																<div class="sc-caSCKo jKLHsR">
																	<div class="sc-TOsTZ hiHQAi">Description</div>
																	
																	<div class="sc-jnlKLf adGQN">
																		<label for="companyInformation" class="sc-bbmXgH fNHatV control-label">Company Description</label>
																		<textarea class="sc-gGBfsJ jrocpm" name="company_des" placeholder="company Description">{{$userinfo->company_des}}
																		</textarea>
																	</div>
																	<br>
																	<div>
																		<div class="sc-jnlKLf adGQN">
																			<label for="attributes[11].selected[0].title" class="sc-bbmXgH fNHatV control-label">Company introduction</label>
																			<textarea class="sc-gGBfsJ jrocpm" name="company_info">{{$userinfo->company_info}}</textarea>
																		</div>
																	</div>
																</div>
																<div>
																	<div class="sc-cJSrbW jcDgkN"></div>
																	<div class="sc-caSCKo jKLHsR">
																		<div class="sc-TOsTZ hiHQAi">Services</div>
																		<div class="form-group undefined">
																			<div class="sc-iujRgT hUHAcY">
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Accountant"  name="services[]" @foreach($service as $data) {{$data == 'Accountant' ? 'checked="checked"' : '' }} @endforeach>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Accountant
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Bookkeeping"  name="services[]" @foreach($service as $data) {{$data == 'Bookkeeping' ? 'checked="checked"' : '' }} @endforeach>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Bookkeeping
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Audit"  name="services[]" @foreach($service as $data) {{$data == 'Audit' ? 'checked="checked"' : '' }} @endforeach>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Audit
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Payroll"  name="services[]" @foreach($service as $data) {{$data == 'Payroll' ? 'checked="checked"' : '' }} @endforeach>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Payroll
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Incorporation"  name="services[]" @foreach($service as $data) {{$data == 'Incorporation' ? 'checked="checked"' : '' }} @endforeach>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Incorporation
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Secretarial service"  name="services[]" @foreach($service as $data) {{$data == 'Secretarial service' ? 'checked="checked"' : '' }} @endforeach>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Secretarial service
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Mix your own service pack"  name="services[]" @foreach($service as $data) {{$data == 'Mix your own service pack' ? 'checked="checked"' : '' }} @endforeach>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Mix your own service pack
																				</div>
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div>
																
																	<div class="sc-cJSrbW jcDgkN"></div>
																	<div class="sc-caSCKo jKLHsR">
																		<div class="sc-TOsTZ hiHQAi">Interview</div>
																		<textarea class="sc-gGBfsJ jrocpm" placeholder="Questions to be asked" name="interview">{{$userinfo->interview}}</textarea>
																	</div>
																</div>
																<div>
																	<div class="sc-cJSrbW jcDgkN"></div>
																	<div class="sc-caSCKo jKLHsR"><div class="sc-TOsTZ hiHQAi">Personal quote</div>

																	<div class="sc-jnlKLf adGQN">
																		<label for="attributes[4].selected[0].title" class="sc-bbmXgH fNHatV control-label">Interview quote</label>
																		<textarea class="sc-gGBfsJ jrocpm" name="personal_quets">{{$userinfo->personal_quets}}</textarea>
																	</div>
																</div>
															</div>
														<button type="submit" class="sc-iRbamj jqqRiF">Save company profile</button>
														</form>
														<div class="sc-cJSrbW jcDgkN"></div>
														<div class="showbox"></div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="cv">
												<div class="sc-hmzhuo fPEirj">
													<div class="sc-caSCKo jKLHsR">
														<div class="mini-landing cv">
															<span class="icon">
																<i class="fa fa-file-pdf-o fa-2x"></i>
															</span>
															@if($document)
															<embed src="{{ action('Partner\PartnerController@getDocument') }}"
															style="width:600px; height:800px;"
															frameborder="0">
																@else
															<h1>You need upload your specialities</h1>
															<p>Create trust among your customers and showcase your skills with a personal specialities.</p>
															@endif
															<label for="upload_cv" type="button" class="btn mfToJ">Upload Specialities
															</label>
															<form action="{{url('partner/cv')}}" method="post" enctype="multipart/form-data">
															{{ csrf_field() }}
															<input type="file" name="cv" id="upload_cv" class="cv"  style="opacity: 0;">
																<input type="hidden" name="type" value="special">
																<button type="submit" class="btn btn-success">Save Change</button>
																</form>
																
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="widget">
												<div class="sc-hmzhuo fPEirj">
													<div class="sc-caSCKo jKLHsR">
														<div class="mini-landing cv">
															<span class="icon">
																<i class="fa fa-file-pdf-o fa-2x"></i>
															</span>
																@if($document)
															<embed src="{{ action('Partner\PartnerController@getDocumentcer') }}"
															style="width:600px; height:800px;"
															frameborder="0">
																@else
															<h1>You need upload your Certification</h1>
															@endif
															<label for="upload" type="button" class="btn mfToJ">Upload Certification
															</label>
															
															<form action="{{url('partner/cartification')}}" method="post" enctype="multipart/form-data">
															{{ csrf_field() }}
															<input type="file" name="cer" id="upload" class="cv"  style="opacity: 0;">
																<input type="hidden" name="type" value="certification">
																<button type="submit" class="btn btn-success">Save Change</button>
																</form>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="review">Review</div>
											<div role="tabpanel" class="tab-pane" id="segmentation">Profile badge</div>
										</div>
									</div>
								</div>
							</div>
								<!-- End Profile Section -->
							</div>
							<div role="tabpanel" class="tab-pane" id="account">
								<div class="row">
									<div role="tabpanel">
										<div class="col-md-3">
											<!-- Nav tabs -->
											<ul class="nav nav-tabs profile_tabs" role="tablist">
												<li role="presentation" class="active">
													<a href="#account_status" aria-controls="account_status" role="tab" data-toggle="tab">Account Status</a>
												</li>
												<li role="presentation">
													<a href="#invoice" aria-controls="invoice" role="tab" data-toggle="tab">Invoice</a>
												</li>
												<li role="presentation">
													<a href="#refund" aria-controls="refund" role="tab" data-toggle="tab">Refunds</a>
												</li>
											</ul>
										</div>

										<div class="col-md-9">
											<!-- Tab panes -->
											<div class="tab-content">
												<div role="tabpanel" class="tab-pane" id="account_status">
													Account status
												</div>
												<div role="tabpanel" class="tab-pane active" id="invoice">
													<div class="sc-hmzhuo fPEirj">
														<div class="sc-caSCKo jKLHsR">
															<div>
																<div class="sc-TOsTZ hiHQAi">Invoices</div>
																<table class="datatable responsive compact">
																	<thead><tr><th class="table-mobile-cell"></th><th>Invoice number</th><th>Invoice date</th><th>Amount</th><th>Due date</th><th>Status</th></tr></thead>
																	<tbody>
																		<tr>
																			<td class="table-mobile-cell">
																				<table class="definition-list">
																					<tbody>
																						<tr>
																							<td>Invoice number:</td>
																							<td><a href="/invoices/42014">Invoice #16606</a></td>
																						</tr>
																						<tr>
																							<td>Invoice date:</td><td><span>07/01/2019</span></td>
																						</tr>
																						<tr>
																							<td>Amount:</td><td><span>£112.50</span></td>
																						</tr>
																						<tr>
																							<td>Due date:</td><td><span>09/01/2019</span></td>
																						</tr>
																						<tr>
																							<td>Status:</td><td><span class="label label-success">Paid</span></td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																			<td><a href="/invoices/42014">Invoice #16606</a></td><td><span>07/01/2019</span></td>
																			<td class="amount"><span>£112.50</span></td>
																			<td><span>09/01/2019</span></td>
																			<td><span class="label label-success">Paid</span></td>
																		</tr>


																		<tr>
																			<td class="table-mobile-cell">
																				<table class="definition-list"><tbody>
																					<tr>
																						<td>Invoice number:</td>
																						<td><a href="/invoices/40457">Credit note #16021</a></td>
																					</tr>
																					<tr>
																						<td>Invoice date:</td>
																						<td><span>27/11/2018</span></td>
																					</tr>
																					<tr>
																						<td>Amount:</td>
																						<td><span>-£195.00</span></td>
																					</tr>
																					<tr>
																						<td>Due date:</td>
																						<td><span>27/11/2018</span></td>
																					</tr>
																					<tr>
																						<td>Status:</td>
																						<td><span class="label label-success">un paid</span></td>
																					</tr>
																				</tbody>
																			</table>
																		</td>
																		<td><a href="/invoices/40457">Credit note #16021</a></td>
																		<td><span>27/11/2018</span></td>
																		<td class="amount"><span>-£195.00</span></td>
																		<td><span>27/11/2018</span></td>
																		<td><span class="label label-success">Un Paid</span></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="refund">
												<div class="card">
													<h2>Refunds</h2>
													<div>
														<table class="sc-gwVKww fybuiN">
															<thead>
																<tr class="sc-hXRMBi fVoksB">
																	<th class="table-mobile-cell"></th>
																	<th>Invoice number</th>
																	<th>Request date</th>
																	<th>Requested refund total</th>
																	<th>Status</th>
																	<th>Accepted refund amount</th>
																	<th>Reason</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="table-mobile-cell">
																		<table class="definition-list">
																			<tr>
																				<td>Invoice number</td>
																				<td><a href="" target="_blank">Invoice #15836</a></td>
																			</tr>
																			<tr>
																				<td>Request date</td>
																				<td><span>23/11/2018</span></td>
																			</tr>
																			<tr>
																				<td>Requested refund total</td>
																				<td><span>£180.00</span></td>
																			</tr>
																			<tr>
																				<td>Status</td>
																				<td><span class="label label-new">Accepted</span></td>
																			</tr>
																			<tr>
																				<td>Accepted refund amount</td>
																				<td><span>£180.00</span></td>
																			</tr>
																			<tr>
																				<td>Reason</td>
																				<td>Client chose local solution. never signed letter of engagement </td>
																			</tr>
																		</table>
																	</td>
																	<td><a href="" target="_blank">Invoice #15836</a></td>
																	<td><span>23/11/2018</span></td>
																	<td><span>£180.00</span></td>
																	<td><span class="label label-success">Accepted</span></td>
																	<td><span>£180.00</span></td>
																	<td>Client chose local solution. never signed letter of engagement </td>
																</tr>
															</tbody>
														</table>
														<hr><a class="btn btn-action btn-lg btn-block" href="/account/refunds-create">Request refund</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="messages">..Messages.</div>
						<div role="tabpanel" class="tab-pane" id="terms">...Terms Conditions ... </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('script')
<script>
	var hash = document.location.hash;

	if (hash) {
	    $('.nav-tabs a[href='+hash+']').tab('show');
	} 

	// Change hash for page-reload
	$('.nav-tabs a').on('shown.bs.tab', function (e) {
	    window.location.hash = e.target.hash;
	});


//alert('jfjsdf');
var url="{{url('/')}}";
function uploadpicture(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	var formData = new FormData();
	formData.append('logo', $('.upload')[0].files[0]);

	console.log(formData);
	$.ajax({
		url : "{{ url('partner/profile/picture') }}",
		type : 'POST',
		data :  formData,
		processData: false,
		contentType: false,
		timeout: 30000000,
		success : function(response) {
			if($.trim(response) != '1'){
			
				$('img.uploaded-logo').attr('src',response);
				
			}else{
				alert('Following format allowed (PNG/JPG/JPEG)');
			}
		}
	});
}

function uploadcv(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	var formData = new FormData();
	formData.append('cv', $(this)[0]);

	console.log(formData);
	$.ajax({
		url : "{{ url('partner/cv') }}",
		type : 'POST',
		data :  formData,
		processData: false,
		contentType: false,
		timeout: 30000000,
		success : function(response) {
			// if($.trim(response) != '1'){
			
			// 	$('img.uploaded-logo').attr('src',response);
				
			// }else{
			// 	alert('Following format allowed (PNG/JPG/JPEG)');
			// }
		}
	});
}

function deletepicture(){
	
	$.ajax({
		url : "{{ url('partner/profile/picturedel') }}",
		type : 'get',
		success : function(response) {
			console.log(response);
			if($.trim(response) == '1'){
			
				$('img.uploaded-logo').attr('src',url+'/frontend-assets/images/images.png');
				
			}else{
				alert('Following format allowed (PNG/JPG/JPEG)');
			}
		}
	});
}
</script>

@endsection