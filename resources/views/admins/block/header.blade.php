<header class="header black-bg">
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="trangchu" class="logo"><b>ADMIN</b></a>
  <!--logo end-->
  
  <div class="top-menu">
    <ul class="nav pull-right top-menu">
      <li><a class="logout" href="{{ url('logout') }}">Logout</a></li>
    </ul>
  </div>
</header>
<!--header end-->
<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      
      <h5 class="centered"></h5>
      <li class="mt">
        <a class="active" href="admincustomer">
          <i class="fa fa-dashboard"></i>
          <span>Quản lý khách hàng</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="{{route('adminproduct.index')}}">
          <i class="fa fa-book"></i>
          <span>Quản lý nông sản</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="adminblog">
          <i class="fa fa-book"></i>
          <span>Quản lý blog</span>
        </a>
      </li>
      <li class="sub-menu">
        <a href="admingiathitruong">
          <i class="fa fa-book"></i>
          <span>Quản lý giá thị trường</span>
        </a>
      </li>
      
      <li>
        <a href="{{route('adminbills.index')}}">
          <i class="fa fa-envelope"></i>
          <span>Quản lý bill</span>
          <span class="label label-theme pull-right mail-info">2</span>
        </a>
      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->