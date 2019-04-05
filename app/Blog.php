<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
	protected $table = 'blog';
	protected $fillable = [
		'id_blog', 'name_blog', 'img_blog', 'detail_blog',
	];
	public function store($data) {
		$file = $data->file('img_blog');
		$filename = $file->getClientOriginalName('img_blog');
		$file->move('sourse/img/event/', $filename);
		$this->name_blog = $data->name_blog;
		$this->img_blog = $filename;
		$this->detail_blog = $data->detail_blog;
		return $this->save();
	}
}