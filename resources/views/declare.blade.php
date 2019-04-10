@extends('layouts.sellapp')

@section('content')
 
    <div class="container-fluid">
            <div class="row" style="background-color: #ffff; padding: 1%" >
                    <div class="container" >
                            <div class="container">
                                <div class="row" style="margin: auto;">
                                    {{--  <div class="col-sm"></div>
                                    <div class="col-sm"></div>
                                    <div class="col-sm">
                                        <button type="button" class="btn btn-outline-primary"><h5>ออนไลน์</h5></button>
                                    </div>
                                    <div class="col-sm">
                                        <button type="button" class="btn btn-outline-primary"><h5>รอตรวจสอบ</h5></button>
                                    </div>
                                    <div class="col-sm">
                                        <button type="button" class="btn btn-outline-primary"><h5>ขาย</h5></button>
                                    </div>
                                    <div class="col-sm"></div>
                                    <div class="col-sm"></div>  --}}
                                    <a style="margin-right: 10px" href="/testupimg"><button type="button" class="btn btn-info">ขาย</button></a>
                                    <a style="margin-right: 10px" href="/listorder"><button type="button" class="btn btn-info">รายการที่สั่งซื้อ</button></a>
                                    <a style="margin-right: 10px" href="/send_user"><button type="button" class="btn btn-info">รายการสินที่ส่งแล้ว</button></a>
                                    {{-- <a style="margin-right: 10px" href="/addadcount"><button type="button" class="btn btn-info">แก้ไขข้อมูลส่วนตัว</button></a> --}}
                                 </div>
                            </div>
                    </div>
            </div>
            <div class="row">
                <div class="container">
                  
        
                   <div class="row">
                    @foreach ($products as $product)
                        <div class="col-sm-3" style="margin-top: 1%">
                            <div class="card">
                                    <div class="img-resize"><a href="#"><img class="card-img-top img-responsive resize" src="/uploads/productimg/{{$product->img}}" id="imgSmile" alt="Card image cap"></a></div>
                                <div class="card-body">
                                <h5 class="card-title" style="color: #636668;font-family: 'Kanit', sans-serif;">{{$product->nameproduct}}</h5>
                                {{--  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>  --}}
                                {{--  <a href="#" class="btn btn-primary">{{$product->price}}</a>  --}}
                                <div class="row">
                                    <div class="col-sm-6"><h4 style="color: #ff7700;font-family: 'Kanit', sans-serif;">{{$product->price}}</h4></div>
                                    <div style="text-align: right;font-family: 'Kanit', sans-serif;" class="col-sm-6">
                                            {!! Form::open(['method'=>'delete', 'route'=>['product.destroy',$product->id]]) !!}
                                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> ลบ</button>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                   @endforeach
                    
                   </div>
                   
                </div>
            </div>
    </div>

    <script>
            $(document).ready(function(){
            $('#imgSmile').width(200);
            $('#imgSmile').mouseover(function()
            {
                $(this).css("cursor","pointer");
                $(this).animate({width: "500px"}, 'slow');
            });
            
            $('#imgSmile').mouseout(function()
            {   
                $(this).animate({width: "200px"}, 'slow');
            });
        </script>

    @endsection