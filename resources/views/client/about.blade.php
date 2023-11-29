@extends('client.master')
@section('content')
<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Our History</h3>
			<div class="row inner-sec">
				<div class="col-lg-6 about-img" data-aos="flip-right">
					<img src="{{asset('images/ab.jpg')}}" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 about-info text-left" data-aos="flip-left" >
					<h4 class="sub-hd mb-4">We are the Best </h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
						aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
						aute irudre dolor in elit sed uta labore dolore reprehender</p>
					<p class="sup-para mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
						aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
						aute irudre dolor in elit sed uta labore dolore reprehender</p>
					
					<img src="{{asset('images/banner3.jpg')}}" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section>
	@endsection
	<!--/seller-->