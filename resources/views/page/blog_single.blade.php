


<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog Single</title>
<base href="{{asset('')}}" target="_blank, _self, _parent, _top">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="detail/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="detail/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="detail/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="detail/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	

	<!-- Menu -->

	
	<!-- Home -->

	

	<!-- Blog Image -->

	<div class="blog_top_image">
		<div class="blog_top">
			<div class="blog_background parallax-window" data-parallax="scroll" data-image-src="images/blog_background.jpg" data-speed="0.8"></div>
		</div>
	</div>

	<!-- Blog Content -->

	<div class="blog_container">
		<div class="container">
			<div class="row blog_content_row">
				<div class="col">
					<div class="blog_content">
						<div class="blog_post_title_container">
							<div class="blog_category"><a href="#"></a></div>
							<div class="blog_title">{{$blog->name_blog}}</div>
						</div>
						<div class="blog_text">
							<p>{{$blog->detail_blog}}</p>
							<figure class="blog_post_image">
								<img src="sourse/img/event/{{$blog->img_blog}}" alt="">
								<figcaption></figcaption>
							</figure>
							<p></p>
						</div>
						<div class="blog_tags">
							<ul>
								
							</ul>
						</div>
						<div class="blog_post_footer d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
							<div class="blog_post_author d-flex flex-row align-items-center justify-content-start">
								</div>
								<div class="author_info">
									<ul>
										
									</ul>
								</div>
							</div>
							<div class="blog_post_share ml-lg-auto">
								
								<ul>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Similar Posts -->

			<div class="row similar_posts">

				<!-- Blog Post -->
				

			

			
					
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="detail/js/blog_single.js"></script>
</body>
</html>
