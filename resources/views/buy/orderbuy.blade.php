@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
                     
        </div>
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th style="text-align: center" scope="col">ชื่อสินค้า</th>
                    <th style="text-align: center" scope="col">จำนวน</th>
                    <th style="text-align: center" scope="col">ราคา</th>
                    <th style="text-align: center" scope="col">ยกเลิก</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        $pricesum = 0;
                    ?>
                    @if (isset($orderbuys)&&count($orderbuys) != 0)
                        @foreach ($orderbuys as $orderbuy)
                            <tr>
                                <th scope="row"><?php echo $i++;?></th>
                                <td>{{$orderbuy->nameproduct}}</td>
                                <td style="text-align: center">{{$orderbuy->number}}</td>
                                <td style="text-align: right">{{$orderbuy->price}}</td>
                                <td>
                                        <a href="/pay/{{$orderbuy->id}}"><button type="button" class="btn btn-success"><i class="far fa-credit-card"></i> ชำระเงิน</button></a>
                                    {{-- <center>
                                            {!! Form::open(['method'=>'delete', 'route'=>['listp.destroy',$listorder->id]]) !!}
                                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> ลบ</button>
                                            {!! Form::close() !!}
                                        </form>
                                    </center> --}}
                                </td>
                            </tr>  
                        @endforeach
                       
                        
                    @else
                        <tr>
                            <td colspan="5"><center><h5>ไม่มีข้อมูลการสั่งซื้อ</h5></center>  </td>
                        </tr>  
                    @endif
                    
                    
                   
                </tbody>
            </table>
            <br/>
            <br/>
           
                            
        </div>
        <div class="col-3">
                      
        </div>
    </div>
    
</div>
@endsection