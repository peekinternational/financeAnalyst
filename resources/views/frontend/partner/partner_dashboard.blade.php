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
//print_r(FA::checkquote()); die;
$tJobs=0;
 foreach($jobs as $item){
			$tJobs+=count($item);
 }
		

?>
  
<div class="container" style="margin-top: 9rem; margin-bottom: 6rem;">
	<div class="row">
		<div class="col-md-12">
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs main-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#job_section" aria-controls="job_section" role="tab" data-toggle="tab">New Jobs</a>
					</li>
					<li role="presentation">
						<a href="#job_management" aria-controls="job_management" role="tab" data-toggle="tab">My Jobs</a>
					</li>
					<li role="presentation">
						<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Business Profile</a>
					</li>
					<li role="presentation">
						<a href="#account" aria-controls="account" role="tab" data-toggle="tab">Account</a>
					</li>
					<!-- <li role="presentation">
						<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Personal messages with client</a>
					</li> -->
					<!-- <li role="presentation">
						<a href="#terms" aria-controls="terms" role="tab" data-toggle="tab">Terms & Conditions</a>
					</li> -->
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="job_section">
						@if(session()->has('message'))
							<div class="row">
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
									<strong>Message:</strong>{{session()->get('message')}}
								</div>
							</div>
						@endif

						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-pills" role="tablist">
								<li role="presentation" class="active">
									<a href="#all_jobs" aria-controls="all_jobs" role="tab" data-toggle="tab">All Jobs ({{$alljobs->count()}})</a>
								</li>
								<li role="presentation">
									<a href="#profile_jobs" aria-controls="profile_jobs" role="tab" data-toggle="tab">My Matches ({{$tJobs}})</a>
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
																<div class="mdi mdi-book sc-kvZOFW eXQcCf"></div>
															</div>
														
															<div>
																<div class="sc-TOsTZ hiHQAi" style="text-transform: capitalize;"><b>{{$alljob->job_title}}</b></div>
																<p class="sc-ksYbfQ dFOSHG">
																	<span>{{$alljob->city}} • </span>#{{$alljob->id}}</p>
																</div>
															</div>
															<div class="sc-cHGsZl iTODfi"><b>Description</b></div>
															<p>{{$alljob->job_case}}</p>
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
																	<div class="sc-cJSrbW irwWzV"></div>
															</div>
														</div>

														<div class="sc-caSCKo laCNAj">
															<div class="sc-kgAjT ktcFPK service-txt"><b>Services needed</b></div>
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
												<div class="row">
															<div class="col-md-7 col-md-offset-5">
														<div class="sc-jqCOkK btptCT sc-jhAzac hBLiWj" style="float: right;">
															<div>
																<!-- <button type="button" class="sc-iRbamj gkmRbZ">Read more</button> -->
															</div>
														</div>
																
														</div>
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
											
												@foreach($jobs as $item)
													@if(count($item)>0)
														@foreach($item as $job)

										<div class="col-md-8">
											<div>
												<div class="sc-hmzhuo fPEirj">
													<div class="sc-caSCKo dokwNX">
														<div class="sc-jhAzac ibcqOI">
															<div>
																<div class="mdi mdi-factory sc-kvZOFW eXQcCf"></div>
															</div>
														
															<div>
																<div class="sc-TOsTZ hiHQAi" style="text-transform: capitalize;"><b>{{$job->job_title}}</b></div>
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
																<div class="sc-cJSrbW irwWzV"></div>
															</div>
														</div>
														<div class="sc-caSCKo laCNAj">
															<div class="sc-kgAjT ktcFPK service-txt"><b>Services needed</b></div>
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
														<div class="row" style="margin: 0;">
															<div class="col-md-4 col-md-offset-8">
																<div class="sc-jqCOkK btptCT sc-jhAzac hBLiWj">
																	<!-- <div>
																		<button type="button" class="sc-iRbamj gkmRbZ">Read more</button>
																	</div> -->
																		<?php
																		date_default_timezone_set("Asia/Karachi");
																		$datetime1 = new DateTime();
																		$date=date('d-m-Y H:i:s', strtotime('+50 minutes',strtotime($job->created_at)));
																		$datetime2 = new DateTime($date);
																		$interval = $datetime1->diff($datetime2);
																		// dd($interval);
																		?>
																				@if($interval->m <1 && $interval->d <1 && $interval->h <1 && $interval->i<51)
																	<div class="sc-jhAzac jqgdQA">
																		<a  class="sc-bRBYWo eeChfy" href="{{url('partner/job_detail/'.$job->id)}}" style="cursor: pointer;">Create a proposal</a>
																		<div class="text-center" style="color: rgb(126, 126, 126); margin-top: 10px;">
																		</div>
																	</div>
																	@else
																	<div class="sc-jhAzac jqgdQA">
																		<a type="button" class="sc-bRBYWo eeChfy timeout-btn"  data-target="" style="cursor: pointer; background-color:blue;">Time out</a>
																		<div class="text-center" style="color: rgb(126, 126, 126); margin-top: 10px;">
																		</div>
																	</div>
																	@endif
																</div>
																
															</div>
														</div>
															
													</div>
												</div>
											</div>
											<!-- Modal -->
											<!-- <div id="profileJob{{$job->id}}" class="modal fade" role="dialog">
											<div class="modal-dialog">

												
												<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Quotes</h4>
												</div>
												<div class="modal-body">
													
													<form action="{{ url('quotepost')}}" method="POST" role="form">
														 {{ csrf_field() }}
														<input type="hidden" name="job_id" id="" value="{{$job->id}}" >
														<div class="form-group">
															<div class="servies_list">
																<div class="row">
																	<div class="col-xs-5">
																		<label>Service</label>
																		<select class="form-control" name="q_services[]">
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
																		<select class="form-control" name="payment_frquency[]">
																			<option>Weekly</option>
																			<option>Monthly</option>
																			<option>Yearly</option>
																		</select>
																	</div>
																	<div class="col-xs-3">
																		<label>Price</label>
																		<input type="text" name="quote_price[]" class="form-control">
																	</div>
																	<div class="col-xs-1">
																		<a href="javascript:void(0)" class="add_more"><i class="fa fa-plus"></i></a>
																	</div>	
																</div>
															</div>
														</div>
														<div class="form-group">
															<label for="">Enter Quote</label>
															<textarea name="quote" id="" class="form-control" rows="6" required="required"></textarea>
														</div>
													
														@if($job->quot > 3)
															<label class="fa fa-exclamation-triangle">Note:</label> Already three partners have quoted on this job, there is a possibility your quote may not be accepted
															@endif

														<button type="submit" class="btn btn-success btn-block">Submit</button>
													</form>
													
													
													
												</div>
												</div>

											</div>
											</div> -->

											<div class="col-md-4"></div>
											@endforeach
										@endif
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
														@foreach($pquots as $quots)
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
													<a href="#widget" aria-controls="widget" role="tab" data-toggle="tab">Certifications</a>
												</li>
												<li role="presentation">
													<a href="#segmentation" aria-controls="segmentation" role="tab" data-toggle="tab">Profile Badges</a>
												</li>
												<li role="presentation">
													<a href="#billing" aria-controls="cv" role="tab" data-toggle="tab">Billing</a>
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
															<div class="sc-TOsTZ hiHQAi">Company description</div>
															<div class="sc-cHGsZl iTzrAd">{{$userinfo->company_des}}</div>
															<div class="sc-cJSrbW gCuqTd"></div>
															<div class="sc-TOsTZ hiHQAi">Company logo</div>
															
															<div class="dropzone text-center company-logo">
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
																	<div class="sc-TOsTZ hiHQAi">Introduce yourself</div>
																	<div class="sc-cHGsZl iTzrAd">Inform your clients that waht is your aim and what you want to to do.</div>
																	<div class="form-group">
																		<label>Your name</label>
																		<input type="text" class="form-control" name="name" readonly="" value="{{Session::get('faUser')->name}}">
																	</div>
																	<div class="form-group">
																		<label>Introduce yourself</label>
																		<textarea class="form-control" name="introduce_urself" cols="8" rows="5">{{$userinfo->introduce_urself}}</textarea>
																	</div>
																</div>
																<div class="sc-caSCKo jKLHsR">
																	<div class="sc-TOsTZ hiHQAi">Company information</div>
																	<div class="sc-cHGsZl iTzrAd">Inform clients of basic information about your company, headquarter location and phone number.</div>
																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>Business Name</label>
																				<input type="text" name="company_name" class="form-control" placeholder="Company Name">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>Business Email</label>
																				<input type="Email" name="company_email" class="form-control" placeholder="Company Email">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>VAT Number</label>
																				<input type="text" name="vat_number" class="form-control" placeholder="VAT Number">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label>Company Number</label>
																				<input type="text" name="company_number" class="form-control" placeholder="Company Number">
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
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Accountant"  name="services[]"@if($service) @foreach($service as $data) {{$data == 'Accountant' ? 'checked="checked"' : '' }} @endforeach @endif>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Accountant
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Bookkeeping"  name="services[]" @if($service) @foreach($service as $data) {{$data == 'Bookkeeping' ? 'checked="checked"' : '' }} @endforeach @endif>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Bookkeeping
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Tax"  name="services[]"@if($service) @foreach($service as $data) {{$data == 'Accountant' ? 'checked="checked"' : '' }} @endforeach @endif>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Tax
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Audit"  name="services[]" @if($service) @foreach($service as $data) {{$data == 'Audit' ? 'checked="checked"' : '' }} @endforeach @endif>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Audit
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Payroll"  name="services[]" @if($service) @foreach($service as $data) {{$data == 'Payroll' ? 'checked="checked"' : '' }} @endforeach @endif>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Payroll
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Incorporation"  name="services[]" @if($service) @foreach($service as $data) {{$data == 'Incorporation' ? 'checked="checked"' : '' }} @endforeach @endif>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Incorporation
																				</div>
																				<div class="sc-jhAzac iGbrby">
																					<label class="sc-bAeIUo fuksr">
																						<input type="checkbox" class="sc-bMVAic kyrrfd" value="Secretarial service"  name="services[]" @if($service) @foreach($service as $data) {{$data == 'Secretarial service' ? 'checked="checked"' : '' }} @endforeach @endif>
																						<div class="sc-gqPbQI ilsJbL">
																							<div class="sc-hORach kMXQwc"></div>
																						</div>
																					</label>Secretarial service
																				</div>
																				
																			</div>
																		</div>
																	</div>
																</div>
																<div>
																
																	<div class="sc-cJSrbW jcDgkN"></div>
																	<div class="sc-caSCKo jKLHsR">
																		<div class="sc-TOsTZ hiHQAi">Why you are best match for the customer</div>
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
											<div role="tabpanel" class="tab-pane" id="review">
												<div class="review_content">
												<!-- Review Form -->
												<div class="row">
													<div id="content1">
													
															<div class="col-md-12" id="review_alert">
															<div class="alert alert-success" style="margin-bottom:0px !important">
																<strong>Review Submitted!</strong> Thank you for completing the review of this submission. Your review has been submitted successfully.
															</div>
															</div>
														
														<form  method="POST" role="form" id="reviews_form">
														   {{csrf_field()}}
														   
														   <div class='rating-stars text-center'>
														      <div class="row" style="margin: 15px 0;">

														      	<div id="half-stars-example" class="col-md-12 text-center">
														      	   <div class="rating-group">
														      	    <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
														      	    <label aria-label="0 stars" data-label="0" class="rating__label" for="rating2-0">&nbsp;</label>
														      	    <label aria-label="0.5 stars" data-label="0.5" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
														      	    <label aria-label="1 stars" data-label="1" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
														      	    <label aria-label="1.5 stars" data-label="1.5" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
														      	    <label aria-label="2 stars" data-label="2" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
														      	    <label aria-label="2.5 stars" data-label="2.5" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio">
														      	    <label aria-label="3 stars" data-label="3" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
														      	    <label aria-label="3.5 stars" data-label="3.5" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
														      	    <label aria-label="4 stars" data-label="4" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
														      	    <label aria-label="4.5 stars" data-label="4.5" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
														      	    <label aria-label="5 stars" data-label="5" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
														      	    <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
														      	   </div>
														      	</div>
														      </div>
														   </div>
														   <!-- <span class="write_review_span"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> -->
														   <!-- </p> -->
														   <div class="write_review_div">
														      <div class="form-group" style="padding-right:15px;">
														         <label for="">Write your review</label>
														         <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Write your review"></textarea>
														      </div>
														   </div>
														   <div class="text-center" style="padding-top: 30px;">
														      <button type="submit" id="submit_review" class="btn btn-success">Submit Evaluation</button>
														   </div>
														</form>
													</div>
												</div>
												<br><br>
												<!-- End Reveiw Form -->
												
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<!-- <p>Review can only be made by dinners who have eaten at this restaurant</p> -->
														<p>
															<span class="rating_heading" style="margin-left: 0px;">Overall Ratings (<span class="users-count">2</span>)</span>
															<span class="rating_star">&nbsp;
	                            <i class="fa fa-star avg-star-1"></i>
	                            <i class="fa fa-star avg-star-2"></i>
	                            <i class="fa fa-star avg-star-3"></i>
	                            <i class="fa fa-star avg-star-4"></i>
	                            <i class="fa fa-star avg-star-5"></i>
	                            </span>
														</p>

													</div>
													<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
                            <div class="side">
                               <div>Excellent</div>
                            </div>
                            <div class="middle md-rating">
                               <div class="bar-container-rating">
                                  <div class="bar-5-rating" style="width:100%"></div>
                                  <span>&nbsp; <span class="rating-5">90</span>%</span>
                               </div>
                            </div>
                            <div class="side">
                               <div>Very Good</div>
                            </div>
                            <div class="middle md-rating">
                               <div class="bar-container-rating">
                                  <div class="bar-4-rating" style="width:45%"></div>
                                  <span>&nbsp; <span class="rating-4">45</span>%</span>
                               </div>
                            </div>
                            <div class="side">
                               <div>Good</div>
                            </div>
                            <div class="middle md-rating">
                               <div class="bar-container-rating">
                                  <div class="bar-3-rating" style="width:50%"></div>
                                  <span>&nbsp; <span class="rating-3">50</span>%</span>
                               </div>
                            </div>
                            <div class="side">
                               <div>Average</div>
                            </div>
                            <div class="middle md-rating">
                               <div class="bar-container-rating">
                                  <div class="bar-2-rating" style="width:20%"></div>
                                  <span>&nbsp; <span class="rating-2">25</span>%</span>
                               </div>
                            </div>
                            <div class="side">
                               <div>Poor</div>
                            </div>
                            <div class="middle md-rating">
                               <div class="bar-container-rating">
                                  <div class="bar-1-rating" style="width:5%"></div>
                                  <span>&nbsp; <span class="rating-1">15</span>%</span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <br>
											<hr>
												<div class="comment_section">
													<div class="review_form">
															<div class="form-group">
																<label for="">Sort By</label>
																<select  class="form-control filter-products">
																	<option value="default">Default</option>
																	<option value="newest">Newest</option>
																	<option value="oldest">Oldest</option>
																</select>
															</div>
													</div><br>
													<div class="table_comments" style="margin-left: 30px;">
													<div class="reviews_container">
															<div class="row review_comment">
																<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
																	<div class="user_image user_image_table" style="margin-left:auto;margin-right:auto">
																			<img src="" class="img-circle" alt="Image" style="width: 100%;">
																		
																	</div>
																	<p class="text-center">Zeeshan</p>
																</div>
																<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
																<p><span>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-o"></i></span></p>
																	<p>review</p>
																</div>
															</div>
															<hr>
													</div>
													</div>
												</div>
											</div>
											</div>
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
	$('.add_more').click(function(){
	// alert("fjsdhfjsd");
	//Check maximum number of input fields
	
		//Increment field counter
																	
		var fieldHTML2 = '<div class="row">'+
		'<div class="col-xs-5"><label>Service</label>'+
		'<select class="form-control" name="q_services[]">'+
		'<option>Select Service</option><option value="Accountant">Accountant</option>'+
		'<option value="Bookkeeper">Bookkeeper</option>'+
		'<option value="Tax">Tax</option>'+
		'<option value="Audit">Audit</option>'+
		'<option value="Payroll">Payroll</option>'+
		'<option value="Incorporation">Incorporation</option>'+
		'<option value="Secretarial service">Secretarial service</option>>'+
		'<option value="Mix your own service pack">Mix your own service pack</option>'+
		'</select>'+
		'</div>'+
		'<div class="col-xs-3"><label>Payment frequency</label>'+
		'<select class="form-control" name="payment_frquency[]">'+
		'<option>Weekly</option>'+
		'<option>Monthly</option>'+
		'<option>Yearly</option>'+
		'</select>'+
		'</div>'+
		'<div class="col-xs-3">'+
		'<label>Price</label>'+
		'<input type="text" name="quote_price[]" class="form-control">'+
		'</div>'+
		//'<div class="col-xs-1">'+
		//'<a href="javascript:void(0)" class="remove_service"><i class="fa fa-minus"></i></a>'+
		'</div>'; //New input field html



		$('.servies_list').append(fieldHTML2); //Add field html
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
$(function(){
  var url = window.location.href;

  var activeTab = url.substring(url.indexOf("#") + 1);
  $('a[href="#'+ activeTab +'"]').tab('show')

  $('.nav-tabs a').click(function (e) {
    $(this).tab('show');
    $(this).addClass('active');
  });
});

</script>

@endsection