<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Image;
use DB;
use Auth;

class ListProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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


        DB::table('listordre')->insert(
            [
                'id_users' => $request->id_user,
                'id_product' => $request->id,
                'number' => $request->number,
                'id_sell' => $request->id_sell
            ]
        );

        return redirect()->action(
            'ListProductController@orderbuy'
          );
        // return redirect()->route('showorder');
        // return redirect();  
        // return redirect()->route('route.name', [$param]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')
        ->where('id', '=', $id)
        ->first();

        return view('showproduct',compact('product'));
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
        DB::table('listordre')->where('id', '=',$id)->delete();
        return redirect()->action(
            'ListProductController@confirmorder', ['id' => Auth::user()->id]
        );
    }

    public function confirmorder($id)
    {
        $listorders = DB::table('listordre')
        ->join('products', 'listordre.id_product', '=', 'products.id')
        ->where('id_users', '=', $id)
        ->select('listordre.*', 'products.nameproduct','products.price')
        ->get();

        // dd($listorders);
        // dd($listorders);
        // $user = "1";
        $user = DB::table('users')
                     ->where('id', '=', Auth::user()->id)
                     ->first();
       
        return view('listbuy',compact('listorders','user'));
        
    }

    public function deletelistorder($id){
        
    }

    public function orderbuy(){
        $orderbuys = DB::table('listordre')
        ->join('products', 'listordre.id_product', '=', 'products.id')
        ->where('listordre.id_users', '=',Auth::user()->id)
        ->select('listordre.*', 'products.nameproduct','products.price')
        ->get();

        return view('buy.orderbuy',compact('orderbuys'));
    }

    public function pay($id){
       
        $orderbuy = DB::table('listordre')
        ->join('products', 'listordre.id_product', '=', 'products.id')
        ->where('listordre.id', '=',$id)
        ->where('listordre.id_users', '=',Auth::user()->id)
        ->select('listordre.*', 'products.nameproduct','products.price','products.user_id','products.img')
        ->first();

        // dd($orderbuy);

        return view('buy.pay',compact('orderbuy'));
    }

    // public function confirmbuy(Request $request){

    //     dd($request->iduser);
       
    //     DB::table('orderproduct')->insert(
    //         [
    //             'id_users' => $request->id_user,
    //             'id_product' => $request->id,
    //             'number' => $request->number,
    //             'id_sell' => $request->id_sell
    //         ]
    //     );

       
    //     return view('buy.pay',compact('orderbuy'));
    // }


}
