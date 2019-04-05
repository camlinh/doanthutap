@extends('index')
@section('content')
<section class="event_area section_gap_custom">
	<div class="container">
		<div class="main_title">
			
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
								<a href="event-details.html">{{$blog->name_blog}}</a>
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
		<div class="row">
			{{$new_blog->links()}}
		</div>
	</div>
</section>
@endsection