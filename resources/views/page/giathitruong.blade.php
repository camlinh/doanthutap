@extends('index')
@section('content')
<section class="team_area section_gap">
	<div class="container">
		<div class="main_title">
			
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
		<div class="row">
			{{$new_price_product->links()}}
		</div>
	</div>
</section>
@endsection