@extends('admins.admin')
@section('content-admin')
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Quản lý khách hàng</h3>
    
    <!-- row -->
    <div class="row mt">
      <div class="col-md-12">
        <div class="content-panel">
          <table class="table table-striped table-advance table-hover">
            <h4><i class="fa fa-angle-right"></i> Nhà thu mua</h4>
            <hr>
            <thead>
              <tr>
                <th> Tên</th>
                <th> Địa chỉ</th>
                <th class="hidden-phone">Số điện thoại</th>
                <th> email</th>
                <th> Hình ảnh</th>
                <th> Mô tả</th>
                <th></th>
              </tr>
            </thead>
            @foreach($new_customernongdan as $new)
            <tbody>
              <tr>
                <td>
                  <a href="basic_table.html#">{{$new->name}}</a>
                </td>
                <td class="hidden-phone">{{$new->adress}}</td>
                <td>{{$new->phone}}</td>
                <td>{{$new->email}}</td>
                <td><figure>
                  <img class="card-img-top img-fluid adminimg" src="sourse/img/customer/{{$new->imgcustomer}}" alt="Card image cap">
                </figure></td>
                
                <td>{{$new->detail}}</td>
                <td><span class="label label-info label-mini">Due</span></td>
                <td>
                  
                  <form action="{{route('admincustomer.destroy', $new->id)}}" class="submitDelete" method="post" >
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
      <div class="row">
        {{$new_customernongdan->links()}}
      </div>
      <!-- /col-md-12 -->
    </div>
    <!-- /row -->
    <div class="row mt">
      <div class="col-md-12">
        <div class="content-panel">
          <table class="table table-striped table-advance table-hover">
            <h4><i class="fa fa-angle-right"></i> Nông dân</h4>
            <hr>
            <thead>
              <tr>
                <th> Tên</th>
                <th> Địa chỉ</th>
                <th class="hidden-phone">Số điện thoại</th>
                <th> email</th>
                <th> Hình ảnh</th>
                <th> Mô tả</th>
                <th></th>
              </tr>
            </thead>
            @foreach($new_customernhathumua as $new)
            <tbody>
              <tr>
                <td>
                  <a href="basic_table.html#">{{$new->name}}</a>
                </td>
                <td class="hidden-phone">{{$new->adress}}</td>
                <td>{{$new->phone}}</td>
                <td>{{$new->email}}</td>
                <td><figure>
                  <img class="card-img-top img-fluid adminimg" src="sourse/img/customer/{{$new->imgcustomer}}" alt="Card image cap">
                </figure></td>
                
                <td>{{$new->detail}}</td>
                <td><span class="label label-info label-mini">Due</span></td>
                <td>
                  
                  <form action="{{route('admincustomer.destroy', $new->id)}}" class="submitDelete" method="post" >
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
  </section>
</section>
@endsection