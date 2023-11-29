@extends('client.master')
@section('content')
<section class="banner-bottom">

		<h3 class="tittle">Contact Us</h3>
		<p class="sub text-center">We love to discuss your idea</p>
		<div class="ad-inf-sec">
			<div class="container">
				<div class="address row">

					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Address</h6>
								<p> Junagadh</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Email</h6>
								<a href="mailto:contact@chocolateshop.com"> contact@chocolateshop.com</a>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid" data-aos="zoom-in">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Phone</h6>
								<a href="tel:+919876543210">+91 9876543210</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="contact_grid_right">
				<form action="/contactus" method="post">
					<!-- @csrf -->
					<input type="hidden" name="_token" value="<?php echo csrf_token()?>">
					<div class="row contact_left_grid">
						<div class="col-md-6 con-left">
							<div class="form-group" data-aos="fade-down"></br></br>
								<label for="validationCustom01 my-2">Name</label>
								<input class="form-control" type="text" name="FullName" value="{{old('FullName')}}" placeholder="" required="">
							</div>
							@if(count($errors) > 0)
								@foreach($errors->get('FullName') as $er)
									<font style="font-size:16px;color:#ff0000;">{{$er}}</font>
								@endforeach
							@endif
							<div class="form-group" data-aos="fade-down">
								<label for="exampleFormControlInput1">Email</label>
								<input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="" required="">
							</div>

							@if(count($errors) > 0)
								@foreach($errors->get('email') as $er)
									<font style="font-size:16px;color:#ff0000;">{{$er}}</font>
								@endforeach
							@endif
							<div class="form-group" data-aos="fade-down">
								<label for="validationCustom03 my-2">Subject</label>
								<input class="form-control" type="text" name="subject" value="{{old('subject')}}" placeholder="" required="">
							</div>
							@if(count($errors) > 0)
								@foreach($errors->get('subject') as $er)
									<font style="font-size:16px;color:#ff0000;">{{$er}}</font>
								@endforeach
							@endif
						</div>
						<div class="col-md-6 con-right">
							<div class="form-group" data-aos="fade-down"></br></br>
								<label for="textarea">Message</label></br>
								<textarea id="textarea" placeholder="" name="Message" value="{{old('Message')}}" style="height:150px;width:538px;"></textarea>
							</div>
							@if(count($errors) > 0)
								@foreach($errors->get('Message') as $er)
									<font style="font-size:16px;color:#ff0000;">{{$er}}</font>
								@endforeach
							@endif
							<input class="form-control" type="submit" value="Submit">

						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
		@endsection
	<!--//main-->
