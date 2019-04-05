<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customers extends Authenticatable {
	use Notifiable;
	protected $guard = 'customers';
	protected $fillable = [
		'id', 'name', 'adress', 'phone', 'email', 'type', 'detail', 'imgcustomer', 'password', 'created_at', 'updated_at',
	];
}