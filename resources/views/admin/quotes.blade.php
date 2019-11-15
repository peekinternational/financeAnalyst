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
            <a class="navbar-brand" href="#pablo">Manage Quotes</a>
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
                <h4 class="card-title"> Quotes</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Job_id</th>
                      <th>Job_title</th>
                      <th>Posted_by</th>
                      <th>View quotes</th>
                      <th>Case_status</th>
                      <th>Outcome</th>
                      <th>Comments</th>
                      <th>Date_time</th>
                      <th>Employee_id</th>
                      <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                    @foreach($allquote as $quote)
                      <tr>
                        <td> {{$quote->job_id}}</td>
                        <td> {{$quote->job_title}}</td>
                        <td> {{$quote->customer_name}}</td>
                        
                        <td> <a class="btn btn-primary" data-toggle="modal" href='#modal-id{{$quote->job_id}}'>View Quotes</a>
                          <div class="modal fade" id="modal-id{{$quote->job_id}}">
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
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>{{$quote->partner->name}}</td>
                                        <td>{{$quote->created_at}}</td>
                                        <td>Services</td>
                                        <td>Price</td>
                                        <td>{{$quote->status}}</td>
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
                        </div></td>
                        <td> 
                          <select class="form-control">
                            <option>Awaiting customer info</option>
                            <option>Awaiting proposal </option>
                            <option>Awaiting customer reply </option>
                            <option>Invalid case </option>
                            <option>Other </option>
                          </select>
                        </td>
                        <td> 
                          <select class="form-control">
                            <option>Match found</option>
                            <option>Work in progress</option>
                            <option>Case closed because customer irresponsive</option>
                            <option>Case closed because not enough proposals</option>
                            <option>Invalid case</option>
                            <option>Other</option>
                          </select>
                        </td>
                        <td> <input type="text" name="comments" class="form-control"></td>
                        <td> Date time</td>
                        <td> iddd</td>
                        <td class="text-center">
                        <a href="">Add Detail</a>
                          <i class="fa fa-edit text-primary"></i>
                          <i class="fa fa-eye text-success"></i>
                        </td>
                      </tr>
                      @endforeach
                     
                     
                    </tbody>
                  </table>
                  {!! $allquote->render(); !!}
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
