<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class product extends Model {
	protected $table = 'product';
	protected $fillable = [
		'id_product', 'name_product', 'id_type_product', 'time_harvest', 'Price_kg', 'amout', 'img_product', 'detail_product', 'id_customer',
	];

	public function store($data) {
		$file = $data->file('img_product');
		$filename = $file->getClientOriginalName('img_product');
		$file->move('sourse/img/features/', $filename);

		$this->name_product = $data->name_product;
		$this->id_type_product = $data->id_type_product;
		$this->time_harvest = $data->time_harvest;
		$this->Price_kg = $data->Price_kg;
		$this->amout = $data->amout;
		$this->img_product = $filename;
		$this->detail_product = $data->detail_product;
		$this->type_product = '1';
		$details = Auth::guard('customers')->user();
		$this->id_customer = $details['id'];
		return $this->save();
	}
}
