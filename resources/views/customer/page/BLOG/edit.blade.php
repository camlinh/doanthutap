<!Doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="{{ asset('sourse/css') }}/re.css"/>
  </head>
  <body>
    <div class="container">
      <form action="{{route('adminproduct.update', $product->id_product)}}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method('PATCH')
        <!---heading---->
      <header class="heading"> BLOG</header><hr></hr>
      <!---Form starting---->
      <div class="row ">
        <!--- For Name---->
        <div class="form-group">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-xs-4">
                    <label class="firstname"> Tên   :</label> </div>
                    <div class="col-xs-8"  >
                      <input class="form-control" placeholder="Tên nông sản" name="name_product" type="text" value={{$product->name_product}}>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-xs-4">
                      <label class="firstname"> Loại   :</label> </div>
                      <div class="col-xs-8"  >
                        <input class="form-control" placeholder="Tên blog" name="id_type_product" type="text" value={{$product->id_type_product}}>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-xs-4">
                        <label class="firstname"> Thời gian thu hoạch   :</label> </div>
                        <div class="col-xs-8"  >
                          <input class="form-control" placeholder="Tên blog" name="time_harvest" type="text" value={{$product->time_harvest}}>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="col-xs-4">
                          <label class="firstname"> Giá một kg   :</label> </div>
                          <div class="col-xs-8"  >
                            <input class="form-control" placeholder="Tên blog" name="Price_kg" type="text" value={{$product->Price_kg}}>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="row">
                          <div class="col-xs-4">
                            <label class="firstname"> Khối lươnhj   :</label> </div>
                            <div class="col-xs-8"  >
                              <input class="form-control" placeholder="Tên blog" name="amout" type="text" value={{$product->amout}}>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-xs-4">
                              <label class="firstname"> Hình ảnh   :</label> </div>
                              <div class="col-xs-8"  >
                                <div class="image-preview" style="padding: 20px 0;">
                                  <img src="{{ asset('sourse/img/event') }}/{{$product->img_product}}" width="150" height="150" id="profile-img-tag"/>
                                </div>
                                <input type="hidden" name="old_img_blog" value={{$product->img_product}}>
                                <input class="form-control" name="new_img_blog" type="file" id="profile-img">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-xs-4">
                                <label class="firstname"> Mô tả   :</label> </div>
                                <div class="col-xs-8"  >
                                  <input class="form-control" placeholder="Mô tả" name="detail_product" type="text" value={{$product->detail_product}}>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12" style="padding: 20px 0;">
                              <div class ="row">
                                <div class="form-block">
                                  <div class="col-sm-8 col-sm-offset-4">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Thêm </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <script>
                      function readURL(input) {
                      if (input.files && input.files[0]) {
                      var reader = new FileReader();
                      
                      reader.onload = function (e) {
                      $('#profile-img-tag').attr('src', e.target.result);
                      }
                      reader.readAsDataURL(input.files[0]);
                      }
                      }
                      $("#profile-img").on('change', function(){
                      console.log('change!')
                      readURL(this);
                      });
                      </script>
                    </body>
                  </html>