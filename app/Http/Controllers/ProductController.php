<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Image;
use DB;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $products = DB::table('products')
        ->where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 'ยังไม่ขาย')
        ->get();
        return view('declare',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = null;

        if($request->hasfile('product')){
            $picfood = $request->file('product');
            $filename = time() . '.' . $picfood->getClientOriginalExtension();
            Image::make($picfood)->save(public_path('uploads/productimg/' . $filename));
 
            // $insert->picturefood = $filename;
            
        }

      DB::table('products')->insert(
        [
            'user_id' => Auth::user()->id,
            'category' => $request->typeproduct,
            'nameproduct' => $request->nameproduct,
            'price' => (int)$request->price,
            'img' => $filename,
            'detail' => $request->detail,
            'phone' => $request->phone,
           
        ]);

        // return redirect()->to('declare');
        // return redirect()->action('App\Http\Controllers\ProductController@show');

        // return redirect()->action('ProductController@index');
        return redirect('product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $products = DB::table('products')
        ->where('status', '=', 'ยังไม่ขาย')
        ->where('category', '=', $product)
        ->get();

        return view('listproduct',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        DB::table('products')->where('id', '=',$product)->delete();
        return redirect()->action(
            'ProductController@index'
        );
    }

    public function listordeshowr(){
        $orders = DB::table('orderproduct')
        ->join('users', 'orderproduct.id_user', '=', 'users.id')
        ->join('products', 'orderproduct.id_product', '=', 'products.id')
        ->select('orderproduct.*','users.name','products.img','products.nameproduct','products.price','products.phone')
        ->where('orderproduct.id_sell', '=', Auth::user()->id)
        ->where('orderproduct.status', '=', 'ยังไม่ส่ง')
        ->get();
        

        // dd($orders);

        return view('sell.listorder',compact('orders'));

    }   
}
