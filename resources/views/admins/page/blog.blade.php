@extends('admins.admin')
@section('content-admin')
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Quản lý blog</h3>
    
    <!-- row -->
    <div class="row mt">
      <div class="col-md-12">
        <div class="content-panel">
          <table class="table table-striped table-advance table-hover">
            <h4><i class="fa fa-angle-right"></i></h4>
            <hr>
            <thead>
              <tr>
                <th>Tên blog</th>
                <th class="hidden-phone">Hình ảnh</th>
                <th>Ngày tạo</th>
                <th><i class=" fa fa-edit"></i> Mô tả</th>
                
                <th></th>
                <th><a href="{{ route('adminblog.create') }}"> <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a></th>
              </tr>
            </thead>
            @foreach($new_product as $blog)
            <tbody>
              <tr>
                <td>
                  <a href="#">{{$blog->name_blog}}</a>
                </td>
                <td><figure>
                  <img class="card-img-top img-fluid adminimg" src="sourse/img/event/{{$blog->img_blog}}" alt="Card image cap">
                </figure></td>
                <th>{{$blog->created_at}}</th>
                <td>{{$blog->detail_blog}}</td>
                <td><span class="label label-info label-mini">Due</span></td>
                <td>
                  <a href="{{route('adminblog.edit', $blog->id_blog)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                  
                  
                  <form action="{{route('adminblog.destroy', $blog->id_blog)}}" class="submitDelete" method="post" >
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