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
                    @if (isset($listorders)&&count($listorders) != 0)
                        @foreach ($listorders as $listorder)
                            <?php
                                $pricesum+=($listorder->price*$listorder->number);
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i++;?></th>
                                <td>{{$listorder->nameproduct}}</td>
                                <td style="text-align: center">{{$listorder->number}}</td>
                                <td style="text-align: right">{{$listorder->price}}</td>
                                <td>
                                    <center>
                                            {!! Form::open(['method'=>'delete', 'route'=>['listp.destroy',$listorder->id]]) !!}
                                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> ลบ</button>
                                            {!! Form::close() !!}
                                        </form>
                                    </center>
                                </td>
                            </tr>  
                        @endforeach
                        <tr>
                                <td scope="row" colspan="3"><center>ราคารวม</center></td>
                                <td style="text-align: right"><?php echo $pricesum;?></td>
                                <td></button></td>
                        </tr>  
                        
                    @else
                        <tr>
                            <td colspan="5"><center><h5>ไม่มีข้อมูลการสั่งซื้อ</h5></center>  </td>
                        </tr>  
                    @endif
                    
                    
                   
                </tbody>
            </table>
            <br/>
            <br/>
            {!! Form::open(['action' => 'OrderProductController@store','enctype' => 'multipart/form-data','method' => 'POST']) !!}
                   
                    <label for="formGroupExampleInput2"><h5>การชำระเงิน</h5></label>
                    <input type="hidden" name="iduser" value="{{Auth::user()->id}}" >      
                    <div class="radio">
                        <label>
                        <input type="radio" name="Check_bill" id="optionsRadios1" value="เก็บเงินปลายทาง" checked>
                            เก็บเงินปลายทาง
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="Check_bill" id="optionsRadios2" value="โอนเงินผ่านบัญชีธนาคาร">
                            โอนเงินผ่านบัญชีธนาคาร
                        </label>
                        
                            <?php
                                if(isset($user)){
                                    if($user->account != ""){
                                        ?>
                                        <p class="help-block" style="color: #7a7a7a ">{{$user->account}}</p>
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