@extends('frontend.admin.layouts.master')
@section('content')
  <div class="wrapper ">
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Upgrade</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Paper Dashboard PRO</h3>
                  <p class="card-category">Are you looking for more components? Please check our Premium Version of Paper Dashboard PRO.</p>
              </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                    <thead>
                      <th></th>
                      <th class="text-center">Free</th>
                      <th class="text-center">PRO</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Components</td>
                        <td class="text-center">16</td>
                        <td class="text-center">160</td>
                      </tr>
                      <tr>
                        <td>Plugins</td>
                        <td class="text-center">4</td>
                        <td class="text-center">13</td>
                      </tr>
                      <tr>
                        <td>Example Pages</td>
                        <td class="text-center">7</td>
                        <td class="text-center">27</td>
                      </tr>
                      <tr>
                        <td>Login, Register, Pricing, Lock Pages</td>
                        <td class="text-center"><i class="nc-icon nc-simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="nc-icon nc-check-2 text-success"></i></td>
                      </tr>
                      <tr>
                        <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                        <td class="text-center"><i class="nc-icon nc-simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="nc-icon nc-check-2 text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Mini Sidebar</td>
                        <td class="text-center"><i class="nc-icon nc-simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="nc-icon nc-check-2 text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Premium Support</td>
                        <td class="text-center"><i class="nc-icon nc-simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="nc-icon nc-check-2 text-success"></i></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-center">Free</td>
                        <td class="text-center">Just $39</td>
                      </tr>
                      <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                          <a href="#" class="btn btn-round btn-default disabled">Current Version</a>
                        </td>
                        <td class="text-center">
                          <a target="_blank" href="https://www.creative-tim.com/product/paper-dashboard-2-pro?ref=pd-free-upgrade-live" class="btn btn-round btn-primary">Upgrade to PRO</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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