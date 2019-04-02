<?php

namespace App\Http\Controllers;

use App\price_product;
use Illuminate\Http\Request;

class price_productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_product = price_product::paginate(10);
        return view('admins.page.giathitruong',compact('new_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.page.giathitruong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('img'))
        {
            $price_product = new price_product;
            $price_product->store($request);
      return redirect(route('admingiathitruong.index'));
        }
            else{
                return redirect(route('admingiathitruong.index'));
            }
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\price_product  $price_product
     * @return \Illuminate\Http\Response
     */
    public function show(price_product $price_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\price_product  $price_product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price_product=price_product::where('id_price_product', $id)->first();
        return view('admins.page.giathitruong.edit', compact('price_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\price_product  $price_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          
      if($request->hasFile('new_img_blog'))
        {
            $file = $request->file('new_img_blog');
            $filename = $file->getClientOriginalName('new_img_blog');

            $name = str_random(5)."_".$filename;

            while(file_exists("sourse/img/voluteer/".$name)){
                $name = str_random(5)."_".$filename;
            }
            
            $file->move('sourse/img/voluteer/',$name);

            price_product::where('id_price_product', $id)->update(['Name_type_product'=>$request->name,'price_type'=>$request->price,'img_type'=>$name,'detail_price_product'=>$request->detail]);

            return redirect(route('admingiathitruong.index'));
        }
        else{
            price_product::where('id_price_product', $id)->update(['Name_type_product'=>$request->name,'price_type'=>$request->price,'img_type'=>$request->old_img_blog,'detail_price_product'=>$request->detail]);
          return redirect(route('admingiathitruong.index'));
        
        }
                
        // $blog->name_blog=$request->name_blog;
        // $blog->img_blog=$filename;
        // $blog->detail_blog=$request->detail_blog;
        //   $blog->save();
        
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\price_product  $price_product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $new=price_product::where('id_price_product', $id)->delete();
        return redirect(route('admingiathitruong.index'));
    }
}
