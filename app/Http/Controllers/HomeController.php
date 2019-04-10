<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function adcount(Request $request)
    {
       $upss =  DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['account' => $request->adcount,'tel'=>$request->phone]);

        if($upss){
            return redirect("/home");
        }

    }

    public function imagesUpload()

    {
       dd("asdas");
        return view('imagesUpload');

    }

    public function imagesUploadPost(Request $request)

    {
        
        request()->validate([

            'uploadFile' => 'required',

        ]);

        


        foreach ($request->file('uploadFile') as $key => $value) {

            // $imageName = time(). $key . '.' . $value->getClientOriginalExtension();
           

            // $value->move(public_path('images'), $imageName);
          

        }





        // return response()->json(['success'=>'Images Uploaded Successfully.']);

    }


}
