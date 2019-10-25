<div class="sidebar" data-color="#072f44" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="" alt="Logo">
          </div>
        </a>
        <a href="{{url('/')}}" class="simple-text logo-normal">
          Finance Analyst
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="{{url('/dashboard')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a class="" data-toggle="collapse" href="#manageTemplate" role="button" aria-expanded="false" aria-controls="manageTemplate">
              <i class="nc-icon nc-diamond"></i>
              <p>Manage Template</p>
            </a>
            <ul class="collapse" id="manageTemplate">
              <li><a href="{{url('dashboard/upload_tamplate')}}">Upload Template</a></li>
            </ul>
          </li>
  
          <li>
            <a class="" data-toggle="collapse" href="#manageQuote" role="button" aria-expanded="false" aria-controls="manageQuote">
              <i class="nc-icon nc-pin-3"></i>
              <p>Manage Quotes</p>
            </a>
            <ul class="collapse" id="manageQuote">
              <li><a href="">Upload Quotes</a></li>
            </ul>
          </li>
          <li>
            <a href="{{url('dashboard/job_management')}}">
              <i class="nc-icon nc-bell-55"></i>
              <p>Jobs Management</p>
            </a>
          </li>
          <li>
            <a href="{{url('dashboard/user_management')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>User Management</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-bell-55"></i>
              <p>Invoice</p>
            </a>
          </li>
          <li>
            <a href="{{url('dashboard/user')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Profile Management</p>
            </a>
          </li>
          <!-- <li>
            <a href="{{url('dashboard/tables')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Blogs</p>
            </a>
          </li>
          <li>
            <a href="{{url('dashboard/typography')}}">
              <i class="nc-icon nc-caps-small"></i>
              <p>Messages</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>