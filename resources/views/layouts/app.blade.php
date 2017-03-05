<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{url('plugins/bootstrap/bootstrap.css')}}"rel="stylesheet"/>
    <link href="{{url('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <link href="{{url('layout/app.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{url('css/style.css')}}" rel="stylesheet" />
    <link href="{{url('css/main-style.css')}}" rel="stylesheet" />
    <link href="{{url('css/cart.css')}}" rel="stylesheet" />
    {{--<script>--}}
        {{--window.Laravel ={!! json_encode([--}}
            {{--'csrfToken' => csrf_token(),--}}
        {{--]) !!};--}}
    {{--</script>--}}
</head>
<body id="top">
    <div class="wrapper row0">
        <div id="topbar" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="fl_left">
                <ul>
                    <li><i class="fa fa-phone"></i> +84 (086) 924 2395</li>
                    <li><i class="fa fa-envelope-o"></i> windcool2395@gmail.com</li>
                </ul>
            </div>
            <div class="fl_right">
                <ul>
                    <li><a href="home"><i class="fa fa-lg fa-home"></i></a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- Header -->
            <div id="logo" class="fl_left">
                <h1><a href="home">WindCool</a></h1>
            </div>
            <div id="quickinfo" class="fl_right">
                <ul class="nospace inline">
                    <li><strong>Praesent:</strong><br>
                        +00 (123) 456 7890</li>
                    <li><strong>Faucibus:</strong><br>
                        +00 (123) 456 7890</li>
                </ul>
            </div>
            <!-- End header -->
        </header>
        <nav id="mainav" class="hoc clear">
            <!-- Menu -->
            <ul class="clear">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a class="drop" href="#">Pages</a>
                    <ul>
                        <li><a href="pages/gallery.html">Gallery</a></li>
                        <li><a href="pages/full-width.html">Full Width</a></li>
                        <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                        <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                        <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                    </ul>
                </li>
                <li><a class="drop" href="{{url('product')}}">Shopping</a>
                    <ul>
                        <li><a href="#">Level 2</a></li>
                        <li><a class="drop" href="#">Level 2 + Drop</a>
                            <ul>
                                <li><a href="#">Level 3</a></li>
                                <li><a href="#">Level 3</a></li>
                                <li><a href="#">Level 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Level 2</a></li>
                    </ul>
                </li>
                <li><a href="#">Link Text</a></li>
                <li><a href="#">Link Text</a></li>
                <li><a href="#">Link Text</a></li>
                <li><a href="#">Long Link Text</a></li>
            </ul>
            <!-- End menu -->
        </nav>
    </div>
    {{--<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">--}}
        {{--<div id="pageintro" class="hoc clear">--}}
            {{--<!-- SlideBar -->--}}
            {{--<article>--}}
                {{--<p>Pulvinar arcu praesent</p>--}}
                {{--<h3 class="heading">Pharetra fusce volutpat</h3>--}}
                {{--<p>Diam libero interdum at fringilla id interdum eu ante in ornare nisi vitae massa etiam eget lacus sit amet eros tempus elementum phasellus nisi dui condimentum vel imperdiet et adipiscing vitae ut tellus sit amet erat elementum.</p>--}}
                {{--<footer>--}}
                    {{--<ul class="nospace inline pushright">--}}
                        {{--<li><a class="btn" href="#">Aenean venenatis</a></li>--}}
                        {{--<li><a class="btn inverse" href="#">Tincidunt mauris</a></li>--}}
                    {{--</ul>--}}
                {{--</footer>--}}
            {{--</article>--}}
            {{--<!-- End SlideBar-->--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="wrapper row2">
        {{--Main--}}
        @yield('content')
        {{--End Main--}}
    </div>
    <div class="wrapper row4 bgded overlay" style="background-image:url('http://localhost/BT/DMDatabase/public/uploads/a.jpg');">
        <footer id="footer" class="hoc clear">
            <!-- Footer -->
            <div class="one_third first">
                <h6 class="heading">Facilisis neque vestibulum</h6>
                <ul class="nospace btmspace-30 linklist contact">
                    <li><i class="fa fa-map-marker"></i>
                        <address>
                            Street Name &amp; Number, Town, Postcode/Zip
                        </address>
                    </li>
                    <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                    <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
                    <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
                </ul>
            </div>
            <div class="one_third">
                <h6 class="heading">Auctor egestas quisque</h6>
                <p class="nospace btmspace-30">Ut ipsum quisque luctus aliquam accumsan sapien quis magna etiam quis.</p>
                <form method="post" action="#">
                    <fieldset>
                        <legend>Newsletter:</legend>
                        <input class="btmspace-15" type="text" value="" placeholder="Name">
                        <input class="btmspace-15" type="text" value="" placeholder="Email">
                        <button type="submit" value="submit">Submit</button>
                    </fieldset>
                </form>
            </div>
            <div class="one_third">
                <h6 class="heading">Tempor orci vestibulum</h6>
                <figure><a href="#"><img class="borderedbox inspace-10 btmspace-15" src="images/demo/320x168.png" alt=""></a>
                    <figcaption>
                        <h6 class="nospace font-x1"><a href="#">Neque convallis pretium</a></h6>
                        <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                    </figcaption>
                </figure>
            </div>
            <!-- End Footer -->
        </footer>
    </div>
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">Copyright &copy; 2017 - All Rights Wind - Đời là bể khổ, qua được bể khổ là qua đời !</p>
            <p class="fl_right">Template by Bò Bò </p>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/jquery.backtotop.js')}}"></script>
    <script src="{{url('js/jquery.mobilemenu.js')}}"></script>
</body>
</html>
