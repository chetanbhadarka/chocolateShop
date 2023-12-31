<script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <!-- //js -->
    <!-- /flexisel -->
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <script src="{{asset('js/jquery.flexisel.js')}}"></script>
    <!-- //flexisel -->
    <!-- flexSlider -->
    <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script>
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>

    <!-- //flexSlider -->

    <!-- simpleLightbox -->
    <script src="{{asset('js/simpleLightbox.js')}}"></script>
    <script>
        $('.proj_gallery_grid a').simpleLightbox();
    </script>
    <!-- //simpleLightbox -->
    <!-- /js files -->
    <link href='{{asset("css/aos.css")}}' rel='stylesheet prefetch' type="text/css" media="all" />
    <link href='{{asset("css/aos-animation.css")}}' rel='stylesheet prefetch' type="text/css" media="all" />
    <script src='{{asset("js/aos.js")}}'></script>
    <script src="{{asset('js/aosindex.js')}}"></script>
    <!-- //js files -->
    <!--/ start-smoth-scrolling -->
    <script src="{{asset('js/move-top.js')}}"></script>
    <script src="{{asset('js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <!--// end-smoth-scrolling -->

    <script>
        $(document).ready(function () {
           

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <a href="#home" class="scroll" id="toTop" style="display: block;">
        <span id="toTopHover" style="opacity: 1;"> </span>
    </a>
    <!-- //Custom-JavaScript-File-Links -->
    <script src="{{asset('js/bootstrap.js')}}"></script>