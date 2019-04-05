<html lang="en">
	<head>
		<title>Course</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<base href="{{asset('')}}" >
		<meta name="description" content="Lingua project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="styles/course.css">
		<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
	</head>
	<body>
		<div class="super_container">
			<!-- Header -->
			
			<!-- Menu -->
			
			<!-- Home -->
			<!-- Intro -->
			<div class="intro">
				<div class="intro_background parallax-window" data-parallax="scroll"  data-image-src="sourse/img/features/{{$product->img_product}}" data-speed="0.8" style="background: url('sourse/img/features/{{$product->img_product}}'); background-repeat: no-repeat; background-size:  100% auto;"></div>
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="intro_container d-flex flex-column align-items-start justify-content-end">
								<div class="intro_content">
									<div class="intro_price">${{$product -> Price_kg}}</div>
									<div class="rating_r rating_r_4 intro_rating"><i></i><i></i><i></i><i></i><i></i></div>
									<div class="intro_title">{{$product -> name_product}}</div>
									<div class="intro_meta">
										<div class="intro_instructors"><a href="#">
										</a> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Course -->
			<div class="course">
				<div class="course_top"></div>
				<div class="container">
					<div class="row row-lg-eq-height">
						<!-- Panels -->
						<div class="col-lg-9">
							<div class="tab_panels">
								<!-- Tabs -->
								<div class="course_tabs_container">
									<div class="container">
										<div class="row">
											<div class="col-lg-9">
												<div class="tabs d-flex flex-row align-items-center justify-content-start">
													<div class="tab active">Mô tả</div>
													
													<div class="tab"></div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Description -->
								<div class="tab_panel description active">
									<div class="panel_title"></div>
									<div class="panel_text">
										<p>{{$product -> detail_product}}</p>
									</div>
									
									<!-- Instructors -->
									<div class="instructors">
										
									</div>
									<!-- FAQs -->
									<div class="faqs">
										<div class="panel_title"></div>
										<div class="accordions">
											
											<div class="elements_accordions">
												
												
												<div >
													
													
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Reviews -->
								<div class="tab_panel reviews">
									<div class="panel_title">Reviews</div>
									<div class="panel_text">
										<p>Lorem ipsum dolor sit amet, te eros consulatu pro, quem labores petentium no sea, atqui posidonium interpretaris pri eu. At soleat maiorum platonem vix, no mei case fierent. Primis quidam ancillae te mei.</p>
									</div>
									<div class="cur_ratings_container clearfix">
										<div class="cur_rating d-flex flex-column align-items-center justify-content-center">
											<div class="cur_rating_num">4,5</div>
											<div class="rating_r rating_r_4 cur_stars"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="cur_rating_text">Rated 5 out of 3 Ratings</div>
										</div>
										<div class="cur_rating_progress d-flex flex-column align-items-center justify-content-center">
											<div class="cur_progress d-flex flex-row align-items-center justify-content-between">
												<span>5 stars</span>
												<div id="cur_pbar_1" class="cur_pbar" data-perc="0.80"></div>
											</div>
											<div class="cur_progress d-flex flex-row align-items-center justify-content-between">
												<span>5 stars</span>
												<div id="cur_pbar_2" class="cur_pbar" data-perc="0.20"></div>
											</div>
											<div class="cur_progress d-flex flex-row align-items-center justify-content-between">
												<span>5 stars</span>
												<div id="cur_pbar_3" class="cur_pbar" data-perc="0.0"></div>
											</div>
											<div class="cur_progress d-flex flex-row align-items-center justify-content-between">
												<span>5 stars</span>
												<div id="cur_pbar_4" class="cur_pbar" data-perc="0.0"></div>
											</div>
											<div class="cur_progress d-flex flex-row align-items-center justify-content-between">
												<span>5 stars</span>
												<div id="cur_pbar_5" class="cur_pbar" data-perc="0.0"></div>
											</div>
										</div>
									</div>
									<div class="cur_reviews">
										<!-- Review -->
										<div class="review">
											<div class="review_title_container d-flex flex-row align-items-start justify-content-start">
												<div class="review_title d-flex flex-row align-items-center justify-content-center">
													<div class="review_author_image"><div><img src="images/review_1.jpg" alt=""></div></div>
													<div class="review_author">
														<div class="review_author_name"><a href="#">Sarah Parker</a></div>
														<div class="review_date">Sep 29, 2017 at 9:48 am</div>
													</div>
												</div>
												<div class="review_stars ml-auto"><div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div></div>
											</div>
											<div class="review_text">
												<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
											</div>
										</div>
										<!-- Review -->
										<div class="review">
											<div class="review_title_container d-flex flex-row align-items-start justify-content-start">
												<div class="review_title d-flex flex-row align-items-center justify-content-center">
													<div class="review_author_image"><div><i class="fa fa-user" aria-hidden="true"></i></div></div>
													<div class="review_author">
														<div class="review_author_name"><a href="#">Sarah Parker</a></div>
														<div class="review_date">Sep 29, 2017 at 9:48 am</div>
													</div>
												</div>
												<div class="review_stars ml-auto"><div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div></div>
											</div>
											<div class="review_text">
												<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
											</div>
										</div>
										<!-- Review -->
										<div class="review">
											<div class="review_title_container d-flex flex-row align-items-start justify-content-start">
												<div class="review_title d-flex flex-row align-items-center justify-content-center">
													<div class="review_author_image"><div><img src="images/review_1.jpg" alt=""></div></div>
													<div class="review_author">
														<div class="review_author_name"><a href="#">Sarah Parker</a></div>
														<div class="review_date">Sep 29, 2017 at 9:48 am</div>
													</div>
												</div>
												<div class="review_stars ml-auto"><div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div></div>
											</div>
											<div class="review_text">
												<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Members -->
								<div class="tab_panel members">
									<div class="panel_title">Members</div>
									<div class="panel_text">
										<p>Lorem ipsum dolor sit amet, te eros consulatu pro, quem labores petentium no sea, atqui posidonium interpretaris pri eu. At soleat maiorum platonem vix, no mei case fierent. Primis quidam ancillae te mei.</p>
									</div>
									<div class="members_list d-flex flex-row flex-wrap align-items-start justify-content-start">
										<!-- Member -->
										
										<!-- Member -->
										<div class="member">
											<div class="member_image"><img src="sourse/img/features/{{$product->img_product}}" alt=""></div>
											<div class="member_title"><a href="#">Sarah Parker</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Sidebar -->
						<div class="col-lg-3">
							<div class="sidebar">
								<div class="sidebar_background"></div>
								<div class="sidebar_top">
									<a href="{{route('adminbills.show', $product->id_product)}}">Mua</a>
								</div>
								<div class="sidebar_content">
									<!-- Features -->
									<div class="sidebar_section features">
										<div class="sidebar_title"></div>
										<div class="features_content">
											<ul class="features_list">
												<!-- Feature -->
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Loại</span></div>
													<div class="feature_text ml-auto">{{$product -> id_type_product}}</div>
												</li>
												<!-- Feature -->
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div class="feature_title"><i class="fa fa-bell" aria-hidden="true"></i><span>Khối lượng</span></div>
													<div class="feature_text ml-auto">{{$product -> amout}}</div>
												</li>
												<!-- Feature -->
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div class="feature_title"><i class="fa fa-id-badge" aria-hidden="true"></i><span>Chủ nông sản</span></div>
													<div class="feature_text ml-auto">{{$product -> name}}</div>
												</li>
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div class="feature_title"><i class="fa fa-id-badge" aria-hidden="true"></i><span>Liên hệ</span></div>
													<div class="feature_text ml-auto">{{$product -> phone}}</div>
												</li>
												<!-- Feature -->
												<li class="d-flex flex-row align-items-start justify-content-start">
													<div class="feature_title"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>Giá</span></div>
													<div class="feature_text ml-auto">{{$product -> Price_kg}}</div>
												</li>
												<!-- Feature -->
												
											</ul>
										</div>
									</div>
									<!-- Cert -->
									<div class="sidebar_section cert">
										
									</div>
									<!-- You may like -->
									<div class="sidebar_section like">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->
			
		</div>
		<script src="detail/js/jquery-3.2.1.min.js"></script>
		<script src="styles/bootstrap4/popper.js"></script>
		<script src="styles/bootstrap4/bootstrap.min.js"></script>
		<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js"></script>
		<script src="plugins/progressbar/progressbar.min.js"></script>
		<script src="detail/js/course.js"></script>
	</body>
</html>