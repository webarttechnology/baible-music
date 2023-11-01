<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Template">
    <meta name="keywords" content=" unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scripture</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/nowfont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/rockville.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <h2><a href="index.php">Scripture Songs</a></h2>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="#">BIBLE SCRIPTURE SONGS - MUSIC</a></li>
                                <li><a href="{{ route('christian.music.free') }}">CHRISTIAN MUSIC - FREE</a></li>
                                <li><a href="#">BENEFITS</a></li>
                                <li><a href="#">BIBLE STUDY</a></li>
                                <li><a href="#">LINKS</a></li>
                                <li><a href="contact.php">CONTACT</a></li>
                            </ul>
                        </nav>
                        <!-- <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

<section class="thankyousec py-5">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="thnkbx text-center cancelprt">
                   <div class="thnkimg">
                       <img src="images/email.png" alt="">
                   </div>
                   <h1>Payment Failed</h1>
                   <p>Your order was declined. Money was not taken from your account, please follow the link to update your payment method and re-order your purchase
                   <div class="btnprt">
                       <a href="{{ url('/') }}" class="cmnbtn">Back to Site</a>
                   </div>
               </div>
           </div>   
        </div>
    </div>
</section>



    <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="{{ asset('frontend/img/footer-bg.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6><a href="tel:403-789-2000">403-789-2000</a></h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6><a href="mailto:RonatScriptureSongsdotcom">RonatScriptureSongsdotcom</a></h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2 class="pt-5"><a href="index.php">Scripture Songs</a></h2>
                        <!-- <div class="footer__social__links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Stay With me</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<div class="footer__copyright__text">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
			</div>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <!-- Music Plugin -->
    <script src="{{ asset('frontend/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jplayerInit.js') }}"></script>



    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('#tstimnl_Slider').slick({
            dots: true,
            infinite: true,
            arrows: true,
            speed: 500,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            adaptiveHeight: true
        });
    </script>
</body>

</html>
