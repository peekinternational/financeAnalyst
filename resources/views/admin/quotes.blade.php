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
                <div class="table-responsive" id="table1">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Job id</th>
                      <th>Posted By</th>
                      <th>Quoted By</th>
                      <th>Quotation Date</th>
                      <th>Status</th>
                      <th class="text-center">Action</th>
                    </thead>

                    <tbody>
                    @foreach($allquote as $quote)
                      <tr @if($quote->visited == "not_visited") style="background-color:#efc36e @endif">
                        <td> {{$quote->job_id}}</td>
                        <td> {{$quote->customer_name}}</td>
                        <td> {{$quote->partner->name}}</td>
                        <td> {{$quote->created_at}}</td>
                        <td> {{$quote->status}}</td>
                        <td class="text-center">
                          <i class="fa fa-edit text-primary"></i>

                          <a href="javascript:void(0);" onclick="visitFunction({{$quote->job_id}})" ><i class="fa fa-eye text-success"></i></a>
                        </td>
                      </tr>
                      @endforeach
                     
                     
                    </tbody>
                  </table>
                  {!! $allquote->render();!!}
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
  <script>
    function visitFunction(id) {
        event.preventDefault();
        var visit_id=id;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            $.ajax({
                type: 'post',
                url: "{{ url('quotes/visit')}}",
                data: { visit_id : visit_id},
                success: function(response){
                    console.log(response);
//                     $('#table1').append(response);
                    location.reload();

                },
                error: function (error) {
                    console.log(error)
                    alert("data not saved");

                }
            });


    }
  </script>
@endsection
