<?php
namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller {
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
	public function index() {
		$new_product = blog::paginate(10);
		return view('admins.page.blog', compact('new_product'));
	}
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
	public function create() {
		return view('admins.page.BLOG.create');
	}
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
	public function store(Request $request) {
		if ($request->hasFile('img_blog')) {
			$blog = new Blog;
			$blog->store($request);
			return redirect(route('adminblog.index'));
		} else {
			return redirect(route('adminblog.index'));
		}
	}
/**
 * Display the specified resource.
 *
 * @param  \App\Blog  $blog
 * @return \Illuminate\Http\Response
 */
	public function show($id) {
		$blog = blog::where('id_blog', $id)->first();
		return view('page.blog_single', compact('blog'));
	}
/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Blog  $blog
 * @return \Illuminate\Http\Response
 */
	public function edit($id) {
		$blog = blog::where('id_blog', $id)->first();
		return view('admins.page.BLOG.edit', compact('blog'));
	}
/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Blog  $blog
 * @return \Illuminate\Http\Response
 */
	public function update(Request $request, $id) {
		if ($request->hasFile('new_img_blog')) {
			$file = $request->file('new_img_blog');
			$filename = $file->getClientOriginalName('new_img_blog');
			$name = str_random(5) . "_" . $filename;
			while (file_exists("sourse/img/event/" . $name)) {
				$name = str_random(5) . "_" . $filename;
			}

			$file->move('sourse/img/event/', $name);
			Blog::where('id_blog', $id)->update(['name_blog' => $request->name_blog, 'img_blog' => $name, 'detail_blog' => $request->detail_blog]);
			return redirect(route('adminblog.index'));
		} else {
			Blog::where('id_blog', $id)->update(['name_blog' => $request->name_blog, 'img_blog' => $request->old_img_blog, 'detail_blog' => $request->detail_blog]);
			return redirect(route('adminblog.index'));
		}
	}
/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Blog  $blog
 * @return \Illuminate\Http\Response
 */
	public function destroy($id) {
		$blog = blog::where('id_blog', $id)->delete();
		return redirect(route('adminblog.index'));
	}
}