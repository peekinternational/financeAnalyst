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
						<a href="{{url('partner/partner_dashboard#job_section')}}" aria-controls="job_section">New Jobs</a>
					</li>
					<li role="presentation" class="active">
						<a href="#job_management" aria-controls="job_management" role="tab" data-toggle="tab">My Jobs</a>
					</li>
					<li role="presentation">
						<a href="{{url('partner/partner_dashboard#profile')}}" aria-controls="profile">Business Profile</a>
					</li>
					<li role="presentation">
						<a href="{{url('partner/partner_dashboard#account')}}" aria-controls="account" role="tab" data-toggle="tab">Account</a>
					</li>
					<!-- <li role="presentation">
						<a href="{{url('partner/partner_dashboard#messages')}}" aria-controls="messages" role="tab" data-toggle="tab">Personal messages with client</a>
					</li>
					<li role="presentation">
						<a href="{{url('partner/partner_dashboard#terms')}}" aria-controls="terms" role="tab" data-toggle="tab">Terms & Conditions</a>
					</li> -->
				</ul>
				<div class="tab-content">
					<div role="tabpanel">
						
						<div class="col-md-12">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="case_detail">
									<div class="row">
										<div class="col-xs-12">
											<div class="row">
												<div class="col-md-12">
													<div class="about-section-content">
														<div class="row">
															<div class="col-md-6">
															<h4>About the client</h4>
																<div class="row">
																	<div class="col-xs-12">
																		<p>Case Status:  {{$data->status}}</p>
																		<p><i class="fa fa-user"></i>  Client Name: {{$data->customer_name}}</p> 
																		<p><i class="fa fa-building"></i>  Company Name: {{$data->company_name}}</p> 
																		<p><i class="fa fa-map-marker"></i>  Location: {{$data->city}}</p>
																	</div> 
																	<div class="col-xs-12">
																		<button class="btn cta-button btn-lg" style="width: 49%;"><i class="fa fa-phone"></i> Call Client</button>
																		<button class="btn cta-button btn-lg" style="width: 49%;"><i class="fa fa-envelope"></i> E-mail the Client</button>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																	<h4>Services needed</h4>
																<div class="">
																	<div class="row">
																		<div class="col-md-6">Annual accounts</div>
																		<div class="col-md-6">{{$data->annual_accounts}}</div>
																	</div>
																	<div class="row">
																		<div class="col-md-6">Corporation tax</div>
																		<div class="col-md-6">{{$data->tax_return}}</div>
																	</div>
																	<div class="row">
																		<div class="col-md-6">Confirmation statement</div>
																		<div class="col-md-6">{{$data->confirmation_statement}}</div>
																	</div>
																	<div class="row">
																		<div class="col-md-6">Self Assessment tax return</div>
																		<div class="col-md-6">{{$data->self_tax_return}}</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Case Description -->
											<div class="row">
												<div class="col-xs-12">
													<div class="about-section-content">
														<h4>Case Description</h4>
														<p>
															{{$data->job_case}}
														</p>
														<div class="text-right">
															<a href="{{ url('partner/pdf/'.$data->job_id)}}" class="btn btn-primary">Download as PDF</a>
														</div>
													</div>
												</div>
											</div>
											<!-- End Case Description -->
											<!-- Quote Section -->
											<div class="row">
												<div class="col-xs-12">
													<div class="about-section-content">
														<form action="{{ url('quotepost')}}" method="POST" role="form">
															 {{ csrf_field() }}
															<input type="hidden" name="job_id" id="" value="{{$data->job_id}}" >
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
																		<div class="col-xs-1" style="line-height: 5;">
																			<a href="javascript:void(0)" class="add_more"><i class="fa fa-plus"></i></a>
																		</div>	
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label for="">Enter Quote</label>
																<textarea name="quote" id="" class="form-control" rows="6" required="required"></textarea>
															</div>

															@if(FA::checkquote($data->job_id) > 3)
																<label class="fa fa-exclamation-triangle">Note:</label> Already three partners have quoted on this job, there is a possibility your quote may not be accepted
																@endif


															<div class="form-group text-right">
																<button type="submit" class="btn btn-success">Submit</button>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- End Quote section -->
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
@section('script')
<script>
	
	var x = 0;
	$('.add_more').click(function(){
	// alert("fjsdhfjsd");
	//Check maximum number of input fields
	
		//Increment field counter
																
		var fieldHTML2 = '<div class="row" id="service'+x+'">'+
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
		'<div class="col-xs-1" style="line-height: 5;">'+
		'<a href="javascript:void(0)" class="remove_service" onclick="deleteService('+x+');"><i class="fa fa-minus"></i></a>'+
		'</div>'; //New input field html



		$('.servies_list').append(fieldHTML2); //Add field html
		x++;
	});
	function deleteService(id){
		
		$('#service'+id).remove();
	};

</script>
@endsection