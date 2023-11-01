    <!-- Footer Section Begin -->
    <footer class="footer {{ $page != 'home'?'footer--normal':' ' }} spad set-bg" data-setbg="{{ asset('frontend/img/footer-bg.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6><a href="tel:{{ $detail->mobile_no }}">{{ $detail->mobile_no }}</a></h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6><a href="mailto:{{ $detail->email_id }}">contactbiblemusic</a></h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2 class="pt-5"><a href="index.php">Bible Music</a></h2>
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
    
    <!---------Stellarnav JS--------->
    
    <script src="{{ asset('frontend/js/stellarnav.js') }}"></script>
    <script src="{{ asset('frontend/js/stellarnav.min.js') }}"></script>

    <!-- Music Plugin -->
    <script src="{{ asset('frontend/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jplayerInit.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
          jQuery('.stellarnav').stellarNav({
            theme: 'dark',
            breakpoint: 960,
            position: 'right',
          });
        });
    </script>

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
    
  <!----------Sticky----------->    
    
    <script>
    	$(window).scroll(function() {
    if ($(this).scrollTop() > 54){
        $('.header').addClass("sticky");
      }
      else{
        $('.header').removeClass("sticky");
      }
    });
    </script>
   
</body>

</html>