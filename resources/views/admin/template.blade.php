@extends('admin.layouts.master')
@section('style')
<script src="{{asset('/frontend-assets/js/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/frontend-assets/js/ckeditor/js/sample.js')}}"></script>
<script src="{{asset('/frontend-assets/js/ckeditor/js/sf.js')}}"></script>

<link href="{{asset('/frontend-assets/js/ckeditor/css/samples.css')}}" rel="stylesheet" />

@endsection
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
            <a class="navbar-brand" href="#pablo">Users</a>
          </div>
          
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          
          <div class="col-md-12">
            <div class="card card-user">
            <div class="row">
              <div class="col-md-3">
                <h5 class="title">Job Title:</h5>{{$job->job_title}}
              </div>
              <div class="col-md-3">
                <h5 class="title">Job Title:</h5>{{$job->job_title}}
              </div>
              <div class="col-md-3">
                <h5 class="title">Job Title:</h5>{{$job->job_title}}
              </div>
              <div class="col-md-3">
                <h5 class="title">Job Title:</h5>{{$job->job_title}}
              </div>
              </div>
              <div class="card-body">
                <form action="{{ url('dashboard/template/'.$job->id)}}" method="post">
                 {{ csrf_field() }}
                  <div class="row">
                  <div class="col-md-12">
                  <textarea rows="100" cols="70" class="ckeditor" id="editor" name="template"> {{$job->job_case}}</textarea>
                  
                    </div>
                    </div>

                 <button type="submit" class="btn btn-success">Submit</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')


<script>
	initSample();
</script>

@endsection
