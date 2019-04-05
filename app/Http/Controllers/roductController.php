<?php
namespace App\Http\Controllers;
use App\product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class roductController extends Controller {
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
	public function index() {
//$new_product = product::paginate(12);
		$new_product = DB::table('product')->join('customers', 'product.id_customer', '=', 'customers.id')->select('customers.phone', 'customers.name', 'product.name_product', 'product.id_type_product', 'product.time_harvest', 'product.Price_kg', 'product.amout', 'product.img_product', 'product.detail_product', 'product.id_customer', 'product.created_at', 'product.id_product')->get();
		return view('admins.page.nongsan', compact('new_product'));
	}
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
	public function create() {
		return view('customer.page.BLOG.create');
	}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
	public function store(Request $request) {
		if ($request->hasFile('img_product')) {
			$product = new product;
			$product->store($request);
			$details = Auth::guard('customers')->user();
			$id = $details['id'];
			return redirect(route('customernongdan', ['id' => $id]));
		} else {
			$details = Auth::guard('customers')->user();
			$id = $details['id'];
			return redirect(route('customernongdan', ['id' => $id]));
		}
	}

/**
 * Display the specified resource.
 *
 * @param  \App\product  $product
 * @return \Illuminate\Http\Response
 */
	public function show($id) {
// $product=product::where('id_product', $id)->first();
		//
		$product = DB::table('product')->join('customers', 'product.id_customer', '=', 'customers.id')->select('customers.phone', 'customers.name', 'product.name_product', 'product.id_type_product', 'product.time_harvest', 'product.Price_kg', 'product.amout', 'product.img_product', 'product.id_product', 'product.detail_product', 'product.id_customer')->where('id_product', $id)->first();
		return view('page.product_detail', compact('product'));
	}
/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\product  $product
 * @return \Illuminate\Http\Response
 */
	public function edit($id) {
		$product = product::where('id_product', $id)->first();
		return view('customer.page.BLOG.edit', compact('product'));
	}
/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\product  $product
 * @return \Illuminate\Http\Response
 */
	public function update(Request $request, $id) {
		if ($request->hasFile('new_img_blog')) {
			$file = $request->file('new_img_blog');
			$filename = $file->getClientOriginalName('new_img_blog');
			$name = str_random(5) . "_" . $filename;
			while (file_exists("sourse/img/features/" . $name)) {
				$name = str_random(5) . "_" . $filename;
			}

			$file->move('sourse/img/features/', $name);
			product::where('id_product', $id)->update(['name_product' => $request->name_product, 'id_type_product' => $request->id_type_product, 'time_harvest' => $request->time_harvest, 'Price_kg' => $request->Price_kg, 'amout' => $request->amout, 'img_product' => $name, 'detail_product' => $request->detail_product]);
			$details = Auth::guard('customers')->user();
			$id = $details['id'];
			return redirect(route('customernongdan', ['id' => $id]));
		} else {
			product::where('id_product', $id)->update(['name_product' => $request->name_product, 'id_type_product' => $request->id_type_product, 'time_harvest' => $request->time_harvest, 'Price_kg' => $request->Price_kg, 'amout' => $request->amout, 'img_product' => $request->old_img_blog, 'detail_product' => $request->detail_product]);
			$details = Auth::guard('customers')->user();
			$id = $details['id'];
			return redirect(route('customernongdan', ['id' => $id]));
		}
	}
/**
 * Remove the specified resource from storage.
 *
 * @param  \App\product  $product
 * @return \Illuminate\Http\Response
 */
	public function destroy($id) {
		$new = DB::table('product')->join('customers', 'product.id_customer', '=', 'customers.id')->select('customers.phone', 'customers.name', 'product.name_product', 'product.id_type_product', 'product.time_harvest', 'product.Price_kg', 'product.amout', 'product.img_product', 'product.detail_product', 'product.id_customer', 'product.created_at', 'product.id_product')->where('id_product', $id)->delete();
		return redirect(route('adminproduct.index'));
	}
	public function destroyns($id) {
		$new = DB::table('product')->join('customers', 'product.id_customer', '=', 'customers.id')->select('customers.phone', 'customers.name', 'product.name_product', 'product.id_type_product', 'product.time_harvest', 'product.Price_kg', 'product.amout', 'product.img_product', 'product.detail_product', 'product.id_customer', 'product.created_at', 'product.id_product')->where('id_product', $id)->delete();
		$details = Auth::guard('customers')->user();
		$id = $details['id'];
		return redirect(route('customernongdan', ['id' => $id]));
	}
}