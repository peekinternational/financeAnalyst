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
<?php $service=json_decode($data->service_needed, true); ?>
<?php $service_required=json_decode($data->service_required, true);  ?>
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

																		<button class="btn cta-button btn-lg"  style="width: 49%;"><i class="fa fa-phone"></i> Call Client</button>
																		<button class="btn cta-button btn-lg"   style="width: 49%;"><i class="fa fa-envelope"></i> E-mail the Client</button>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<h4>Services needed</h4>
																<div class="row">
																	@if($service_required)
																	@foreach($service_required as $data_need)
																	<div class="col-md-12">
																		{{$data_need}}
																	</div>
																	@endforeach
																	@endif
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
														<div class="text-right" style="display:none">
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
															<div class="form-group" id="top_row">
																<div class="servies_list" >
																	<div class="row" >
																		<div class="col-xs-5">
																			<label>Service</label>
																			<select class="form-control" name="q_services[]">
																				<option>Select Service</option>
																				@if($service_required) @foreach($service_required as $data_need)
																				<option value="{{$data_need}}">{{$data_need}}</option>
																				@endforeach
																				@endif
																			</select>
																		</div>
																		<!-- <div class="col-xs-5">
																			<label>Service</label>
																			<select class="form-control" name="q_services[]">
																				<option>Select Service</option>
																				@if($service) @foreach($service as $data_need)
																				<option value="{{$data_need}}">{{$data_need}}</option>
																				@endforeach
																				@endif
																			</select>
																		</div> -->
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
															<div id="main_div" style="display:none">
															<div id="qoute_ajax"></div>
															<div class="form-group" >
																<label for="">Enter Quote</label>
																<textarea name="quote" id="" class="form-control" rows="6" required="required"></textarea>
															</div>

															@if(FA::checkquote($data->job_id) > 3)
																<label class="fa fa-exclamation-triangle">Note:</label> Already three partners have quoted on this job, there is a possibility your quote may not be accepted
																@endif

                                                           <div class="form-group text-left" id="back">
																<button type="button" class="btn btn-success">Back</button>
															</div>
															<div class="form-group text-right">
																<button type="submit" class="btn btn-success">Submit</button>
															</div>
															</div>
															<div class="form-group text-right" id="next">
																<button type="button" class="btn btn-success">Next</button>
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

	var services= <?php echo json_encode($service); ?>;
	var services_required= <?php echo json_encode($service_required); ?>;
	console.log(services_required);

	var x = 0;
	$('.add_more').click(function(){
		var ser='';
	for(var i=0; i < services_required.length; i++){
		console.log(services_required[i]);
		ser+='<option value="'+services_required[i]+'">'+services_required[i]+'</option>';
	}
	//Check maximum number of input fields

		//Increment field counter

		var fieldHTML2 = '<div class="row" id="service'+x+'">'+
		'<div class="col-xs-5"><label>Service</label>'+
		'<select class="form-control" name="q_services[]"><option>Select Service</option>'+ser+
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

	$('#next').click(function(){
		var formdata=$('form').serialize();
		console.log(formdata);
		$.ajax({
        url: "{{ url('quote_ajax')}}",
        type: "post",
        data: formdata ,
        success: function (response) {
			console.log(response);
         $('#qoute_ajax').html(response);
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
			$('#main_div').show();
			$('#top_row').hide();
			$('#next').hide();
		});
	$('#back').click(function(){
			$('#main_div').hide();
			$('#top_row').show();
			$('#next').show();
   });

</script>
@endsection
