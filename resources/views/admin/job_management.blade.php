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
            <a class="navbar-brand" href="#pablo">Jobs Management</a>
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
                <h4 class="card-title"> Jobs List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Job id</th>
                      <th>Job title</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Categories</th>
                      <th>Location</th>
                      <th class="text-right">Posted date</th>
                      <th class="text-right">Action</th>
                    </thead>
                    <tbody>
                    @foreach($alljobs as $jobs)
                      <tr>
                        <td> {{$jobs->id}}</td>
                        <td> {{$jobs->job_title}}</td>
                        <td> {{$jobs->mobilenumber}}</td>
                        <td> {{$jobs->job_email}}</td>
                        <td>{{$jobs->services}}</td>
                        <td>{{$jobs->city}}</td>
                        <td class="text-right">{{$jobs->created_at}}</td>
                        <td class="text-right">
                       <a href="{{ url('dashboard/template/'.$jobs->id)}}">Add Detail</a>
                          <i class="fa fa-edit text-primary"></i>
                         <a href="{{ url('dashboard/job_delete/'.$jobs->id)}}"> <i class="fa fa-trash text-danger"></i> </a>
                          <i class="fa fa-eye text-success"></i>
                        </td>
                      </tr>
                      @endforeach
                     
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
