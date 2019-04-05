<?php
namespace App\Http\Controllers;
use App\Bill;
use App\Http\Controllers\Controller;
use App\product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BillController extends Controller {
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
	public function index() {
		$bill = DB::table('bill')->join('product', 'bill.id_product', '=', 'product.id_product')->join('customers', 'bill.id_customers', '=', 'customers.id')->select('product.*', 'customers.*', 'bill.*')->get();
		return view('admins.page.billss', compact('bill'));
	}
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
	public function create() {
	}
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
	public function store() {

	}
/**
 * Display the specified resource.
 *
 * @param  \App\Bill  $bill
 * @return \Illuminate\Http\Response
 */
	public function show($id) {
		if (Auth::guard('customers')->check()) {
			$new = DB::table('product')->join('customers', 'product.id_customer', '=', 'customers.id')->select('customers.phone', 'customers.name', 'product.name_product', 'product.id_type_product', 'product.time_harvest', 'product.Price_kg', 'product.amout', 'product.img_product', 'product.detail_product', 'product.id_customer', 'product.created_at', 'product.id_product', 'customers.id')->where('id_product', $id)->first();
			$bills = new Bill();
			$bills->id_customers = $new->id;
			$bills->id_product = $new->id_product;
			$bills->price_transport = ($new->amout) * 2;
			$bills->price_product = $new->amout * $new->Price_kg;
			$bills->price = $new->amout * 2 + ($new->amout * $new->Price_kg);
			$bills->type = '1';
			$bills->name_purchase = Auth::guard('customers')->user()->name;
			$bills->phone_purchase = Auth::guard('customers')->user()->phone;
			$bills->emai_purchase = Auth::guard('customers')->user()->email;
			$bills->adress_purchase = Auth::guard('customers')->user()->adress;
			$bills->save();
			product::where('id_product', $id)->update(['type_product' => '2']);
			$bill = DB::table('bill')->join('product', 'bill.id_product', '=', 'product.id_product')->join('customers', 'bill.id_customers', '=', 'customers.id')->select('product.*', 'customers.*', 'bill.*')->where('product.id_product', $id)->first();
			$email = Auth::guard('customers')->user()->email;
			$name = Auth::guard('customers')->user()->name;
			Mail::send('page.bills', array('bill' => $bill), function ($msg) use ($email, $name) {
				$msg->from('linhqn270997@gmail.com', 'Trần Thị Cẩm Linh');
				$msg->to($email, $name)->subject('Cảm ơn bạn đac sử dụng dịch vụ , nông sản sẽ được chuyển đến trong vòng 5 ngày');
			});
			return view('page.bills', compact('bill'));
		} else {
			$product = DB::table('product')->join('customers', 'product.id_customer', '=', 'customers.id')->select('customers.phone', 'customers.name', 'product.name_product', 'product.id_type_product', 'product.time_harvest', 'product.Price_kg', 'product.amout', 'product.img_product', 'product.id_product', 'product.detail_product', 'product.id_customer')->where('id_product', $id)->first();
			return view('page.product_detail', compact('product'));
		}
	}
/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Bill  $bill
 * @return \Illuminate\Http\Response
 */
	public function edit(Bill $bill) {
//
	}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Bill  $bill
 * @return \Illuminate\Http\Response
 */
	public function update(Request $request, Bill $bill) {
//
	}
/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Bill  $bill
 * @return \Illuminate\Http\Response
 */
	public function destroy($id) {
		$bill = bill::where('id', $id)->delete();
		return redirect(route('adminbills.index'));
	}
}