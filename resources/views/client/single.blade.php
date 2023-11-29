@include('client.layout.head')
<body>
	<!--/banner-->
	<header>
		<div class="top-bar_sub container-fluid">
			<div class="row">
				<div class="col-md-4 top-forms text-left mt-4"  data-aos="fade-up">
					<span>Welcome Back!</span>
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="/login">
							<i class="fas fa-lock"></i> Sign In</a>
					</span>
					<span>
						<a href="/register">
							<i class="far fa-user"></i> Register</a>
					</span>
				</div>
				<div class="col-md-4 logo text-center" data-aos="fade-up">
					<a class="navbar-brand" href="/">
						<i class="fab fa-gitkraken"></i> Baked</a>
				</div>

        <div class="col-md-4 log-icons text-right"  data-aos="fade-up">

            <ul class="social_list1 mt-4">

                <li>
                    <a href="#" class="facebook1 mx-2">
                        <i class="fab fa-facebook-f"></i>

                    </a>
                </li>
                <li>
                    <a href="#" class="twitter2">
                        <i class="fab fa-twitter"></i>

                    </a>
                </li>
                <li>
                    <a href="#" class="dribble3 mx-2">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="pin">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </li>
            </ul>
        </div>
			</div>
		</div>
	</header>

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<!--//banner-->
<body>
    <!--/nav-->
@include('client.layout.menu')
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="/">Home</a>
		</li>
		<li class="breadcrumb-item active">Product Details</li>
	</ol>
	<!--/main-->
	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">{{ $res[0]->p_nm}}</h3>
			<div class="row inner-sec">
				<!--left-->
				<div class="col-lg-8 left-blog-info text-left">
					<form action="/insertcart" method="post">
					<!-- @csrf -->
					<input type="hidden" name="_token" value="<?php echo csrf_token()?>">
					<div class="blog-grid-top">
						<div class="blog_info_left_grid mb-4" style="float:left;">
							<img src="{{asset('upload/'.$res[0]->p_img)}}" class="img-fluid" alt="" width="300" height="400">
						</div>
						<h3 style="margin:0px 0px 0px 350px;" class="pt-lg-3 pl-lg-2">₹{{ $res[0]->p_price }}</h3>
						<p class="para my-4" style="margin:0px 0px 0px 350px;">{{ $res[0]->p_desc }}</p>
					@if(Session::has('clientstatus'))
						<div style="margin: 0px 0px 0px 350px;">
						<h5>Quality :</h5>
						<br>
						<select id="country1" onchange="change_country(this.value)" class="frm-field required sect" name="qty" style="padding:5px;">
							<option value="1">1 Qty</option>
							<option value="2">2 Qty</option>
							<option value="3">3 Qty</option>
							<option value="4">4 Qty</option>
							<option value="5">5 Qty</option>
						</select>
					</div>
					<br><br>
					</div>
					<input type="hidden" name="username" value="{{Session::get('client_name')}}">
					<input type="hidden" name="product_nm" value="{{$res[0]->p_nm}}">
					<input type="hidden" name="product_price" value="{{$res[0]->p_price}}">
					<input type="hidden" name="product_img" value="{{$res[0]->p_img}}">
					<input type="submit" value="Add to cart" class="mybtn">
					@else
              <td></td>
          @endif
			</div>
		</form>
		</div>
	</section>
	<!--//main-->
@include('client.layout.footer')
	<!-- js -->
	<script src="{{ asset ('js/jquery-2.2.3.min.js') }}"></script>
	<!-- //js -->
	<!-- /js files -->
	<link href="{{ asset ('css/aos.css') }}" rel='stylesheet prefetch' type="text/css" media="all" />
	<link href="{{ asset ('css/aos-animation.css') }}" rel='stylesheet prefetch' type="text/css" media="all" />
	<script src="{{ asset ('js/aos.js') }}"></script>
	<script src="{{ asset ('js/aosindex.js') }}"></script>
	<!-- //js files -->
	<!--/ start-smoth-scrolling -->
	<script src="{{ asset ('js/move-top.js') }}"></script>
	<script src="{{ asset ('js/easing.js') }}"></script>
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
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear'
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="{{ ('js/bootstrap.js') }}"></script>


</body>

</html>
