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
    
    
    
    
    <section class="light" style="margin-top: 0rem;">
      <div style="background-image: url('/frontend-assets/images/partner/banner.jpg');background-size: 100% 100%;
    height: 500px;" class="main-banner">
      
    </div>
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
              
             <!--  <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="button" data-track-term="service_card" class="btn cta-button" style="margin: 20px 0 15px 0;">
                    Get 3 quotes
                  </a>
                </div>
              </div> -->
              
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
              
              <!-- <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="button" data-track-term="service_card" class="btn cta-button" style="margin: 20px 0 15px 0;">
                    Get 3 quotes
                  </a>
                </div>
              </div> -->
              
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
              
              <!-- <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="button" data-track-term="service_card" class="btn cta-button" style="margin: 20px 0 15px 0;">
                    Get 3 quotes
                  </a>
                </div>
              </div> -->
              
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
              
              <!-- <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="button" data-track-term="service_card" class="btn cta-button" style="margin: 20px 0 15px 0;">
                    Get 3 quotes
                  </a>
                </div>
              </div> -->
              
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
              
              
              <!-- <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="button" data-track-term="service_card" class="btn cta-button" style="margin: 20px 0 15px 0;">
                    Get 3 quotes
                  </a>
                </div>
              </div> -->
              
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
              
              <!-- <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="button" data-track-term="service_card" class="btn cta-button" style="margin: 20px 0 15px 0;">
                    Get 3 quotes
                  </a>
                </div>
              </div> -->
              
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
              
              <!-- <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="button" data-track-term="service_card" class="btn cta-button" style="margin: 20px 0 15px 0;">
                    Get 3 quotes
                  </a>
                </div>
              </div> -->
              
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
              
              <!-- <div class="row">
                <div class="col-xs-12 text-center">
                  <a data-industry="accounting" data-track-content="button" data-track-term="service_card" class="btn cta-button" style="margin: 20px 0 15px 0;">
                    Get 3 quotes
                  </a>
                </div>
              </div> -->
              
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
    
    <section id="reviews" class="dark hidden-xs">
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

            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#quote-carousel" data-slide-to="1"></li>
              <li data-target="#quote-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">

              <!-- Quote 1 -->
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

              <!-- Quote 2 -->
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

              <!-- Quote 3 -->
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
        
    </div>
  </div>
</section>

<!-- Match modal -->
<div class="modal fade" id="match" tabindex="-1" role="dialog" aria-labelledby="match-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <input type="hidden" name="industry[general]" value="d41d8cd98f00b204e9800998ecf8427e" />
      <input type="hidden" name="industry[accounting]" value="6da6e841ab0eee1694a20ea0381f6938" />
      <input type="hidden" name="industry[law]" value="8e4d7ffa6427c001d0f54b99fc6254a3" />
      <input type="hidden" name="industry[lawyer]" value="8e4d7ffa6427c001d0f54b99fc6254a3" />
      <input type="hidden" name="industry[accountant]" value="6da6e841ab0eee1694a20ea0381f6938" />
      <input type="hidden" name="redirect" value="/thank-you" />
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="promoted modal-title" id="match-label">&nbsp;</h4>
      </div>
      
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
      </div>
    </div>
    
  </div>
</div>
@endsection