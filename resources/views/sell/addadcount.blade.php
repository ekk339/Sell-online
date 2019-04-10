<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="main.js"></script>

 <style>
           .box{
            margin-top:140px;
           }
           .bg{
            background-color:#ecebeb;
           }
           .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            }

            .fa:hover {
                opacity: 0.7;
            }

            .fa-facebook {
            background: #3B5998;
            color: white;
            }

            .fa-twitter {
            background: #55ACEE;
            color: white;
            }

            .fa-google {
            background: #dd4b39;
            color: white;
            }

            .fa-linkedin {
            background: #007bb5;
            color: white;
            }

            .fa-youtube {
            background: #bb0000;
            color: white;
            }

            .fa-instagram {
            background: #125688;
            color: white;
            }

            .fa-pinterest {
            background: #cb2027;
            color: white;
            }

            .fa-snapchat-ghost {
            background: #fffc00;
            color: white;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }

            .fa-skype {
            background: #00aff0;
            color: white;
            }

            .fa-android {
            background: #a4c639;
            color: white;
            }

            .fa-dribbble {
            background: #ea4c89;
            color: white;
            }

            .fa-vimeo {
            background: #45bbff;
            color: white;
            }

            .fa-tumblr {
            background: #2c4762;
            color: white;
            }

            .fa-vine {
            background: #00b489;
            color: white;
            }

            .fa-foursquare {
            background: #45bbff;
            color: white;
            }

            .fa-stumbleupon {
            background: #eb4924;
            color: white;
            }

            .fa-flickr {
            background: #f40083;
            color: white;
            }

            .fa-yahoo {
            background: #430297;
            color: white;
            }

            .fa-soundcloud {
            background: #ff5500;
            color: white;
            }

            .fa-reddit {
            background: #ff5700;
            color: white;
            }

            .fa-rss {
            background: #ff6600;
            color: white;
            }
            div.img-resize img {
            height: 180px;
            width: auto;
            }

            div.img-resize {
                padding: 2%;
                width: 250px;
                height:190px;
                overflow: hidden;
                text-align: center;
            }
            /* img.resize  {
            width: 32px;
            height: 32px;
            border: 0;
            }
            img:hover.resize  {
                width: 500px;
                height: 500px;
                border: 0;
            } */
            .zoom {
                padding: 50px;
                background-color: snow;
                transition: transform .2s;
                width: 300px;
                height: 300px;
                margin: 0 auto;
            }

            .zoom:hover {
                -ms-transform: scale(3); /* IE 9 */
                -webkit-transform: scale(3); /* Safari 3-8 */
                transform: scale(3); 
                
            }
    </style>

</head>
<body class="bg">
    <div id="app">

    <div class="container">
            <br>
            <br>
            <div class="card">
                <div class="card-header">
                    เพิ่มข้อมูลส่วนตัว
                </div>
                <div class="card-body">
                <blockquote class="blockquote mb-0">
                       <div style="margin: auto; width: 60%">
                        {!! Form::open(['action' => 'HomeController@adcount','enctype' => 'multipart/form-data','method' => 'GET']) !!}
                                    <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">บัญชีธนาคาร</label>
                                                    <input name="adcount" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="083218832432482 กรุงไทย" required 
                                                    oninvalid="this.setCustomValidity('กรอกหัวข้อด้วยค่ะ')"oninput="this.setCustomValidity('')">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                             </div>
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">เบอร์โทรติดต่อ</label>
                                        <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="" required 
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
</div>

  

</body>
</html>
    
  