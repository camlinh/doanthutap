<html>
	<head>
		<meta charset="utf-8">
		<title>Hóa đơn</title>
		<base href="{{asset('')}}" >
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1>Hóa đơn</h1>
			<address contenteditable>
				<p>Nông sản</p>
				<p>31, Trần Phú, Hải Châu , Đà Nẵng</p>
				<p>033 766 2155</p>
			</address>
			<span style="color: 007fff"><div class="top-menu">
			<ul class="nav pull-right top-menu" >
				<li><a class="logout" href="trangchu" >Về trang chủ</a></li>
			</ul>
		</div></span>
	</header>
	<article>
		<h1>Recipient</h1>
		<address contenteditable>
			<p></p>
		</address>
		<table class="meta">
			<tr>
				<th><span contenteditable>Mã hóa đơn</span></th>
				<td><span contenteditable>{{$bill -> id}}</span></td>
			</tr>
			<tr>
				<th><span contenteditable>Ngày lập hóa đơn</span></th>
				<td><span contenteditable>{{$bill -> created_at}}</span></td>
			</tr>
			<tr>
				<th><span contenteditable>Chủ sản phẩm</span></th>
				<td><span contenteditable>{{$bill -> name}}</span></td>
			</tr>
			<tr>
				<th><span contenteditable>Số điện thoại</span></th>
				<td>{{$bill -> phone}}</td>
			</tr>
		</table>
		<table class="inventory">
			<thead>
				<tr>
					<th><span contenteditable>Nông sản</span></th>
					<th><span contenteditable>Khối lượng</span></th>
					<th><span contenteditable>Địa chỉ</span></th>
					<th><span contenteditable>Giá 1 kg</span></th>
					<th><span contenteditable>Phí vận chuyển</span></th>
					<th><span contenteditable>Giá nông sản</span></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a class="cut">-</a><span contenteditable>{{$bill -> name_product}}</span></td>
					<td><span contenteditable>{{$bill -> amout}}</span></td>
					<td><span contenteditable>{{$bill -> adress}}</span></td>
					<td>{{$bill -> Price_kg}}</td>
					<td>{{$bill -> price_transport}}</td>
					<td>{{$bill -> price_product}}</td>
				</tr>
			</tbody>
		</table>
		<table class="balance">
			<tr>
				<th><span contenteditable>Tổng tiền </span></th>
				<td>{{$bill -> price}}</td>
			</tr>
			<tr>
				<th><span contenteditable>Nhà thu mua</span></th>
				<td>{{Auth::guard('customers')->user()->name}}</td>
			</tr>
			<tr>
				<th><span contenteditable>Số điện thoại</span></th>
				<td>{{Auth::guard('customers')->user()->phone}}</td>
			</tr>
			<tr>
				<th><span contenteditable>Email</span></th>
				<td>{{Auth::guard('customers')->user()->email}}</td>
			</tr>
			<tr>
				<th><span contenteditable>Địa chỉ</span></th>
				<td>{{Auth::guard('customers')->user()->adress}}</td>
			</tr>
		</table>
	</article>
	<aside>
		<h1><span contenteditable>Cảm ơn quý khách đã sử dụng dịch vụ</span></h1>
		<div contenteditable>
			<p>Chúng tôi đã chuyển hóa đơn vào mail của bạn, sản phẩm sẽ được chuyển đến trong vòng 5 ngày.</p>
		</div>
	</aside>
</body>
</html>