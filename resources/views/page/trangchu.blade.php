@extends('index')
@section('content')
<!--================ Start Causes Area =================-->
<section class="causes_area">
	<div class="container">
		<div class="main_title">
			<h2>Chúng tôi</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single_causes">
					<a href="giathitruong">
					<h4>Giá thành</h4>
					<img src="sourse/img/causes/c1.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single_causes">
					<a href="nhathumua">
					<h4>Nhà thu mua</h4>
					<img src="sourse/img/causes/c3.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single_causes">
					<a href="kienthuc">
					<h4>Kiến thức trồng trọt</h4>
					<img src="sourse/img/causes/c2.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Causes Area =================-->
<section class="features_causes">
	<div class="container">
		<div class="main_title">
			<h2>Nông sản</h2>
			<p>Lao động xua đuổi ba sự xấu xa kinh khủng, nỗi buồn chán, thói trụy lạc và sự nghèo đói. </p>
		</div>
		<div class="row">
			@foreach($new_product as $new)
			<div class="col-lg-4 col-md-6">
				<div class="card">
					<div class="card-body">
						<figure>
							<img class="card-img-top img-fluid" src="sourse/img/features/{{$new->img_product}}" alt="Card image cap">
						</figure>
						<div class="card_inner_body">
							<h4 class="card-title">{{$new->name_product}}</h4>
							<p class="card-text">
								{{$new->detail_product}}
							</p>
							<div class="d-flex justify-content-between raised_goal">
								<p>Khối lượng: {{$new->amount}}kg</p>
								<p><span>Loại: {{$new->id_type_product}}</span></p>
							</div>
							<div class="d-flex justify-content-between donation align-items-center">
								<a href="{{route('adminproduct.show', $new->id_product)}}" class="primary_btn">Chi tiết</a>
								<p>Giá/kg :{{$new->Price_kg}} </p>
							</div>
						</div>
					</div>
				</div>
			</div>

			@endforeach
		</div>
	</div>
</section>
<div class="load">
	<a href="nongsan" class="primary_btn">Thêm</a>
</div>
<!--================ Start Recent Event Area =================-->
<section class="event_area section_gap_custom">
	<div class="container">
		<div class="main_title">
			<h2>Kiến thức trồng trọt</h2>
			<p>Bạn càng đọc nhiều, bạn càng biết nhiều. Bạn càng học nhiều, bạn càng đi nhiều.</p>
		</div>

		<div class="row">

			@foreach($new_blog as $blog)
			<div class="col-lg-6">
				<div class="single_event">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6">
							<figure>
								<img class="img-fluid w-100" src="sourse/img/event/{{$blog->img_blog}}" alt="">
								<div class="img-overlay"></div>
							</figure>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="content_wrapper">
								<h3 class="title">
								<a href="">{{$blog->name_blog}}</a>
								</h3>
								<p>

								</p>
								<div class="d-flex count_time" id="clockdiv4">
									<div class="mr-25">
										<h4 class="days">{{$blog->created_at}}</h4>

									</div>
								</div>
								<div>
									<a href="{{route('adminblog.show', $blog->id_blog)}}" class="primary_btn">Chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<div class="load">
	<a href="kienthuc" class="primary_btn">Thêm</a>
</div>
<!--================ End Recent Event Area =================-->
<!--================Team Area =================-->
<section class="team_area section_gap">
	<div class="container">
		<div class="main_title">
			<h2>Giá cả thị trường</h2>
		</div>
		<div class="row team_inner">
			@foreach($new_price_product as $price)
			<div class="col-lg-3 col-md-6">
				<div class="team_item">
					<div class="team_img">
						<img class="img-fluid" src="sourse/img/voluteer/{{$price->img_type}}" alt="">
					</div>
					<div class="team_name">
						<h4>{{$price->Name_type_product}}</h4>
						<p>{{$price->price_type}} /kg</p>
						<p class="mt-20">
							{{$price->created_at}}
						</p>

					</div>
				</div>
			</div>

			@endforeach

		</div>
	</div>
</section>
<div class="load">
	<a href="giathitruong" class="primary_btn">Thêm</a>
</div>
<!--================End Team Area =================-->
<section class="section_gap story_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="main_title">
					<h2>Nhà thu mua</h2>
					<p>

					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single-story -->

			<!-- single-story -->

			<!-- single-story -->
			@foreach($new_purchaser as $new)
			<div class="col-lg-4 col-md-6">
				<div class="single-story">
					<div class="story-thumb">
						<img class="img-fluid" src="sourse/img/customer/{{$new->imgcustomer}}" alt="">
					</div>
					<div class="story-details">
						<div class="story-meta">
							<a href="">
								<span class="lnr lnr-calendar-full"></span>
								{{$new->phone}}
							</a>
							<a href="">
								<span class="lnr lnr-book"></span>
								{{$new->adress}}
							</a>
						</div>
						<h5>
						<a >
							{{$new->name}}
						</a>
						</h5>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<div class="load">
	<a href="nhathumua" class="primary_btn">Thêm</a>
</div>
@endsection