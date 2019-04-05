@extends('index')
@section('content')
<section class="features_causes">
    <div class="container">
        <div class="main_title">
            
        </div>
        <div class="row">
            @foreach($new_product as $new)
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <figure>
                            <img class="card-img-top img-fluid " src="sourse/img/features/{{$new->img_product}}" alt="Card image cap">
                        </figure>
                        <div class="card_inner_body">
                            <h4 class="card-title">{{$new->name_product}}</h4>
                            <p class="card-text">
                                {{$new->detail_product}}
                            </p>
                            <div class="d-flex justify-content-between raised_goal">
                                <p>Khối lượng: {{$new->amout}}kg</p>
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
        <div class="row">
            {{$new_product->links()}}
        </div>
    </div>
</section>
@endsection