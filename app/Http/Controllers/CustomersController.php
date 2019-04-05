<?php
namespace App\Http\Controllers;
use App\Customers;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;

class CustomersController extends Controller {

	public function __construct() {
// $this->middleware('auth:customers');
	}
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
	public function index() {
		$new_customernongdan = customers::where('type', 1)->paginate(10);

		$new_customernhathumua = customers::where('type', 2)->paginate(10);
		return view('admins.page.customer', compact('new_customernongdan', 'new_customernhathumua'));
	}
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
	public function login() {
		return view('customer.Logincustomer');
	}
	public function create() {
		return view('customer.register');
	}
	public function register(Request $request) {
		$this->validate($request,
			[
				'email' => 'required|email',
				'password' => 'required|min:6',
			],
			[
				'email.required' => 'Email là trường bắt buộc',
				'email.email' => 'Email không đúng định dạng',
				'password.required' => 'Mật khẩu là trường bắt buộc',
				'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
			]);
		if ($request->hasFile('imgcustomer')) {
			$file = $request->file('imgcustomer');
			$filename = $file->getClientOriginalName('imgcustomer');
			$file->move('sourse/img/customer/', $filename);
			$customers = new Customers();
			$customers->name = $request->name;
			$customers->adress = $request->adress;
			$customers->phone = $request->phone;
			$customers->email = $request->email;
			$customers->type = $request->check_list;
			$customers->detail = $request->detail;
			$customers->imgcustomer = $filename;
			$customers->password = Hash::make($request->password);
			$customers->save();
			return redirect('logincustomer');
		}
	}
	public function postLogin(Request $request) {
// Kiểm tra dữ liệu nhập vào
		$rules = [
			'email' => 'required|email',
			'password' => 'required|min:6',
		];
		$messages = [
			'email.required' => 'Email là trường bắt buộc',
			'email.email' => 'Email không đúng định dạng',
			'password.required' => 'Mật khẩu là trường bắt buộc',
			'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
		];
		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {
// Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
			return redirect('logincustomer')->withErrors($validator)->withInput();
		} else {

// Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
			$email = $request->input('email');
			$password = $request->input('password');

			if (Auth::guard('customers')->attempt(['email' => $email, 'password' => $password])) {
				$details = Auth::guard('customers')->user();
				$id = $details['id'];
// Kiểm tra đúng email và mật khẩu sẽ chuyển trang
				return redirect()->route('customernongdan', ['id' => $id])->with('Thanhcong', 'Đănh nhập thành công');
			} else {
// Kiểm tra không đúng sẽ hiển thịｃ thông báo lỗi
				Session::flash('errors', 'Email hoặc mật khẩu không đúng!');
				return redirect('logincustomer')->with('Thatbai', 'Đăng nhập không thành công');
			}
		}
	}
	public function getLogout() {
		Auth::guard('customers')->logout();
		return redirect('trangchu');
	}
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
	public function store(Request $request) {

	}
/**
 * Display the specified resource.
 *
 * @param  \App\Customers  $customers
 * @return \Illuminate\Http\Response
 */
	public function show(Customers $customers) {
//
	}
/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Customers  $customers
 * @return \Illuminate\Http\Response
 */
	public function edit(Customers $customers) {
//
	}
/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Customers  $customers
 * @return \Illuminate\Http\Response
 */
	public function update(Request $request, Customers $customers) {
//
	}
/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Customers  $customers
 * @return \Illuminate\Http\Response
 */
	public function destroy($id) {
		$new = customers::where('id', $id)->delete();
		return redirect(route('admincustomer.index'));
	}
}