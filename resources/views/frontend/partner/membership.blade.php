@extends('layouts.app')

@section('content')


<div class="pricing_area">
	<div class="container">
		<div class="row">
         
				<!-- area section title-->
				<div class="col-md-12">

					<div class="section-title  t_center">
						<!-- title -->
						<h2>Choose <span>Your Plan</span></h2>
						<!-- TEXT -->
					</div>	
				</div>	
			</div>
			<div id="individual_pkg" class="row">
				<!-- single pricing-->

         <div class="col-md-offset-2 col-md-4 col-sm-6 col-xs-12">
            <div class="single_pricing">
               <div class="pricing_content">
                  <div class="pricing_head">
                     <div class="pricing_img">
                        <img src="{{asset('frontend-assets/images/price.svg')}}" alt="Package">
                     </div>
                     <div class="pricing_title">
                        <h3>BASIC</h3>
                     </div>
                  </div>
                  <div class="pricing_body">
                     <div class="featur">
                        <ul>
                          <li><i class="fa fa-check"></i>30 Days Free Trail</li>
                          <li><i class="fa fa-check"></i>24/7 instant Support</li>
                        </ul>
                     </div>
                     <div class="price_item">
                        <div class="price_item_inner">
                           <div class="price_item_inner_center">
                              <span class="starting">BASIC USER MEMBERSHIP</span>  
                              
                              <span class="curencyp">£ </span>
                               
                              <span class="tk">0</span>  
                               
                              <span class="slash">/only</span>  
                              
                           </div>
                        </div>
                     </div>
                      
                     <div class="pricing_bottom">
                        <div class="order_now">          
                           <a href="{{ url('partner/checkoutfree')}}" class="singinp">Order Now</a>    
                        </div>
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single_pricing">
               <div class="pricing_content">
                  <div class="pricing_head">
                     <div class="pricing_img">
                        <img src="{{asset('frontend-assets/images/price1.svg')}}" alt="Package">
                     </div>
                     <div class="pricing_title">
                        <h3>Monthly</h3>
                     </div>
                  </div>
                  <div class="pricing_body">
                     <div class="featur">
                        <ul>
                          <li><i class="fa fa-check"></i>100% guaranteed job</li>
                          <li><i class="fa fa-check"></i>One Listing</li>
                          <li><i class="fa fa-check"></i>30 Days Availability</li>
                          <li><i class="fa fa-check"></i>Featured In Search Results</li>
                          <li><i class="fa fa-check"></i>24/7 instant Support</li>
                        </ul>
                     </div>
                     <div class="price_item">
                        <div class="price_item_inner">
                           <div class="price_item_inner_center">
                              <span class="starting">PREMIUM USER MEMBERSHIP</span>  
                              
                              <span class="curencyp">£ </span>
                               
                              <span class="tk">500</span>  
                               
                              <span class="slash">/only</span>  
                              
                           </div>
                        </div>
                     </div>
                      
                     <div class="pricing_bottom">
                        <div class="order_now">          
                           <a href="{{ url('partner/checkoutmonthly')}}" class="singinp">Order Now</a>    
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
@endsection