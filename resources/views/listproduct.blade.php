@extends('layouts.app')

@section('content')

    

    <div class="container">
        <br/>
        <br/>
        <br/>
        <div class="row">
            <div class="col-sm">
            
            </div>
            <div class="col-sm">
              
            </div>
            <div class="col-sm" style="margin-left:120px;">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="ค้นหาสินค้า" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
                </form>
            </div>
        </div>
        <br/>
        <center><h1 style="color:#018f99; font-family: 'Kanit', sans-serif;">รายการสินค้า</h1></center>
        <hr>
        {{-- <h5>สินค้าทั้งหมด</h5> --}}
        <br/>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-3" style="margin-top: 1%; margin-bottom: 2%">
                    <div class="card" style=" padding-top: 20px">
                            <div class="img-resiz"><a href="{{ route('listp.show',$product->id) }}"><img class="img-responsive" src="/uploads/productimg/{{$product->img}}" alt="Card image cap"></a></div>
                        <div class="card-body">
                        <h5 class="card-title" style="color: #636668;font-family: 'Kanit', sans-serif;">{{$product->nameproduct}}</h5>
                        <div class="row">
                            <div class="col-sm-6"><h4 style="color: #ff7700;font-family: 'Kanit', sans-serif;"></h4></div>
                            <div style="text-align: right;font-family: 'Kanit', sans-serif;" class="col-sm-6"><a href="{{ route('listp.show',$product->id) }}"><button type="button" class="btn btn-success">{{$product->price}}</button></a></div>
                        </div>
                        </div>
                    </div>
                </div>
             @endforeach

           
        </div>
        
    </div>

@endsection