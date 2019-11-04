@extends('admin.layouts.master')
@section('content')
  <div class="wrapper">
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
            <a class="navbar-brand" href="#pablo">Profile Management</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
         
            <ul class="navbar-nav">
              
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{Session::get('fa_admin')->name}}
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ url('dashboard/logout') }}">Logout</a>
                </div>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Partner Accounts</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Partner id</th>
                      <th>Name</th>
                      <th>No of quotes</th>
                      <th>Won quotes</th>
                      <th>Pending quotes</th>
                      <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td> 1</td>
                        <td> Zeeshan</td>
                        <td class="text-center"> 4</td>
                        <td class="text-center"> 2</td>
                        <td class="text-center"> 2</td>
                        <td class="text-center">
                          <i class="fa fa-edit text-primary"></i>
                         <a href=""> <i class="fa fa-trash text-danger"></i> </a>
                          <i class="fa fa-eye text-success"></i>
                        </td>
                      </tr>
                      <tr>
                        <td> 2</td>
                        <td> Zeeshan</td>
                        <td class="text-center"> 5</td>
                        <td class="text-center"> 2</td>
                        <td class="text-center"> 3</td>
                        <td class="text-center">
                          <i class="fa fa-edit text-primary"></i>
                         <a href=""> <i class="fa fa-trash text-danger"></i> </a>
                          <i class="fa fa-eye text-success"></i>
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
