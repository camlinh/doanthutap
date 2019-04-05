<header class="header black-bg">
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="trangchu" class="logo"><b>{{Auth::guard('customers')->user()->name}}</b></a>
  <!--logo end-->

  <div class="top-menu">
    <ul class="nav pull-right top-menu">

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

      <li class="sub-menu">
        <a  class="active" href="customernongdan">
          <i class="fa fa-book"></i>
          <span>Quản lý nông sản</span>
        </a>
      </li>

      <li>
        <a href="inbox.html">
          <i class="fa fa-envelope"></i>
          <span>Mail </span>
          <span class="label label-theme pull-right mail-info">2</span>
        </a>
      </li>

      <li class="sub-menu">
        <a  class="active" href="trangchu">
          <i class="fa fa-book"></i>
          <span>Trang chủ</span>
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