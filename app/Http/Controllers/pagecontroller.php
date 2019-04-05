<?php
namespace App\Http\Controllers;
use App\blog;
use App\customers;
use App\price_product;
use App\product;
use DB;

class pagecontroller extends Controller {

	public function getindex() {
		$new_product = product::where('type_product', 1)->take(3)->get();
		$new_purchaser = customers::take(3)->get();
		$new_blog = blog::take(4)->get();
		$new_price_product = price_product::take(3)->get();
		return view('page.trangchu', compact('new_product', 'new_purchaser', 'new_blog', 'new_price_product'));
	}
	public function getnongsan() {
		$new_product = product::where('type_product', 1)->paginate(10);
		return view('page.nongsan', compact('new_product'));
	}
	public function getadminnongsan() {
		$new_product = product::paginate(10);
		return view('admins.page.nongsan', compact('new_product'));
	}
	public function getnongsanctm($id) {
		$new_product = DB::table('product')->join('customers', 'product.id_customer', '=', 'customers.id')->select('customers.phone', 'customers.name', 'product.name_product', 'product.id_type_product', 'product.time_harvest', 'product.Price_kg', 'product.amout', 'product.img_product', 'product.detail_product', 'product.id_customer', 'customers.id', 'product.id_product')->where('customers.id', $id)->get();
		return view('customer.page.nongsan', compact('new_product'));
	}

	public function getadmingiathitruong() {
		$new_product = price_product::paginate(10);
		return view('admins.page.giathitruong', compact('new_product'));
	}

	public function getgiathitruong() {
		$new_price_product = price_product::paginate(12);
		return view('page.giathitruong', compact('new_price_product'));
	}
	public function getnhathumua() {
		$new_purchaser = customers::paginate(12);
		return view('page.nhathumua', compact('new_purchaser'));
	}
	public function getkienthuc() {
		$new_blog = blog::paginate(12);
		return view('page.kienthuc', compact('new_blog'));
	}
}