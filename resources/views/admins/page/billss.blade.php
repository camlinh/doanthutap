@extends('admins.admin')
@section('content-admin')
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Quản lý bill</h3>
    
    <!-- row -->
    <div class="row mt">
      <div class="col-md-12">
        <div class="content-panel">
          <table class="table table-striped table-advance table-hover">
            <h4><i class="fa fa-angle-right"></i></h4>
            <hr>
            <thead>
              <tr>
                <th>id bill</th>
                <th class="hidden-phone">Hình ảnh</th>
                <th>Người mua</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Người bán</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Tên nông sản</th>
                <th>Phí ship</th>
                <th>phí 1 kg</th>
                <th>Giá nông sản</th>
                <th>Tồng tiền</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                
                
                <th></th>
                
              </tr>
            </thead>
            @foreach($bill as $blog)
            <tbody>
              <tr>
                <td>
                  <a href="#">{{$blog->id}}</a>
                </td>
                <td><figure>
                  <img class="card-img-top img-fluid adminimg" src="sourse/img/features/{{$blog->img_product}}" alt="Card image cap">
                </figure></td>
                
                <td>{{$blog->name_purchase}}</td>
                <td>{{$blog->phone_purchase}}</td>
                <td>{{$blog->emai_purchase}}</td>
                <td>{{$blog->adress_purchase}}</td>
                <td>{{$blog->name}}</td>
                <td>{{$blog->phone}}</td>
                <td>{{$blog->adress}}</td>
                <td>{{$blog->name_product}}</td>
                <td>{{$blog->price_transport}}</td>
                <td>{{$blog->Price_kg}}</td>
                <td>{{$blog->price_product}}</td>
                <td>{{$blog->price}}</td>
                <td>{{$blog->created_at}}</td>
                <td><span class="label label-info label-mini">Due</span></td>
                <td>
                  
                  
                  
                  <form action="{{route('adminbills.destroy', $blog->id)}}" class="submitDelete" method="post" >
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
    
  </section>
</section>
@endsection