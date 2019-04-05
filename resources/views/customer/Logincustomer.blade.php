<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login Page</title>
		<!-- Meta tag Keywords -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!-- Meta tag Keywords -->
		<!-- css files -->
		<link rel="stylesheet" href="sourse/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
		<link rel="stylesheet" href="sourse/css/styles.css" type="text/css" media="all" /> <!-- Style-CSS -->
		<!-- //css files -->
		<!-- web-fonts -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
		<style type="text/css">
		.label,.alert{
			display: block;
			padding: 10px 5px;
			font-size: 75%;
			font-weight: 700;
			line-height: 1;
			color: #fff;
			text-align: center;
			white-space: nowrap;
			vertical-align: baseline;
			border-radius: .25em;
			margin: 5px 0;
		}
		.alert-warning{
			background-color: #f0ad4e;
		}
		.alert-success{
			background-color: #5cb85c;
		}
		.label-danger{
			background-color: #d9534f;
		}
		</style>
		<!-- //web-fonts -->
	</head>
	<body>
		<!--header-->
		<div class="header-w3l">
			<h1></h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
			<!--form-stars-here-->
			<div class="wthree-form">
				<h2>Xin chào</h2>
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
				@if(Session::has('Thatbai'))
				<div class="alert alert-warning">{{Session::get('Thatbai')}}</div>
				@endif
				<form role="form" action="{{ route('customers.login.post') }}" method="POST">
					{!! csrf_field() !!}
					<fieldset>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-sub-w3">
							<input type="text" name="email" placeholder="Email" required value="{{ old('email') }}" autofocus>
							<div class="icon-w3">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3">
							<input type="password" name="password" placeholder="Password" required />
							<div class="icon-w3">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clear"><a href="{{route('admincustomer.create')}}">Tạo tài khoản</a></div>
						<div class="submit-agileits">
							<input type="submit" value="Đăng nhập">
						</div>
					</fieldset>
				</form>
			</div>
			<!--//form-ends-here-->
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p><a href="http://w3layouts.com"></a></p>
		</div>
		<!--//footer-->
	</body>
</html>