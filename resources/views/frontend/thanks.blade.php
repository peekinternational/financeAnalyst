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
			<p><img alt="" src="{{asset('/frontend-assets/images/partner/thankyou.jpg')}}" width="100%" /></p>
			<h3>Thank you! We have received your request. Here are the next steps...</h3>

			<p>We will start processing your request and look for 3 specialists that meet your preferences. After a quick phone call, during which we will briefly discuss your assignment, we will send you an email for each match with more information on the specialist interested in handling your case. So please keep an eye on your phone and your inbox - we look forward to helping you!</p>

			<h4>Other Experlu sources</h4>
			;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
			<h4>Do you have any questions or remarks?</h4>

			<p>&nbsp;+41451234542415412415415</p>

			<p>Don&#39;t hesitate to contact us during our opening hours. We are ready to answer your questions to the best of our abilities.</p>

			<table class="table table-hover">
				<tbody>
					<tr>
						<td>Monday</td>
						<td>8 a.m. - 4 p.m.</td>
					</tr>
					<tr>
						<td>Tuesday</td>
						<td>8 a.m. - 4 p.m.</td>
					</tr>
					<tr>
						<td>Wednesday</td>
						<td>8 a.m. - 4 p.m.</td>
					</tr>
					<tr>
						<td>Thursday</td>
						<td>8 a.m. - 4 p.m.</td>
					</tr>
					<tr>
						<td>Friday</td>
						<td>8 a.m. - 3 p.m.</td>
					</tr>
					<tr>
						<td>Saturday</td>
						<td>closed</td>
					</tr>
					<tr>
						<td>Sunday</td>
						<td>closed</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection