@extends('layouts.app')
@section('content')

  <section class="hero" >
    <div class="hero-overlay hidden-xs hidden-sm"  style="opacity: 0.10;" ></div>
    <div class="hero-overlay hidden-md hidden-lg"></div>
    <div class="hero-content" style="padding: 0;">
      
      
      <div id="hero">
        <div class="row">
          <div class="col-md-12">
            <div id="carousel-id" class="carousel slide" data-ride="carousel" style=" height: 550px ; overflow: hidden;">
              <ol class="carousel-indicators">
                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item">
                  <img data-src="{{asset('frontend-assets/images/slide1.jpg')}}" alt="First slide" src="{{asset('frontend-assets/images/slide1.jpg')}}" style="width: 100%; height: 100%;">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Find the best accountant or bookkeeper with Finance Analyst</h1>
                      <!-- <p>Find the best accountant or bookkeeper with Finance Analyst</p> -->
                      <p><a href="#" class="cta-button btn btn-green btn-shadowless btn-lg">
                        Get started now
                      </a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img data-src="{{asset('frontend-assets/images/slide2.jpg')}}" alt="Second slide" src="{{asset('frontend-assets/images/slide2.jpg')}}" style="width: 100%; height: 100%;">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Find the best accountant or bookkeeper with Finance Analyst</h1>
                      <!-- <p>Find the best accountant or bookkeeper with Finance Analyst</p> -->
                      <p><a href="#" class="cta-button btn btn-green btn-shadowless btn-lg">
                        Get started now
                      </a></p>
                    </div>
                  </div>
                </div>
                <div class="item active">
                  <img data-src="{{asset('frontend-assets/images/slide3.jpg')}}" src="{{asset('frontend-assets/images/slide3.jpg')}}" style="width: 100%; height: 100%;">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Find the best accountant or bookkeeper with Finance Analyst</h1>
                      <!-- <p>Find the best accountant or bookkeeper with Finance Analyst</p> -->
                      <p><a href="#" class="cta-button btn btn-green btn-shadowless btn-lg">
                          Get started now
                        </a></p>
                    </div>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
              <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
    
  </section>
    <section id="services" class="dark">
      <div class="container">
        
        <div class="row ">
          <div class="col-xs-12 text-center">
            <h3 class="promoted">Receive 3 free quotes from experts for</h3>
          </div>
        </div>
        
        <div class="row">
          
          <div class="col-md-3 col-sm-6">
            <div class="card card-condensed service-card">
              
              <div class="row">
                <div class="col-xs-12 text-center">
                  <i data-icon="mdi-calculator" class="mdi iconify mdi-calculator mdi-48px text-muted"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="link" data-track-term="service_card" class="cta-button cursor-pointer" style="text-decoration: none;">
                    <h4 class="promoted">Audit</h4>
                  </a>
                </div>
              </div>
              
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="card card-condensed service-card">
              
              <div class="row">
                <div class="col-xs-12 text-center">
                  <i data-icon="mdi-book-multiple" class="mdi iconify mdi-book-multiple mdi-48px text-muted"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="link" data-track-term="service_card" class="cta-button cursor-pointer" style="text-decoration: none;">
                    <h4 class="promoted">Bookkeeping</h4>
                  </a>
                </div>
              </div>
              
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="card card-condensed service-card">
              <div class="row">
                <div class="col-xs-12 text-center">
                  <i data-icon="mdi-account-edit" class="mdi iconify mdi-account-edit mdi-48px text-muted"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="link" data-track-term="service_card" class="cta-button cursor-pointer" style="text-decoration: none;">
                    <h4 class="promoted">Accounting</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="card card-condensed service-card">
              
              <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="link" data-track-term="service_card" class="cta-button cursor-pointer" style="text-decoration: none;">
                    <h4 class="promoted">Tax</h4>
                  </a>
                </div>
              </div>
              
              <div class="row">
                <div class="col-xs-12 text-center">
                  <i data-icon="mdi-account-edit" class="mdi iconify mdi-account-edit mdi-48px text-muted"></i>
                </div>
              </div>
              
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="card card-condensed service-card">
              <div class="row">
                <div class="col-xs-12 text-center">
                  <i data-icon="mdi-calculator" class="mdi iconify mdi-calculator mdi-48px text-muted"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="link" data-track-term="service_card" class="cta-button cursor-pointer" style="text-decoration: none;">
                    <h4 class="promoted">Payroll</h4>
                  </a>
                </div>
              </div>
              
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="card card-condensed service-card">
              
              <div class="row">
                <div class="col-xs-12 text-center">
                  <i data-icon="mdi-book-multiple" class="mdi iconify mdi-book-multiple mdi-48px text-muted"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="link" data-track-term="service_card" class="cta-button cursor-pointer" style="text-decoration: none;">
                    <h4 class="promoted">Incorporation</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="card card-condensed service-card">
              
              <div class="row">
                <div class="col-xs-12 text-center">
                  <i data-icon="mdi-account-edit" class="mdi iconify mdi-account-edit mdi-48px text-muted"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="link" data-track-term="service_card" class="cta-button cursor-pointer" style="text-decoration: none;">
                    <h4 class="promoted">Secretarial service</h4>
                  </a>
                </div>
              </div>
              
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="card card-condensed service-card">
              
              <div class="row">
                <div class="col-xs-12 text-center">
                  <i data-icon="mdi-account-edit" class="mdi iconify mdi-account-edit mdi-48px text-muted"></i>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="link" data-track-term="service_card" class="cta-button cursor-pointer" style="text-decoration: none;">
                    <h4 class="promoted">Mix your own service pack</h4>
                  </a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 text-center">
            <h3 class="promoted" class="text-20px" style="margin-top: 40px;">Mix your own service pack</h3>
              <p class="text-20px">
                Looking to build on your brand and not someone else’s? Need customised a combination of services or something not listed here? Our advisory team can help create the perfect tailored service solution for your business. 
              
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="transparency" class="light">
      <div class="container">
        
        <div class="row">
          <div class="col-xs-12 text-center">
            <h3 class="promoted">How it works</h3>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 text-left">
            <i data-icon="mdi-eye" class="mdi iconify mdi-48px text-green"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- <section id="how-it-works" class="inverse">
      <div class="container">
        
        <div class="row">
          <div class="col-xs-12 text-center">
            <h3 class="promoted">Our Latest Blogs</h3>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <div id="owl-carousel" class="owl-carousel owl-theme">
              <div class="item">
                <div class="img_wrp">
                  <div class="img_text">
                    <h5>What is Lorem Ipsum?</h5>
                    <p>
                      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <img src="https://goo.gl/TXsYn9" alt="">
                </div>
              </div>
              <div class="item">
                <div class="img_wrp">
                  <div class="img_text">
                    <h5>What is Lorem Ipsum?</h5>
                    <p>
                     "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                   </p>
                  </div>
                  <img src="https://goo.gl/5ADFEH" alt="">
                </div>
              </div>
              <div class="item">
                <div class="img_wrp">
                  <div class="img_text">
                    <h5>What is Lorem Ipsum?</h5>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                  <img src="https://goo.gl/Y78H36" alt="">
                </div>
              </div>
              <div class="item">
                <div class="img_wrp">
                  <div class="img_text">
                    <h5>What is Lorem Ipsum?</h5>
                    <p>
                     "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                   </p>
                 </div>
                 <img src="https://goo.gl/AcCvCK" alt="">
               </div>
              </div>
              <div class="item">
                <div class="img_wrp">
                  <div class="img_text">
                    <h5>What is Lorem Ipsum?</h5>
                    <p>
                     "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                   </p>
                  </div>
                  <img src="https://goo.gl/FioWab" alt="">
                </div>
              </div>
              <div class="item">
                <div class="img_wrp">
                  <div class="img_text">
                    <h5>What is Lorem Ipsum?</h5>
                    <p>
                     "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <img src="https://goo.gl/hpPnqU" alt="">
                </div>
              </div>
              <div class="item">
                <div class="img_wrp">
                  <div class="img_text">
                    <h5>What is Lorem Ipsum?</h5>
                    <p>
                      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <img src="https://goo.gl/FioWab" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    
    
    <!-- <section id="transparency" class="dark">
      <div class="container">
        
        <div class="row">
          <div class="col-xs-12 text-center">
            <h3 class="promoted">Experts</h3>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4 text-center">
            <i data-icon="mdi-eye" class="mdi iconify mdi-48px text-green"></i>
            <h4>Expert 1</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-4 text-center">
            <i data-icon="mdi-seal" class="mdi iconify mdi-48px text-green"></i>
            <h4>Expert 2</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-4 text-center">
            <i data-icon="mdi-comment-account-outline" class="mdi iconify  mdi-48px text-green"></i>
            <h4>Expert 3</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 text-center">
              <a href="" class="btn cta-button btn-lg">View all Experts</a>
          </div>
        </div>
      </div>
    </section> -->
    <section id="contact" class="inverse hidden-xs">
      <div class="container">
        
        <div class="row">
          <div class="col-xs-12 text-center">
            <h3 class="promoted">You can contact us through</h3>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
            <div class="row">
              <div class="col-md-4 text-center">
                <i data-icon="mdi-email" class="mdi iconify mdi-email mdi-48px"></i>
                <p>
                  E-mail<br />
                  <br />
                 
                </p>
                <p>
                  <a href="contact-us.html" target="_blank" class="btn btn-link btn-lg btn-block btn-shadowless">Go to contact page</a>
                </p>
              </div>
              <div class="col-md-4 text-center">
                <i data-icon="mdi-phone" class="mdi iconify mdi-phone mdi-48px"></i>
                <p>
                  Call<br />
                  <br />
                  
                </p>
                <p>
                  <a href="tel:+442038683459" class="btn btn-link btn-lg btn-block btn-shadowless">+545 54124 45424</a>
                </p>
              </div>
              <div class="col-md-4 text-center">
                <i data-icon="mdi-message-text" class="mdi iconify mdi-message-text mdi-48px"></i>
                <p>
                  Chat<br />
                  <br />
                  
                </p>
                <p>
                  <a onclick="_dixa('api.setView', 'conversation');" class="btn btn-link btn-lg btn-block btn-shadowless">Start chat</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="light">
      <div class="container">
        
        <div class="row">
          <div class="col-xs-12 text-center">
            <h3 class="promoted">Why Experlu?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

        </div>
        
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="icon_holder pull-left" style=" transition-delay: 100ms; -webkit-transition-delay: 100ms; -moz-transition-delay: 100ms; -o-transition-delay: 100ms;"><span data-icon-type="circle" class="icon-circle fa-stack fa-lg  " style="font-size: 24px;border-color: #072f44;background-color: #072f44;"><i class="qode_icon_font_awesome fa fa-check-circle qode_iwt_icon_element" style="color: #ffffff;"></i></span></div>
            <h4>Extraordinarily easy</h4>
          </div>
          <div class="col-md-4 text-center">
            <div class="icon_holder pull-left" style=" transition-delay: 200ms; -webkit-transition-delay: 200ms; -moz-transition-delay: 200ms; -o-transition-delay: 200ms;"><span data-icon-type="circle" class="icon-circle  fa-stack fa-lg  " style="font-size: 24px;border-color: #072f44;background-color: #072f44;"><i class="qode_icon_font_awesome fa fa-flag qode_iwt_icon_element" style="color: #ffffff;"></i></span></div>
            <h4>Truly transparent</h4>
          </div>
          <div class="col-md-4 text-center">
            <div class="icon_holder pull-left" style=" transition-delay: 200ms; -webkit-transition-delay: 200ms; -moz-transition-delay: 200ms; -o-transition-delay: 200ms;"><span data-icon-type="circle" class="icon-circle fa-stack fa-lg  " style="font-size: 24px;border-color: #072f44;background-color: #072f44;"><i class="qode_icon_font_awesome fa fa-clock-o qode_iwt_icon_element" style="color: #ffffff;"></i></span></div>
            <h4>Fantastically free</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- <section id="reviews" class="dark hidden-xs">
      <div class="container">
        
        <div class="row">
          <div class="col-xs-12 text-center">
            <h3 class="promoted" style="margin-bottom: 20px;">Latest reviews</h3>
            <p style="margin-bottom: 50px;">Customers rate their experience with financial service providers all across the United Kingdom</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
           <div class="carousel slide" data-ride="carousel" id="quote-carousel">

            
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#quote-carousel" data-slide-to="1"></li>
              <li data-target="#quote-carousel" data-slide-to="2"></li>
            </ol>

            
            <div class="carousel-inner">

              
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="testimonial_content_inner">
                      <div class="testimonial_image_holder">
                        <img src="https://www.gfcadvice.com/wp-content/uploads/2018/11/merilyn.jpg" draggable="false">
                      </div>
                    </div>
                    <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.&rdquo;</p>
                    <small><strong>Vulputate M., Dolor</strong></small>
                  </div>
                </div>
              </div>

             
              <div class="item">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="testimonial_content_inner">
                      <div class="testimonial_image_holder">
                        <img src="https://www.gfcadvice.com/wp-content/uploads/2014/01/bronti-big-150x150.jpg" draggable="false">
                      </div>
                    </div>
                    <p>&ldquo;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.&rdquo;</p>
                    <small><strong>Fringilla A., Vulputate Sit</strong></small>
                  </div>
                </div>
              </div>

              
              <div class="item">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="testimonial_content_inner">
                      <div class="testimonial_image_holder">
                        <img src="https://www.gfcadvice.com/wp-content/uploads/2018/11/Zulkifli-Bin-Jabal-150x150.jpg" draggable="false">
                      </div>
                    </div>
                    <p>&ldquo;Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.&rdquo;</p>
                    <small><strong>Aenean A., Justo Cras</strong></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        
    </div>>
