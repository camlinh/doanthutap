<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class price_product extends Model {
	protected $table = 'price_product';
	protected $fillable = [
		'id_price_product', 'Name_type_prodcut', 'price_type', 'img_type', 'detail_price_product', 'created_at', 'updated_at',
	];
	public function store($data) {
		$file = $data->file('img');
		$filename = $file->getClientOriginalName('img');
		$file->move('sourse/img/voluteer/', $filename);

		$this->Name_type_product = $data->name;
		$this->price_type = $data->price;
		$this->img_type = $filename;
		$this->detail_price_product = $data->detail;
		return $this->save();
	}
}