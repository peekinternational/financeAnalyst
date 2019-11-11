<?php 
  $route = Request::route()->uri();

 ?>
 <footer>
  @if($route != 'partner/partner_dashboard')
  <section class="inverse condensed primary-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
              <h4 class="promoted">The Company</h4>
              <ul>
                <li>
                  <a title="" href="#"></a>
                </li>                                                                      
                <li>
                  <a title="Terms of Service" href="terms-of-service.html"
                  rel="nofollow"
                  >Terms of Service</a>
                </li>                                                                     
                <li>
                  <a title="Privacy Policy" href="privacy-policy.html"
                  rel="nofollow">Privacy Policy</a>
                </li>                             
              </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
              <h4 class="promoted">Partners</h4>
              <ul>
                <li>
                  <a title="" href="#"
                  ></a>
                </li>                                                                     
                <li>
                  <a title="Become a Partner" href="become-a-partner/accountant.html"
                  >Join as an Expert</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6">
              <p>
                <img class="logo-footer" src="" alt="Logo" />
              </p>
              <p>
                Vesterbrogade 1e<br />
                1620 Copenhagen<br />
                <br />
                +44 20 3868 3459<br />
                info@finance.com<br />
              </p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  @endif
  <section class="inverse condensed secondary-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li class="hidden-xs hidden-sm">
              Copyright &copy; Experlu 2012-2019
            </li>
          </ul>
        </div>
        <div class="col-lg-6 text-right">
          <ul>
            <li>
              <a href="https://www.facebook.com/Ageras-UK-2020827648243514/" title="Find us on Facebook" rel="nofollow" target="_blank">
                <i class="mdi mdi-facebook"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/ageras_uk" title="Find us on Twitter" rel="nofollow" target="_blank">
                  <i class="mdi mdi-twitter"></i></a>
                </li>
                <li>
                  <a href="https://instagram.com/agerascom/" title="Find us on Instagram" rel="nofollow" target="_blank">
                    <i class="mdi mdi-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/ageras" title="Find us on LinkedIn" rel="nofollow" target="_blank">
                      <i class="mdi mdi-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/company/ageras" title="Find us on LinkedIn" rel="nofollow" target="_blank">
                        <i class="fa fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </footer>
          