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
                                    <a style="margin-right: 10px" href="/datasell"><button type="button" class="btn btn-info">ขาย</button></a>
                                    <a style="margin-right: 10px" href="/listorder"><button type="button" class="btn btn-info">รายการที่สั่งซื้อ</button></a>
                                    <a style="margin-right: 10px" href="/send_user"><button type="button" class="btn btn-info">รายการสินที่ส่งแล้ว</button></a>
                                 </div>
                            </div>
                    </div>
            </div>
            <div class="row">
                <div class="container-fluid">
                    <br/>
                    <center><h3>รายการที่สั่งซื้อ</h3></center>
                    <br/>
                   <div class="row" style="background-color: white;">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>รูปสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวนสินค้า</th>
                                <th>ชื่อผู้ซื้อ</th>
                                <th>เบอร์โทรผู้ซื้อ</th>
                                <th>การเก็บเงิน</th>
                                <th>บิล</th>
                                <th>ราคา</th>
                                <th>ที่อยู่</th>
                                <th>จัดส่ง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            @foreach ($orders as $order)
                                <tr>
                                    <th style="width: 5ch"><?php echo $i++;?></th>
                                    <td style="width: 20ch"><div class="img-resize"><img src="/uploads/productimg/{{$order->img}}" class="img-responsive"></div><br/><br/></td>  
                                    <td style="width: 20ch"><h5>{{$order->nameproduct}}</h5></td>  
                                    <td style="width: 10ch"><h5>{{$order->number}}</h5></td>  
                                    <td style="width: 20ch"><h5>{{$order->name}}</h5></td>  
                                    <td style="width: 20ch"><h5>{{$order->telbuy}}</h5></td>  
                                    <td style="width: 20ch"><h5>{{$order->Check_bill}}</h5></td>  
                                    <td style="width: 20ch">
                                        @if (isset($order->img_bill) != "")
                                            <div class="img-resize zoom"><a href="#"><img src="/uploads/imgbill/{{$order->img_bill}}" class="img-responsive"></a></div>
                                        @else
                                        @endif
                                    </td>  
                                    <td style="width: 15ch"><h5>{{$order->price * $order->number}}</h5></td>  
                                    <td style="width: 30ch"><h5>{{$order->adresssend}}</h5></td>  
                                    <td style="width: 10ch"><h5><a href="/sednorder/{{$order->id_order}}/{{$order->id_product}}" class="btn btn-success">จัดส่ง</a></h5></td>   
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>

                    @foreach ($orders as $order)
                        {{-- <div class="col-sm-3" style="margin-top: 1%">
                            <div class="card">
                                    <div class="img-resize zoom"><a href="#"><img class="card-img-top img-responsive resize" src="/uploads/productimg/{{$order->img_bill}}" id="imgSmile" alt="Card image cap"></a></div>
                                <div class="card-body">
                                <h5 class="card-title" style="color: #636668;font-family: 'Kanit', sans-serif;">{{$order->nameproduct}}</h5>
                                <div class="row">
                                    <div class="col-sm-6"><h4 style="color: #ff7700;font-family: 'Kanit', sans-serif;">{{$order->price}}</h4></div>
                                    <div style="text-align: right;font-family: 'Kanit', sans-serif;" class="col-sm-6">
                                            {!! Form::open(['method'=>'delete', 'route'=>['product.destroy',$order->id]]) !!}
                                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> ลบ</button>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div> --}}
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