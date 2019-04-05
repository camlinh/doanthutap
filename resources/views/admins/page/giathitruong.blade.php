@extends('admins.admin')
@section('content-admin')
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Quản lý giá thị trường</h3>
    
    <!-- row -->
    <div class="row mt">
      <div class="col-md-12">
        <div class="content-panel">
          <table class="table table-striped table-advance table-hover">
            <h4><i class="fa fa-angle-right"></i></h4>
            <hr>
            <thead>
              <tr>
                <th> Tên</th>
                <th class="hidden-phone">Giá/kg</th>
                <th> Hình ảnh</th>
                <th> Mô tả</th>
                <th>Ngày tạo</th>
                <th><a href="{{ route('admingiathitruong.create') }}"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a></th>
                <th></th>
              </tr>
            </thead>
            @foreach($new_product as $new)
            <tbody>
              <tr>
                <td>
                  <a href="#">{{$new->Name_type_product}}</a>
                </td>
                <td class="hidden-phone">{{$new->price_type}}</td>
                <td> <figure>
                  <img class="card-img-top img-fluid adminimg" src="sourse/img/voluteer/{{$new->img_type}}" alt="Card image cap">
                </figure></td>
                <td>{{$new->detail_price_product}}</td>
                <td>{{$new->created_at}}</td>
                <td><span class="label label-info label-mini">Due</span></td>
                <td>
                  
                  <a href="{{route('admingiathitruong.edit', $new->id_price_product)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                  <form action="{{route('admingiathitruong.destroy', $new->id_price_product)}}" class="submitDelete" method="post" >
                    {!! csrf_field() !!}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                  </form>
                </td>
              </tr>
              
            </tbody>
            @endforeach
          </table>
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-md-12 -->
    </div>
    <!-- /row -->
    <div class="row">
      {{$new_product->links()}}
    </div>
    
  </section>
</section>
@endsection