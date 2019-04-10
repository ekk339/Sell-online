@extends('layouts.sellapp')

@section('content')

    <div class="container">
            <br>
            <br>
            <div class="card">
                <div class="card-header">
                    รายละเอียดสินค้า
                </div>
                <div class="card-body">
                <blockquote class="blockquote mb-0">
                       <div style="margin: auto; width: 60%">
                        {!! Form::open(['action' => 'ProductController@store','enctype' => 'multipart/form-data','method' => 'POST']) !!}
                                    <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">เลือกหมวด</label>
                                                    <select name="typeproduct" class="form-control" id="exampleFormControlSelect1">
                                                      <option>คอมพิวเตอร์</option>
                                                      <option>กีฬา</option>
                                                      <option>เครื่องดนตรี</option>
                                                      <option>มือถือแท็บเล็ต</option>
                                                      <option>กระเป๋า</option>
                                                      <option>นาฬิกา</option>
                                                      <option>จักรยาน</option>
                                                      <option>รองเท้า</option>
                                                      <option>พระเครื่อง</option>
                                                      <option>การศึกษา</option>
                                                      <option>บ้านและสวน</option>
                                                      <option>เสื้อผ้าเครื่องแต่งกาย</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                             </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">หัวข้อสินค้าที่คุณต้องการลงขาย</label>
                                        <input name="nameproduct" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ชื่อสินค้า เช่น ไอโฟ 6 32GB" required 
                                        oninvalid="this.setCustomValidity('กรอกหัวข้อด้วยค่ะ')"oninput="this.setCustomValidity('')">
                                        
                                    </div>
                                   <div class="row">
                                       <div class="col-sm">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ระบุราคาที่เหมาะสม</label>
                                                <input name="price" type="number" class="form-control" id="exampleInputPassword1" placeholder="ระบุราคาเต็มของสินค้า" required 
                                                oninvalid="this.setCustomValidity('ระบุราคาด้วยค่ะ')"oninput="this.setCustomValidity('')">
                                            </div>
                                       </div>
                                       <div class="col-sm"></div>
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputFile">เพิ่มรูปภาพ</label>
                                        {{-- <input name="img" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"> --}}
                                        <input type="file" class="form-control-file"  name="product" required 
                                        oninvalid="this.setCustomValidity('เพิ่มรูปภาพสินค้าด้วยค่ะ')"oninput="this.setCustomValidity('')">
                                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                        
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleTextarea">รายละเอียดสินค้า</label>
                                            <textarea name="detail" class="form-control" id="exampleTextarea" rows="3" required 
                                            oninvalid="this.setCustomValidity('กรอกรายละเอียดสินค้าด้วยค่ะ')"oninput="this.setCustomValidity('')"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">เบอร์โทรติดต่อ</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="เบอร์ดทรที่สามารถติดต่อได้" required 
                                        oninvalid="this.setCustomValidity('กรอกเบอร์โทรด้วยค่ะ')"oninput="this.setCustomValidity('')">
                                    </div>
                                   
                                    <button type="submit" class="btn btn-warning">บันทึก</button>
                            
                            <!-- {{Form::Submit('Create',['class' => 'btn btn-primary'])}} -->
                            {!! Form::close() !!}
                       </div>
                </blockquote>
                </div>
            </div>
           
    </div>
    @endsection
    
  