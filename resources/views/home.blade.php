@extends('layouts.app')

@section('content')
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
        <a class="navbar-brand" href="#" style="font-family: 'Kanit', sans-serif;">
            <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            ตลาดซื้อขาย-ออนไลน์  
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            </ul>
            <form class="form-inline my-2 my-lg-0 ">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">เข้าสู่ระบบ</button> &nbsp;
                <a class="nav-link disabled" href="#">หรือ</a>&nbsp;
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">สมัครสมาชิก</button>
                 
            </form>
           </div>
    </nav> -->

    <div class="container">
       <div class="box">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">
                    {{-- ขาย --}}
                    <div style="width: 14rem;">
                        @guest
                        <a href="#"><img data-toggle="modal" data-target="#myModal" style="width: 20rem;" src="/img/aaa.PNG" alt="Card image cap"></a>
                        @else
                        <a href="/datasell"><img data-toggle="modal" style="width: 20rem;" src="/img/aaa.PNG" alt="Card image cap"></a>
                        @endguest
                     </div>
                </div>
                <div class="col-sm" style="margin-top:55px;">
                    {{-- ซื้อ --}}
                     <div style="width: 26rem;">
                        @guest
                        <a href="#"><img data-toggle="modal" data-target="#myModal" class="card-img-top" src="/img/bbb.PNG" alt="Card image cap">
                            {{--  <h2 style="color: #fc0000">ซื้อ</h2>  --}}
                        </a>
                        @else
                        <a href="/buy"><img class="card-img-top" src="/img/bbb.PNG" alt="Card image cap">
                            {{--  <h2 style="color: #fc0000">ซื้อ</h2>  --}}
                        </a>
                        @endguest
                     </div>
                </div>
                <div class="col-sm">
                
                </div>

                
            </div>
       </div>
    </div>
    

    <div class="container mt-3">
         <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">สมัครสมาชิก</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <center><h6>สมัครสมาชิก ตลาดซื้อ-ขาย ออนไลน์ง่ายๆ เพื่อช่วยให้คุณใช้งานสะดวกยิ่งขึ้น</h6></center><br><br>
                <center><a href="{{ url('/auth/facebook') }}"><button type="button" class="btn btn-primary">Login with Facebook</button></a></center><br><br>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>

    

        
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    @endsection
