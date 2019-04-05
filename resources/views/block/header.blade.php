<header class="header_area">
	<div class="main_menu">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="trangchu">Trang chủ</a></li>
							<li class="nav-item"><a class="nav-link" href="nongsan">Nông sản</a></li>
							<li class="nav-item"><a class="nav-link" href="giathitruong">Giá thị trường</a></li>
							<li class="nav-item"><a class="nav-link" href="nhathumua">Nhà thu mua</a></li>
							<li class="nav-item"><a class="nav-link" href="kienthuc">Kiến thức</a></li>

							@if(Auth::guard('customers')->check())
							<li class="nav-item"><a class="nav-link" href="{{route('customernongdan', Auth::guard('customers')->user()->id)}}">{{Auth::guard('customers')->user()->name}}</a></li>
							<li class="nav-item"><a class="nav-link" href="logoutcustomer">Đăng xuất</a></li>
							@else
							<li class="nav-item"><a class="nav-link" href="{{ route('customers.login') }}">Đăng nhập</a></li>
							@endif
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</header>
<section class="home_banner_area">
	<div class="banner_inner">
		<div class="container">
			<div class="banner_content">
				<h3 class="upper_text">Kết nối với người nông dân với thị trường</h3>

				<p>
					Sự khác biệt giữa những người thành công và những người thất bại ko phải là ở sức mạnh, kiến thức hay sự hiểu biết – mà chính là ở ý chí.
				</p>

			</div>
		</div>
	</div>
</section>