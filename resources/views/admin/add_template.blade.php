@extends('admin.layouts.master')
@section('content')
<div class="wrapper">
  <div class="main-panel">
		<div class="content">
		  <div class="row">
		    <div class="col-md-12">
		      <div class="card card-user">
		        <div class="card-header">
		          <h5 class="card-title">Add Template</h5>
		        </div>
		        <div class="card-body">
		          <form method="post" action="">
							 {{ csrf_field() }}
					  @if(count($errors))
						  <div class="form-group">
							  <div class="alert alert-danger">
								  <ul>
									  @foreach ($errors->all() as $error)
										  <li>{{$error}}</li>
									  @endforeach
								  </ul>
							  </div>
						  </div>
					  @endif
					  @if(session()->has('message'))
						  <div class="row">
							  <div class="alert alert-success">
								  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
								  <strong>Message:</strong>{{session()->get('message')}}
							  </div>
						  </div>
					  @endif
		          	<h4 class="field-title">Contact Information</h4>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Phone Number</label>
		                  <input type="number" class="form-control" min="0" placeholder="Phone Number" name="phone_number" @if(!empty($template))value="{{$template->phone_number}}" @endif>
		                </div>
		              </div>
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Mobile Number</label>
		                  <input type="number" name="mbl_number" min="0" class="form-control" placeholder="Mobile Number" @if(!empty($template)) value="{{$template->mbl_number}}" @endif >
		                </div>
		              </div>
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Email address</label>
		                  <input type="email" name="email" class="form-control" placeholder="Email" @if(!empty($template)) value="{{$template->email}}" @endif >
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Location</label>
		                  <input type="text" name="location" class="form-control" placeholder="Location"  @if(!empty($template)) value="{{$template->location}}" @endif >
		                </div>
		              </div>
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Business Address</label>
		                  <input type="text" name="business_address" class="form-control" placeholder="Business Address"  @if(!empty($template)) value="{{$template->business_address}}" @endif >
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Comapny Name</label>
		                  <input type="text" name="company_name" class="form-control" placeholder="Comapny Name"  @if(!empty($template)) value="{{$template->company_name}}" @endif >
		                </div>
		              </div>
		            </div>
		            <h4 class="field-title">Case Highlights</h4>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Legal Structure</label>
		                  <select class="form-control" name="legal_structure">
		                  	<option @if(!empty($template)) {{$template->legal_structure =="Ltd Company (UK)"}} selected="selected" @endif >Ltd Company (UK)</option>
		                  	<option @if(!empty($template)) {{$template->legal_structure =="Ltd Company (other)"}} selected="selected" @endif>Ltd Company (other)</option>
		                  	<option @if(!empty($template)) {{$template->legal_structure =="Sole Trader"}} selected="selected" @endif>Sole Trader</option>
		                  	<option @if(!empty($template)) {{$template->legal_structure =="LLP"}} selected="selected" @endif>LLP</option>
		                  	<option @if(!empty($template)) {{$template->legal_structure =="Charity"}} selected="selected" @endif>Charity</option>
		                  	<option @if(!empty($template)) {{$template->legal_structure =="Trust"}} selected="selected" @endif>Trust</option>
		                  	<option @if(!empty($template)) {{$template->legal_structure =="Other"}} selected="selected" @endif>Other</option>
		                  </select>
		                </div>
		              </div>
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Currency</label>
		                  <input type="text" name="currency" class="form-control" placeholder="Country"  @if(!empty($template)) value="{{$template->currency}}" @endif>
		                </div>
		              </div>
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Turnover</label>
		                  <input type="number" name="turnover" class="form-control" placeholder="Turnover"  @if(!empty($template)) value="{{$template->turnover}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Year end</label>
		                  <input type="date" name="year_end" class="form-control" placeholder="Comapny Name"  @if(!empty($template)) value="{{$template->year_end}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Deadline</label>
		                  <input type="date" name="deadline" class="form-control"  @if(!empty($template)) value="{{$template->deadline}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Number of Locations</label>
		                  <input type="number" name="nmber_location" min="0" class="form-control" placeholder="Comapny Location"  @if(!empty($template)) value="{{$template->nmber_location}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Current Bookkeeping Status</label>
		                  <select class="form-control" name="bookkeeping_status">
		                  	<option>Yes</option>
		                  	<option>No</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Software Use</label>
		                  <input type="text" name="software_use" class="form-control" placeholder="Software Use"  @if(!empty($template)) value="{{$template->software_use}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Budget</label>
		                  <input type="text" name="budget" class="form-control" placeholder="82484524"  @if(!empty($template)) value="{{$template->budget}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Other</label>
		                  <input type="text" name="other" class="form-control" placeholder="Other"  @if(!empty($template)) value="{{$template->other}}" @endif>
		                </div>
		              </div>
		            </div>
		            <h4 class="field-title">Services Needed</h4>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">

		                  <label>Company Registration</label>
		                  <select name="company_resgiter_number" class="form-control">
		                  	<option value="Yes"  @if($template->company_resgiter_number ="Yes") selected="selected"@endif >Yes</option>
		                  	<option value="No"  @if($template->company_resgiter_number ="No") selected="selected" @endif >No</option>
		                  	<option value="Not Sure"  @if($template->company_resgiter_number ="Not Sure") selected="selected" @endif >Not Sure</option>
		                  	<option value="N/A"  @if($template->company_resgiter_number ="N/A") selected="selected" @endif >N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Annual Accounts</label>
		                  <select name="annual_accounts" class="form-control">
		                  	<option value="Yes" @if($template->annual_accounts =="Yes") selected="selected" @endif>Yes</option>
		                  	<option value="No" @if($template->annual_accounts =="No") selected="selected" @endif>No</option>
		                  	<option value="Not Sure" @if($template->annual_accounts =="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option  value="N/A" @if($template->annual_accounts =="N/A") selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Corporation tax return</label>
		                  <select name="tax_return" class="form-control">
		                  	<option value="Yes" @if($template->tax_return =="Yes") selected="selected" @endif>Yes</option>
		                  	<option  value="No" @if($template->tax_return =="No") selected="selected" @endif>No</option>
		                  	<option value="Not Sure" @if($template->tax_return =="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option value="No N/A" @if($template->tax_return =="N/A")selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Self Assessment tax Return</label>
		                  <select name="self_tax_return" class="form-control">
		                  	<option  value="Yes"  @if($template->self_tax_return =="Yes") selected="selected" @endif>Yes</option>
		                  	<option  value="No"  @if($template->self_tax_return =="No") selected="selected" @endif>No</option>
		                  	<option  value="Not Sure"  @if($template->self_tax_return =="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option  value="N/A"  @if($template->self_tax_return =="N/A") selected="selected" @endif> N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Bookkeeping</label>
		                  <select name="bookkeeping" class="form-control">
		                  	<option  value="Yes" @if($template->bookkeeping =="Yes") selected="selected" @endif>Yes</option>
		                  	<option  value="No" @if($template->bookkeeping =="No") selected="selected" @endif>No</option>
		                  	<option  value="Not Sure" @if($template->bookkeeping =="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option   value="N/A" @if($template->bookkeeping =="N/A") selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Confirmation Statement</label>
		                  <select name="confirmation_statement" class="form-control">
		                  	<option value="Yes" @if($template->confirmation_statement =="Yes") selected="selected" @endif>Yes</option>
		                  	<option value="No" @if($template->confirmation_statement =="No") selected="selected" @endif>No</option>
		                  	<option value="Not Sure" @if($template->confirmation_statement =="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option value="N/A" @if($template->confirmation_statement =="N/A") selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>VAT Returns</label>
		                  <select name="vat_returns" class="form-control">
		                  	<option value="Yes" @if($template->vat_returns =="Yes") selected="selected" @endif>Yes</option>
		                  	<option value="No" @if($template->vat_returns =="No") selected="selected" @endif>No</option>
		                  	<option value="Not Sure" @if($template->vat_returns =="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option value="N/A" @if($template->vat_returns =="N/A") selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Payroll</label>
		                  <select name="payroll" class="form-control">
		                  	<option value="Yes" @if($template->payroll =="Yes") selected="selected" @endif>Yes</option>
		                  	<option value="No" @if($template->payroll =="No") selected="selected" @endif>No</option>
		                  	<option value="Not Sure" @if($template->payroll =="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option value="N/A" @if($template->payroll =="N/A") selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Tax Advice</label>
		                  <select name="tax_advice" class="form-control">
		                  	<option value="Yes" @if($template->tax_advice =="Yes") selected="selected" @endif>Yes</option>
		                  	<option value="No" @if($template->tax_advice =="No") selected="selected" @endif>No</option>
		                  	<option value="Not Sure" @if($template->tax_advice =="Not Sure")selected="selected" @endif>Not Sure</option>
		                  	<option value="N/A"  @if($template->tax_advice =="N/A") selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>HMRC registration (VAT, PAYE etc)</label>
		                  <select name="hmre_register" class="form-control">
		                  	<option value="Yes" @if($template->hmre_register =="Yes") selected="selected" @endif>Yes</option>
		                  	<option value="No" @if($template->hmre_register =="No") selected="selected" @endif>No</option>
		                  	<option value="Not Sure" @if($template->hmre_register =="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option value="N/A"  @if($template->hmre_register =="N/A") selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Management Accounts</label>
		                  <select name="management_accounts" class="form-control">
		                  	<option value="Yes" @if($template->management_accounts =="Yes") selected="selected" @endif>Yes</option>
		                  	<option value="No" @if($template->management_accounts =="No") selected="selected" @endif>No</option>
		                  	<option value="Not Sure" @if($template->management_accounts ="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option  value="N/A"  @if($template->management_accounts =="N/A") selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Audit</label>
		                  <select name="audit" class="form-control">
		                  	<option value="Yes" @if($template->audit =="Yes") selected="selected" @endif>Yes</option>
		                  	<option value="No" @if($template->audit =="No") selected="selected" @endif>No</option>
		                  	<option value="Not Sure" @if($template->audit =="Not Sure") selected="selected" @endif>Not Sure</option>
		                  	<option value="N/A"  @if($template->audit =="N/A") selected="selected" @endif>N/A</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Other</label>
		                  <textarea name="other_service" class="form-control" rows="4" cols="8">  @if(!empty($template)){{$template->other_service}} @endif</textarea>
		                  <!-- <select name="other_service" class="form-control">
		                  	<option>Yes</option>
		                  	<option>No</option>
		                  	<option>Not Sure</option>
		                  	<option>N/A</option>
		                  </select> -->
		                </div>
		              </div>
		            </div>
		            <h4 class="field-title">About the Client</h4>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Industry</label>
		                  <input type="text" name="industry" class="form-control" placeholder="Industry"  @if(!empty($template)) value="{{$template->industry}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Experience as a Business Owner</label>
		                  <select name="owner_experience" class="form-control">
		                  	<option value="Yes" @if($template->owner_experience =="Yes") selected="selected" @endif>Yes</option>
		                  	<option value="No" @if($template->owner_experience =="No") selected="selected" @endif>No</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Reason for Change (if applicable)</label>
		                  <input type="text" name="reason_change" class="form-control" placeholder="Reason of Change"  @if(!empty($template)) value="{{$template->reason_change}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Any other Requirements</label>
		                  <input type="text" name="other_requirement" class="form-control" placeholder="Reason of Change"  @if(!empty($template)) value="{{$template->other_requirement}}" @endif>
		                </div>
		              </div>
		            </div>
		            <h4 class="field-title">Client Contact Preference?</h4>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Mode</label>
		                  <select name="mode" class="form-control">
		                  	<option value="Email"  @if($template->mode =="Email") selected="selected" @endif>Email</option>
		                  	<option  value="Call" @if($template->mode =="Call") selected="selected" @endif>Call</option>
		                  	<option value="Text message" @if($template->mode =="Text message") selected="selected" @endif>Text message</option>
		                  	<option value="Whatsapp mesage" @if($template->mode =="Whatsapp mesage") selected="selected" @endif>Whatsapp mesage</option>
		                  </select>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Time</label>
		                  <input type="text" name="time" class="form-control" placeholder="Time"  @if(!empty($template)) value="{{$template->time}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>When Looking to Hire?</label>
		                  <input type="text" name="when_hire" class="form-control" placeholder="When looking to hire?"  @if(!empty($template)) value="{{$template->when_hire}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Any deadlines Approaching?</label>
		                  <input type="text" name="deadlines_approch" class="form-control" placeholder="Any deadlines approaching?"  @if(!empty($template)) value="{{$template->deadlines_approch}}" @endif>
		                </div>
		              </div>
		            </div>
		            <h4 class="field-title">Expert Preferences</h4>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Any Preferred Expert Requirements? </label>
		                  <input type="text" name="expert_requiremnt" class="form-control" placeholder="Any preferred expert requirements? "  @if(!empty($template)) value="{{$template->expert_requiremnt}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>1 </label>
		                  <input type="text" name="expert_1" class="form-control" placeholder="Expert 2 "  @if(!empty($template)) value="{{$template->expert_1}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>2 </label>
		                  <input type="text" name="expert_2" class="form-control" placeholder="Expert 2 "  @if(!empty($template)) value="{{$template->expert_2}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>3 </label>
		                  <input type="text" name="expert_3" class="form-control" placeholder="Expert 3 "  @if(!empty($template)) value="{{$template->expert_3}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Local Expert? </label>
		                  <input type="text" name="local_expert" class="form-control" placeholder="Local expert? "   @if(!empty($template)) value="{{$template->local_expert}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-12">
		                <div class="form-group">
		                  <label>Working style with chosen Expert </label>
		                  <input type="text" name="expert_choice" class="form-control" placeholder="Working style with chosen Expert? Digital, Manual "  @if(!empty($template)) value="{{$template->expert_choice}}" @endif>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="update ml-auto mr-auto">
		                <button type="submit" class="btn btn-primary btn-round">Add Template</button>
		              </div>
		            </div>
		          </form>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</div>
@endsection
@section('script')
@endsection
