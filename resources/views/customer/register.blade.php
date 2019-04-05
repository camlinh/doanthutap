<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="../sourse/css/re.css">
<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			<form action="{{ url('/registercustomer') }}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<!---heading---->
				@if(count($errors)>0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					<p class="label label-danger" style="display: block;font-size: 13px;">{{$err}}</p>
					@endforeach
				</div>
				@endif
				@if(Session::has('Thanhcong'))
				<div class="alert alert-success">{{Session::get('Thanhcong')}}</div>
				@endif
			<header class="heading"> Xin chào</header><hr></hr>
			<!---Form starting---->
			<div class="row ">
				<!--- For Name---->
				<div class="form-group">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-xs-4">
								<label class="firstname"> Tên   :</label> </div>
								<div class="col-xs-8"	>
									<input class="form-control" placeholder="Họ và tên" name="name" type="text" value="{{ old('name') }}" autofocus>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-xs-4">
									<label class="firstname"> Địa chỉ   :</label> </div>
									<div class="col-xs-8"	>
										<input class="form-control" placeholder="Địa chỉ" name="adress" type="text" value="{{ old('adress') }}" autofocus>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="row">
									<div class="col-xs-4">
										<label class="firstname"> Số điện thoại   :</label> </div>
										<div class="col-xs-8"	>
											<input class="form-control" placeholder="Số điện thoại" name="phone" type="text" value="{{ old('phone') }}" autofocus>
										</div>
									</div>
								</div>
								
								<div class="col-sm-12">
									<div class="row">
										<div class="col-xs-4">
											<label class="firstname"> Email   :</label> </div>
											<div class="col-xs-8"	>
												<input class="form-control" placeholder="Email" name="email" type="text" value="{{ old('email') }}">
											</div>
										</div>
									</div>
									<?php
									if(isset($_POST['submit']))
									{
										$allRequest = $_POST['check_list'];
										$chk = "";
										foreach($allRequest as $chk1){
										$chk.=$chk1;
									}
									$sql="Insert into customers (type) values('$chk')";
									}
									?>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-xs-4">
												<label class="firstname"> Vị trí   :</label> </div>
												<div class="col-xs-8"	>
													
													
													<input type="checkbox" value="1" id="squaredcheck" class="checkbox1" name="check_list"  />
													<label for="squaredcheck"><span>Nhà thu mua   </span></label>
													
													<input type="checkbox" value="2" id="squaredcheck2" class="checkbox2" name="check_list"  />
													<label for="squaredcheck2"><span>   Nông dân    </span></label>
													
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="row">
												<div class="col-xs-4">
													<label class="firstname"> Mô tả   :</label> </div>
													<div class="col-xs-8"	>
														<input class="form-control" placeholder="Bạn là người như thế nào" name="detail" type="text" value="{{ old('detail') }}" autofocus>
													</div>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="row">
													<div class="col-xs-4">
														<label class="firstname"> Hình ảnh   :</label> </div>
														<div class="col-xs-8"	>
															<input class="form-control" placeholder="Hình ảnh" name="imgcustomer" type="file" value="{{ old('imgcustomer') }}">
														</div>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="row">
														<div class="col-xs-4">
															<label class="firstname"> Mật Khẩu   :</label> </div>
															<div class="col-xs-8"	>
																<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="{{ old('password') }}" >
															</div>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="row">
															<div class="col-xs-4">
																<label class="firstname"> Xác Nhận Mật Khẩu:</label> </div>
																<div class="col-xs-8"	>
																	<input class="form-control" placeholder="Xác nhận mật khẩu" name="password_confirmation" type="password">
																</div>
															</div>
														</div>
														
														<div class="col-sm-12" style="padding: 20px 0;">
															<div class ="row">
																<div class="form-block">
																	<div class="col-sm-8 col-sm-offset-4">
																		<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Đăng ký</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
												</form>
											</div>
										</body>
									</html>