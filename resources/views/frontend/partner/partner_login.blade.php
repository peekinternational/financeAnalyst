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
   $next = Request::input('next') != '' ? '?next='.Request::input('next') : '';
   ?>
<div class="container" style="margin-top: 9rem;">
	<div class="row">
		<div class="col-md-offset-3 col-md-6 register_col">
				<div class="panel panel-default" style="display:{{ $pageType != 'partner_register' ? 'block' : 'none' }}">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Partner Login </h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="{{ url('partner_login'.$next) }}" method="post" role="form">
						 {{ csrf_field() }}
			    			<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
								</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				
			    			</div>
			    			
			    			<input type="submit" value="Login" class="btn btn-success btn-block" style="margin-bottom: 20px;">
			    			<a href="{{url(partner_register)}}" class="btn cta-button btn-block">Register</a>
			    		</form>
			    	</div>
	    		</div>

				<div class="panel panel-default" style="display:{{ $pageType == 'partner_register' ? 'block' : 'none' }}">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Partner sign up  </h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="{{ url('partner_register') }}" method="post" role="form">
						 {{ csrf_field() }}
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			                <input type="text" name="name" id="name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="number" name="phoneno" id="phoneno" class="form-control input-sm" min="0" placeholder="Mobile Number">
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-success btn-block" style="margin-bottom: 20px;">
			    			<a href="{{url(partner_login)}}" class="btn cta-button btn-block">Login</a>
			    		</form>
			    	</div>
	    		</div>
			</div>
		</div>
	</div>
@endsection