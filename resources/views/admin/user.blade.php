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
                    <th>Partner_id</th>
                    <th>Name</th>
                    <th>Date_of_joining</th>
                    <th>Status</th>
                    <th>City</th>
                    <!-- <th>Country</th> -->
                    <th>Total_quotes</th>
                    <th>Won_quotes</th>
                    <th>In_Progress</th>
                    <th>Lost</th>
                    <th>Total_quotes_price</th>
                    <th>Won_quotes_price</th>
                    <th>In_progress_price</th>
                    <th>Lost_quote_price</th>
                    <th class="text-center">Action</th>
                  </thead>
                  <tbody>
                    @foreach($partner_data as $partner)
                    <tr>
                      <td> {{$partner->p_id}}</td>
                      <td> {{$partner->name}}</td>
                      <td> {{$partner->created_at}}</td>
                      <td> {{$partner->status}}</td>
                      <td> {{$partner->city}}</td>
                      <td class="text-center"><a data-toggle="modal" href='#modal-id{{$partner->p_id}}'> View (4)</a> 
                        <div class="modal fade" id="modal-id{{$partner->p_id}}">
                          <div class="modal-dialog modal-lg quote-modal">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">{{$quote->job_title}} quotes</h4>
                              </div>
                              <div class="modal-body">
                                <div class="table-responsive">
                                  <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>Quote by</th>
                                        <th>Quote_date</th>
                                        <th>Quote_Services</th>
                                        <th>Quote_price</th>
                                        <th>Status</th>
                                        <th>View</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="{{url('partner/template_detail/'.$quots->job_id)}}">View Quote</a></td>
                                      </tr>
                                     
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="text-center"> 2</td>
                      <td class="text-center"> 2</td>
                      <td class="text-center"> 2</td>
                      <td class="text-center"> 4</td>
                      <td class="text-center"> 2</td>
                      <td class="text-center"> 2</td>
                      <td class="text-center"> 2</td>
                      <td class="text-center">
                        <i class="fa fa-edit text-primary"></i>
                        <a href=""> <i class="fa fa-trash text-danger"></i> </a>
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