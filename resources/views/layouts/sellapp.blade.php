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
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
            <a class="navbar-brand" href="/" style="font-family: 'Kanit', sans-serif;">
                <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                ตลาดซื้อขาย-ออนไลน์  
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0 "> -->

                    @guest
                    <a href="{{ url('/auth/facebook') }}" class="btn btn-outline-warning my-2 my-sm-0">Facebook Login</a> &nbsp;
                        <!-- <a class="nav-link disabled" href="#">หรือ</a>&nbsp;
                        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">สมัครสมาชิก</button> -->
                    @else
                        <div class="btn-group">
                            <a href="/home"><button type="button" class="btn btn-outline-light"><i class="fas fa-home"></i> หน้าแรก</button></a>&ngeq;
                            <a href="/product"><button type="button" class="btn btn-outline-success">ประกาศขายของฉัน</button></a>&ngeq;
                        <a href="/buy"><button type="button" class="btn btn-outline-success"><i class="fas fa-money-check-alt"></i> ซื้อสินค้า</button></a>&ngeq;
                        <a href="/orderbuy"><button type="button" class="btn btn-outline-success"><i class="fas fa-shopping-cart"></i> รายการที่สั่งซื้อ</button></a>&ngeq;
                            
                            <button type="button" class="btn btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-alt"></i> {{ Auth::user()->name }}
                            </button>
                            
                            <div class="dropdown-menu dropdown-menu-right mt-2">
                              
                                <div class="dropdown-divider"></div>
                                <button class="dropdown-item" type="button">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                               <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>
                                </button>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                </form>
                            </div>
                        </div>
                    @endguest

                <!-- </form> -->
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

  

</body>
</html>
