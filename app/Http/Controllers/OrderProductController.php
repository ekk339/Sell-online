<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use DB;
use Auth;
use DateTime;

class OrderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    //    $request->Check_bill;

    //    dd($request->iduser);

       $filename = null;
       if($request->hasfile('imgbill')){
           $picfood = $request->file('imgbill');
           $filename = time() . '.' . $picfood->getClientOriginalExtension();
           Image::make($picfood)->save(public_path('uploads/imgbill/' . $filename));

           // $insert->picturefood = $filename;
       }

       DB::table('orderproduct')->insert(
        [
            'id_user' => $request->iduser,
            'id_sell' => $request->id_sell,
            'id_product' => $request->id_product,
            'date' => new DateTime(),
            'Check_bill' => $request->Check_bill,
            'img_bill' => $filename,
            'adresssend' => $request->adress,
            'number' => $request->number,
            'telbuy' => Auth::user()->tel

        ]
       );

       DB::table('products')
            ->where('id', $request->id_product)
            ->update(array('status' => 'จองแล้ว'));

    //    $idordermax =  DB::table('orderproduct')->orderBy('id_order', 'desc')->first();
    // //    dd($aa->id_order);
    //   $users = DB::table('listordre')
    //   ->where('id_users', '=', $request->iduser)
    //   ->get();
       
    //   foreach ($users as  $user) {
    //     DB::table('orderdetail')->insert(
    //         [
    //             'id_user' => $request->iduser,
    //             'id_orderproduct' => $idordermax->id_order,
    //             'id_product' => $user->id_product,
    //             'number' => $user->number
    //         ]
    //       );
    //   }

      DB::table('listordre')->where('id', '=', $request->idlistorderbuy)->delete();

      return redirect()->action(
        'ListProductController@orderbuy'
      );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sendorder($id_order, $id_product)
    {
        
        DB::table('orderproduct')
            ->where('id_order','=',$id_order)
            ->update(array('status' => 'จัดส่งแล้ว'));

        DB::table('products')
            ->where('id','=',$id_product)
            ->update(array('status' => 'ขายแล้ว'));

        return redirect()->action('ProductController@listordeshowr');
        
    }
    public function send_user(){
        $orders = DB::table('orderproduct')
        ->join('users', 'orderproduct.id_user', '=', 'users.id')
        ->join('products', 'orderproduct.id_product', '=', 'products.id')
        ->select('orderproduct.*','users.name','products.img','products.nameproduct','products.price','products.phone')
        ->where('orderproduct.id_sell', '=', Auth::user()->id)
        ->where('orderproduct.status', '=', 'จัดส่งแล้ว')
        ->get();
        

        // dd($orders);

        return view('sell.send_user',compact('orders'));
    }

    public function deletesend_user($id_order, $id_product)
    {
        
        DB::table('orderproduct')->where('id_order', '=',$id_order)->delete();
        DB::table('products')->where('id', '=', $id_product)->delete();

        return redirect()->action('OrderProductController@send_user');
        
    }
}
