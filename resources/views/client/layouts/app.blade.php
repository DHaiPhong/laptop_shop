
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Frica</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('client/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('client/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('client/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('client/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('client/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- header section start -->
<div class="header_section haeder_main">
    <div class="container-fluid">
        <nav class="navbar navbar-light bg-light justify-content-between">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.html">Home</a>
                <a href="computers.html">Computers</a>
                <a href="mans_clothes.html">Mans Clothes</a>
                <a href="womans_clothes.html">Womans Clothes</a>
                <a href="contact.html">Contact</a>
            </div>
            <span style="font-size:30px;cursor:pointer; color: #fff;" onclick="openNav()"><img src="images/toggle-icon.png"></span>
            <a class="navbar-brand" href="index.html"><img src="images/logo.png"></a></a>
            <form class="form-inline ">
                <div class="login_text">
                    <ul>
                        <li><a href="#"><img src="images/user-icon.png"></a></li>
                        <li><a href="#"><img src="images/trolly-icon.png"></a></li>
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                    </ul>
                </div>
            </form>
        </nav>
    </div>
</div>
<!-- header section end -->
<!-- banner section start -->
<div class="banner_section layout_padding">
    <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row border_1">
                        <div class="col-md-4">
                            <div class="image_1"><img src="images/img-1.png" style="width:100%"></div>
                        </div>
                        <div class="col-md-4">
                            <h1 class="banner_taital">Big Sale Offer</h1>
                            <div class="buynow_bt active"><a href="#">Buy Now</a></div>
                            <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                        <div class="col-md-4">
                            <div class="image_2"><img src="images/img-2.png" style="width:100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row border_1">
                        <div class="col-md-4">
                            <div class="image_1"><img src="images/img-1.png" style="width:100%"></div>
                        </div>
                        <div class="col-md-4">
                            <h1 class="banner_taital">Big Sale Offer</h1>
                            <div class="buynow_bt active"><a href="#">Buy Now</a></div>
                            <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                        <div class="col-md-4">
                            <div class="image_2"><img src="images/img-2.png" style="width:100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row border_1">
                        <div class="col-md-4">
                            <div class="image_1"><img src="images/img-1.png" style="width:100%"></div>
                        </div>
                        <div class="col-md-4">
                            <h1 class="banner_taital">Big Sale Offer</h1>
                            <div class="buynow_bt active"><a href="#">Buy Now</a></div>
                            <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                        </div>
                        <div class="col-md-4">
                            <div class="image_2"><img src="images/img-2.png" style="width:100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>
<!-- banner section end -->
<!-- catagary section start -->
<div class="catagary_section layout_padding">
    <div class="container">
        <div class="catagary_main">
            <div class="catagary_left">
                <h2 class="categary_text">Categary</h2>
            </div>
            <div class="catagary_right">
                <div class="catagary_menu">
                    <ul>
                        <li><a href="#">Man's Fashion</a></li>
                        <li><a href="#">Woman Fashion</a></li>
                        <li><a href="#">Beauty</a></li>
                        <li><a href="#">Mobiles</a></li>
                        <li><a href="#">Computers</a></li>
                        <li><a href="#">Watchs</a></li>
                        <li><a href="#">Kicthen</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="catagary_section_2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="box_man">
                    <h3 class="mobile_text">Mobile</h3>
                    <div class="mobile_img"><img src="images/mobile-img.png"></div>
                    <div class="cart_main">
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                        <h4 class="samsung_text">Samsung</h4>
                        <h6 class="rate_text"><a href="#">$500</a></h6>
                        <h6 class="rate_text_1">$1000</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_man">
                    <h3 class="mobile_text">Watch</h3>
                    <div class="watch_img"><img src="images/watch-img.png"></div>
                    <div class="cart_main">
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                        <h4 class="samsung_text">Samsung</h4>
                        <h6 class="rate_text"><a href="#">$500</a></h6>
                        <h6 class="rate_text_1">$1000</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_man">
                    <h3 class="mobile_text">Camera</h3>
                    <div class="camera_img"><img src="images/camera-img.png"></div>
                    <div class="cart_main">
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                        <h4 class="samsung_text">Samsung</h4>
                        <h6 class="rate_text"><a href="#">$500</a></h6>
                        <h6 class="rate_text_1">$1000</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- catagary section end -->
<!-- computers section start -->
<div class="computers_section layout_padding">
    <div class="container">
        <h1 class="computers_taital">Computers & Laptop</h1>
    </div>
</div>
<div class="computers_section_2">
    <div class="container-fluid">
        <div class="computer_main">
            <div class="row">
                <div class="col-md-4">
                    <div class="computer_img"><img src="images/computer-img.png"></div>
                    <h4 class="computer_text">COMPUTER</h4>
                    <div class="computer_text_main">
                        <h4 class="dell_text">Samsung</h4>
                        <h6 class="price_text"><a href="#">$500</a></h6>
                        <h6 class="price_text_1"><a href="#">$1000</a></h6>
                    </div>
                    <div class="cart_bt_1"><a href="#">Add To Cart</a></div>
                </div>
                <div class="col-md-4">
                    <div class="computer_img"><img src="images/laptop-img.png"></div>
                    <h4 class="computer_text">LAPTOP</h4>
                    <div class="computer_text_main">
                        <h4 class="dell_text">Dell</h4>
                        <h6 class="price_text"><a href="#">$500</a></h6>
                        <h6 class="price_text_1"><a href="#">$1000</a></h6>
                    </div>
                    <div class="cart_bt_1"><a href="#">Add To Cart</a></div>
                </div>
                <div class="col-md-4">
                    <div class="computer_img"><img src="images/mac-img.png"></div>
                    <h4 class="computer_text">macOS</h4>
                    <div class="computer_text_main">
                        <h4 class="dell_text">Apple</h4>
                        <h6 class="price_text"><a href="#">$500</a></h6>
                        <h6 class="price_text_1"><a href="#">$1000</a></h6>
                    </div>
                    <div class="cart_bt_1"><a href="#">Add To Cart</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- computers section end -->
<!-- mans clothes section start -->
<div class="mans_section layout_padding">
    <div class="container">
        <h1 class="computers_taital">Man’s clothes</h1>
    </div>
</div>
<div class="mans_section_2">
    <div class="container-fluid">
        <div class="mans_main">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="offer_text">Best  Offer Every Man’s Iteams</h1>
                    <p class="lorem_text">There are many variations of passages of Lorem Ipsum available,but the majority have</p>
                    <div class="read_bt"><a href="#">Buy Now</a></div>
                </div>
                <div class="col-md-6">
                    <div class="image_3"><img src="images/img-3.png"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mans clothes section end -->
<!-- womans clothes section start -->
<div class="computers_section layout_padding">
    <div class="container">
        <h1 class="womans_taital">woman’s clothes</h1>
        <div class="womans_section_2">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="Get_offer_text">Get <br>offer Every Iteams</h1>
                    <div class="read_bt"><a href="#">Buy Now</a></div>
                </div>
                <div class="col-md-6">
                    <div class="image_4"><img src="images/img-4.png"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- womans clothes section end -->
<!-- footer section start -->
<div class="footer_section layout_padding margin_top_90">
    <div class="container">
        <div class="footer_logo_main">
            <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
            <div class="social_icon">
                <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    <li><a href="#"><img src="images/youtub-icon.png"></a></li>
                </ul>
            </div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <h4 class="adderss_text">About</h4>
                    <p class="ipsum_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4 class="adderss_text">Menu</h4>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="computers.html">Computers</a></li>
                            <li><a href="Mans_clothes.html">Mans Clothes</a></li>
                            <li><a href="womans_clothes.html">Womans Clothes</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4 class="adderss_text">Useful Link</h4>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#">Adipiscing</a></li>
                            <li><a href="#">Elit, sed do</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">incididunt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4 class="adderss_text">Contact</h4>
                    <div class="call_text"><img src="images/map-icon.png"><span class="paddlin_left_0"><a href="#">London 145 United Kingdom</a></span></div>
                    <div class="call_text"><img src="images/call-icon.png"><span class="paddlin_left_0"><a href="#">+7586656566</a></span></div>
                    <div class="call_text"><img src="images/mail-icon.png"><span class="paddlin_left_0"><a href="#">volim@gmail.com</a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="{{asset('client/js/jquery.min.js')}}"></script>
<script src="{{asset('client/js/popper.min.js')}}"></script>
<script src="{{asset('client/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('client/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('client/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('client/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('client/js/custom.js')}}"></script>
<!-- javascript -->
<script src="{{asset('client/js/owl.carousel.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>