</section> -->

<!-- Match modal -->


    <div class="modal fade" id="match" tabindex="-1" role="dialog" aria-labelledby="match-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="promoted modal-title" id="match-label">&nbsp;</h4>
      </div>
      @if(count($errors))
        <script>
            $( document ).ready(function() {
                $('#match').modal('show');

            });

        </script>
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

      
      <div class="modal-body">
        
        <div class="step-progress" style="margin-bottom: 40px;">
          <div class="row">

            <div class="col-xs-3 text-center step-progress-1">
              <i class="desktop mdi mdi-pencil-circle mdi-48px hidden-xs"></i>
              <i class="mobile mdi mdi-numeric-1-box mdi-48px visible-xs"></i>
              <div class="hidden-xs">Choose service</div>
            </div>
            <div class="col-xs-3 text-center step-progress-2">
              <i class="desktop mdi mdi-checkbox-blank-circle-outline mdi-48px text-muted hidden-xs"></i>
              <i class="mobile mdi mdi-numeric-2-box mdi-48px text-muted visible-xs"></i>
              <div class="hidden-xs text-muted">Describe your case</div>
            </div>
            <div class="col-xs-3 text-center step-progress-3">
              <i class="desktop mdi mdi-checkbox-blank-circle-outline mdi-48px text-muted hidden-xs"></i>
              <i class="mobile mdi mdi-numeric-3-box mdi-48px text-muted visible-xs"></i>
              <div class="hidden-xs text-muted">Contact information</div>
            </div>
          </div>
        </div>
        
        <form action="{{ url('/customer/jobpost') }}" method="post">
        {{ csrf_field() }}

        <div class="step-1" data-headline="Choose service">
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation">
              <a href="#" data-industry="accounting" id="account">
               <lable  for="Accountant"><i class="mdi mdi-calculator mdi-24px mdi-margin-right"></i> Accountant</lable>
                <input type="radio" name="services" value="Accountant" id="Accountant" style="display:none">
              </a>
            </li>
            <li role="presentation">
              <a href="#" data-industry="accounting" id="book">
                <i class="mdi mdi-book-multiple mdi-24px mdi-margin-right"></i><lable for="Bookkeeper"> Bookkeeper</lable>
                <input type="radio" name="services" value="Bookkeeper" id="Bookkeeper" style="display:none">
              </a>
            </li>
            <li role="presentation">
              <a href="#" data-industry="accounting" id="tax">
                <i class="mdi mdi-account-edit mdi-24px mdi-margin-right"></i><lable for="Tax"> Tax</lable>
                <input type="radio" name="services" value="Tax" id="Tax" style="display:none">
              </a>
            </li>
            <li role="presentation">
              <a href="#" data-industry="accounting" id="audit">
                <i class="mdi mdi-calculator mdi-24px mdi-margin-right"></i><lable for="Audit"> Audit</lable>
                <input type="radio" name="services" value="Audit" id="Audit" style="display:none">
              </a>
            </li>
            <li role="presentation">
              <a href="#" data-industry="accounting" id="payroll">
                <i class="mdi mdi-account-edit mdi-24px mdi-margin-right"></i><lable for="Payroll"> Payroll</lable>
                <input type="radio" name="services" value="Payroll" id="Payroll" style="display:none">
              </a>
            </li>
            <li role="presentation">
              <a href="#" data-industry="accounting" id="incorporation">
                <i class="mdi mdi-book-multiple mdi-24px mdi-margin-right"></i><lable for="Incorporation"> Incorporation</lable>
                <input type="radio" name="services" value="Incorporation" id="Incorporation" style="display:none">
              </a>
            </li>
            <li role="presentation">
              <a href="#" data-industry="accounting" id="secretarial_service">
                <i class="mdi mdi-account-edit mdi-24px mdi-margin-right"></i><lable for="Secretarial_service"> Secretarial service</lable>
                <input type="radio" name="services" value="Secretarial" id="Secretarial_service" style="display:none">
              </a>
            </li>
            <li role="presentation">
              <a href="#" data-industry="accounting" id="service_pack">
                <i class="mdi mdi-calculator mdi-24px mdi-margin-right"></i><lable for="Service_pack"> Mix your own service pack</lable>
                <input type="radio" name="services" value="Mix your own service pack" id="Service_pack" style="display:none">
              </a>
            </li>
          </ul>
        </div>
        
        <div class="step-2" data-headline="Describe your case">
          <div class="form-group">
            <label>Job Title</label>
            <input type="text" class="form-control" name="job_title" placeholder="Job Title" >
          </div>
       <div class="form-group">
            <label>Job Type</label>
            <select class="form-control" name="job_type">
              <option value="">Select Type</option>
              <option value="individual">Indivdual</option>
              <option value="company">Company</option>
            </select>
          </div>
          <div class="form-group">
            <label>Year End</label>
            <input type="date" name="ended_year" class="form-control" >
          </div>
          <div class="form-group">
            <label>Job Description</label>
            <textarea class="form-control" id="input-description" name="job_case" placeholder="Describe your case" style="height: 6em;" ></textarea>
          </div>
          <div class="form-group hidden-md hidden-lg">
            <button class="btn btn-default btn-block proceed-button" data-content="Proceed to the last step" data-no-content="Skip this step">
            <span>Next</span>
            <i class="mdi mdi-chevron-double-right"></i>
            </button>
          </div>
          <div class="form-group hidden-xs hidden-sm">
            <button type="button" class="btn btn-default btn-block proceed-button" data-content="Proceed to the last step" data-no-content="Skip this step">
            <span>Next</span>
            <i class="mdi mdi-chevron-double-right"></i>
            </button>
          </div>
          <p class="text-muted">You do not need to provide a detailed description. Our customer success team will review your case before we match you with relevant advisers.</p>
        </div>
        
        <div class="step-3" data-headline="Contact information">
          <div class="form-group">
            <label class="control-label" for="input-name">Name</label>
            <input  type="text" class="form-control" name="customer_name" id="input-name" placeholder="Enter name" data-error="Please enter your name" />
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <label class="control-label" for="input-email" >E-mail</label>
            <input required type="email" class="form-control" name="job_email" id="input-email" placeholder="Enter e-mail" data-error="Please enter a valid e-mail address" />
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <label class="control-label" for="input-phone">Phone number</label>
            <input type="text" class="form-control" name="mobilenumber" id="input-phone" placeholder="Enter phone number" data-error="Please enter your phone number" />
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <label class="control-label" for="input-city">City</label>
            <input type="text" class="form-control" name="city" id="input-city" placeholder="Please enter your city" />
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <div class="form-group" style="margin-top: 20px;">
              <input required type="checkbox" id="input-email_optin" style="margin-right: 10px;" />
              <label class="control-label" for="input-email_optin">Finance Analyst contact me via email</label>
              <span class="help-block"></span>
            </div>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn cta-button btn-lg btn-block submit-button" style="margin-top: 40px;">Get 3 offers - free and non binding</button>
          </div>
          <p class="text-muted text-center">Read our <a target="_blank" rel="nofollow" href="privacy-policy.html" class="privacypolicy_link">privacy policy</a></p>
        </div>
        </form>
      </div>
    </div>
    
  </div>
</div>
<script>
console.log('sadasdasdddddddddddd');
$('#account').click(function(){
     alert('audit');
          $('#Accountant').prop("checked", true); 
    });

   $('#book').click(function(){
          $('#Bookkeeper').prop("checked", true);
   });

   $('#tax').click(function(){
          $('#Tax').prop("checked", true);
   });

   $('#audit').click(function(){
    
          $('#Audit').prop("checked", true);
   });

   $('#payroll').click(function(){
          $('#Payroll').prop("checked", true);
   });

   $('#incorporation').click(function(){
          $('#Incorporation').prop("checked", true);
   });

   $('#secretarial_service').click(function(){
          $('#Secretarial_service').prop("checked", true);
   });

   $('#service_pack').click(function(){
          $('#Service_pack').prop("checked", true);
   });
         
</script>
@endsection