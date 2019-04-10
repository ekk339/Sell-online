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
            
            {{-- ค้นหา --}}
            {{-- <div class="col-sm" style="margin-left:120px;">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="ค้นหาสินค้า" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
                </form>
            </div> --}}

        </div>
        <br/>
        <center><h1 style="color:#018f99; font-family: 'Kanit', sans-serif;">ประเภทสินค้า</h1></center>
        <hr>
        <br/>
        <div class="row">
            <div class="col">
                <center>
                        <a href="product/มือถือแท็บเล็ต">
                            <button type="button" class="btn btn-outline-info">
                            <center>
                            <div style="width: 6rem;">
                                <img class="card-img-top" src="/img/phone.PNG" alt="Card image cap">
                            </div>
                            </center>
                            <h6 style="font-family: 'Kanit', sans-serif;">มือถือ แท็บเล็ต</h6>
                            </button>
                        </a>
                </center>
            </div>
            <div class="col">
                <center>
                    
                  <a href="product/คอมพิวเตอร์">
                  <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/sss.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">คอมพิวเตอร์</h6>
                    </button>
                  </a>
                </center>
            </div>
            <div class="col">
                <center>
                    <a href="product/เครื่องดนตรี">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/ddd.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">เครื่องดนตรี</h6>
                    </button>
                    </a>
                </center>
            </div>
            <div class="col">
                <center>
                     <a href="product/กีฬา">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/sport.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">กีฬา</h6>
                    </button>
                     </a>
                </center>
            </div>
            <div class="col">
                <center>
                    <a href="product/จักรยาน">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/c.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">จักรยาน</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                    <a href="product/กระเป๋า">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/wallet-icon.png" alt="Card image cap">
                    </div>
                    </center>
                    <h6 style="font-family: 'Kanit', sans-serif;">กระเป๋า</h6>
                    </button>
                </center>
            </div>
        </div>
        <br/>
        <div class="row">
        <div class="col">
                <center>
                     <a href="product/นาฬิการ">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/clock-icon_34468.png" alt="Card image cap">
                    </div>
                    </center>
                    <h6>นาฬิการ</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                     <a href="product/รองเท้า">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/Sneakers-2-icon.png" alt="Card image cap">
                    </div>
                    </center>
                    <h6>รองเท้า</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                     <a href="product/เสื้อผ้าเครื่องแต่งกาย">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/frock_78055.png" alt="Card image cap">
                    </div>
                    </center>
                    <h6>เสื้อผ้า เครื่องแต่งกาย</h6>
                    </button>
                </center>
            </div>
          
            <div class="col">
                <center>
                     <a href="product/การศึกษา">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/icon_1.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>การศึกษา</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                     <a href="product/บ้านและสวน">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/icon-home-improvement.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>บ้านและสวน</h6>
                    </button>
                </center>
            </div>
            <div class="col">
                <center>
                     <a href="product/พระเครื่อง">
                    <button type="button" class="btn btn-outline-info">
                    <center>
                    <div style="width: 6rem;">
                        <img class="card-img-top" src="/img/unnamed.PNG" alt="Card image cap">
                    </div>
                    </center>
                    <h6>พระเครื่อง</h6>
                    </button>
                </center>
            </div>
        </div>
        <br/>
        
        
    </div>


  @endsection