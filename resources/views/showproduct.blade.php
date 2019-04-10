@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-3">
                 
            </div>
            <div class="col-6">
                {!! Form::open(['action' => 'ListProductController@store','enctype' => 'multipart/form-data','method' => 'POST']) !!}
                    <div class="img-resize"><img src="/uploads/productimg/{{$product->img}}" class="img-responsive"></div><br/><br/>
                    <div class="form-group">
                        <label for="formGroupExampleInput"><h2>{{$product->nameproduct}}</h2></label>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"><h5>รายละเอียด</h5></label>
                        <p>{{$product->detail}}</p>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"><h5>จำนวน/ชิ้น</h5></label>
                        <input type="number" name="number" value="1" class="form-control" id="formGroupExampleInput2" placeholder="จำนวนที่ต้องการ"  required 
                        oninvalid="this.setCustomValidity('กรอกจำนวนที่ต้องการด้วยค่ะ')"oninput="this.setCustomValidity('')" >
                    </div>
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="id_sell" value="{{$product->user_id}}">
                        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                        <input type="submit" class="btn btn-success" value="สั่งซื้อ">
                   
                {!! Form::close() !!}
            </div>
            <div class="co3">
                  
            </div>
        </div>

</div>   

@endsection