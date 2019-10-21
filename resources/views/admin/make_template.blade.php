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
            <a class="navbar-brand" href="#pablo">Templates</a>
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
                <h4 class="card-title"> Templates List</h4>
              </div>
              <div class="card-body row" >
              @foreach($template as $temp)
             
              
                <div class="col-md-6" style="height:400px;overflow-y: auto;max-width: 48%;
    border: 2px solid;
    margin: 9px;
    padding: 7px;">
                 <h5> Job Title: {{$temp->job_title}}</h5>
                {!! $temp->template !!}
                </div>
                @endforeach
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
