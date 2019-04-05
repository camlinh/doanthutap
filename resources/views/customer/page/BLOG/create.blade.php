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
        <link rel="stylesheet" href="../sourse/css/re.css">
    </head>
    <body>
        <div class="container">
            <form action="{{ route('adminproduct.store')  }}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {{ method_field('POST') }}
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
                                            <input class="form-control" placeholder="Tên nông sản" name="name_product" type="text" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label class="firstname"> Loại  :</label> </div>
                                            <div class="col-xs-8"  >
                                                <input class="form-control" placeholder="Loại nông sản" name="id_type_product" type="text" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label class="firstname"> Thời gian thu hoạch  :</label> </div>
                                                <div class="col-xs-8"  >
                                                    <input class="form-control" placeholder="Thời gian thu hoạch" name="time_harvest" type="text" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <label class="firstname"> Giá một kg  :</label> </div>
                                                    <div class="col-xs-8"  >
                                                        <input class="form-control" placeholder="giá một ký" name="Price_kg" type="text" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <label class="firstname"> Khối lượng  :</label> </div>
                                                        <div class="col-xs-8"  >
                                                            <input class="form-control" placeholder="khối lượng" name="amout" type="text" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <label class="firstname"> Hình ảnh   :</label> </div>
                                                            <div class="col-xs-8"  >
                                                                <input class="form-control" placeholder="Hình ảnh" name="img_product" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-xs-4">
                                                                <label class="firstname"> Mô tả   :</label> </div>
                                                                <div class="col-xs-8"  >
                                                                    <input class="form-control" placeholder="Mô tả" name="detail_product" type="text" >
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
                                        </body>
                                    </html>