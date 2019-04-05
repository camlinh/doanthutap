<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model {
	protected $table = 'bill';
	protected $fillable = [
		'id', 'id_customers', 'id_product', 'price_transport', 'price_prodcut', 'price', 'type',
	];

}