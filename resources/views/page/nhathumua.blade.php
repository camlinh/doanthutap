@extends('index')
@section('content')
<section class="section_gap story_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="main_title">
					
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single-story -->
			@foreach($new_purchaser as $purchaser)
			<div class="col-lg-4 col-md-6">
				<div class="single-story">
					<div class="story-thumb">
						<img class="img-fluid" src="sourse/img/customer/{{$purchaser->imgcustomer}}" alt="">
					</div>
					<div class="story-details">
						<div class="story-meta">
							<a href="#">
								<span class="lnr lnr-calendar-full"></span>
								{{$purchaser->phone}}
							</a>
							<a href="#">
								<span class="lnr lnr-book"></span>
								{{$purchaser->adress}}
							</a>
						</div>
						<h5>
						<a href="#">
							{{$purchaser->name}}
						</a>
						</h5>
					</div>
				</div>
			</div>
			@endforeach
			
		</div>
		<div class="row">
			{{$new_purchaser->links()}}
		</div>
	</div>
</section>
@endsection