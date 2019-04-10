@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
                     
        </div>
        <div class="col-6">
                <div class="img-resize"><img src="/uploads/productimg/{{$orderbuy->img}}" class="img-responsive"></div><br/><br/>
                <h4>{{$orderbuy->nameproduct}}</h4>
                <h5>จำนวน</h5>
                <p>{{$orderbuy->number}}</p>
                <h5>ราคา</h5>
                <p>{{$orderbuy->price * $orderbuy->number}}</p>
      
           
            {!! Form::open(['action' => 'OrderProductController@store','enctype' => 'multipart/form-data','method' => 'POST']) !!}
                   
                    <label for="formGroupExampleInput2"><h5>การชำระเงิน</h5></label>
                    <input type="hidden" name="number" value="{{$orderbuy->number}}" >  
                    <input type="hidden" name="idlistorderbuy" value="{{$orderbuy->id}}" >  
                    <input type="hidden" name="id_product" value="{{$orderbuy->id_product}}" >
                    <input type="hidden" name="id_sell" value="{{$orderbuy->user_id}}" >
                    <input type="hidden" name="iduser" value="{{Auth::user()->id}}" >      
                    <div class="radio">
                        <label>
                        <input type="radio" name="Check_bill" id="optionsRadios1" value="เก็บเงินปลายทาง" checked>
                            เก็บเงินปลายทาง
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="Check_bill" id="optionsRadios2" onclick="check()" value="โอนเงินผ่านบัญชีธนาคาร">
                            โอนเงินผ่านบัญชีธนาคาร
                        </label>
                           
                            <?php
                               
                                if(isset(Auth::user()->account)){
                                    if(Auth::user()->account != ""){
                                        ?>
                                        <p class="help-block" style="color: #7a7a7a ">{{Auth::user()->account}}</p>
                                        <?php
                                    }else{
                                        ?> 
                                        <p class="help-block" style="color: #f40000 ">ยังไม่มีบัญชี</p>
                                        <?php
                                    }
                                }
                            ?>
                        
                    </div>
                    <br/>
                  
                    <div class="form-group">
                        <label for="formGroupExampleInput2"><h5>ใบเสร็จชำระเงิน</h5></label>
                        <input type="file" name="imgbill" id="exampleInputFile">
                        <p class="help-block" style="color: red ">*กรณีที่เลือกโอนเงินผ่านบัญชีธนาคาร</p>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"><h5>สถานที่จัดส่ง</h5></label>
                        <textarea name="adress" class="form-control" rows="3" required 
                        oninvalid="this.setCustomValidity('กรอกที่อยู่จัดส่งด้วยค่ะ')"oninput="this.setCustomValidity('')" ></textarea>
                    </div>
                                
                    <button type="submit" class="btn btn-success" ><i class="fas fa-check-circle"></i> ยืนยันสั่งซื้อ</button>
                        
            {!! Form::close() !!}
                            
        </div>
        <div class="col-3">
                      
        </div>
    </div>
    
</div>


@endsection