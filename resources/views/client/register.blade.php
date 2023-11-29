@extends('client.master')
@section('content')
<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Register Now</h3>
			<div class="inner-sec">
				<div class="login p-5 bg-dark mx-auto mw-100">
					<form action="/register" method="post">
					<!-- @csrf -->
					<input type="hidden" name="_token" value="<?php echo csrf_token()?>">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationCustom01">Username</label>

								<input type="text" class="form-control" name="FullName" value="{{old('FullName')}}" id="validationDefault01" placeholder="" required>
								@if(count($errors) > 0)
								@foreach($errors->get('FullName') as $er)
									<font style="font-size:16px;color:#ff0000;">{{$er}}</font>
								@endforeach
							@endif
							</div>
							
							<div class="col-md-6 mb-3">
								<label for="validationCustom02">E-Mail</label>
								<input type="text" class="form-control" name="email" value="{{old('email')}}" id="validationDefault02" placeholder="" required>
								@if(count($errors) > 0)
								@foreach($errors->get('email') as $er)
									<font style="font-size:16px;color:#ff0000;">{{$er}}</font>
								@endforeach
							@endif
							</div>
							
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="exampleInputPassword1 mb-2">Password</label>
								<input type="password" class="form-control" name="Password" id="password1" placeholder="" required="">
								@if(count($errors) > 0)
								@foreach($errors->get('Password') as $er)
									<font style="font-size:16px;color:#ff0000;">{{$er}}</font>
								@endforeach
							@endif
							</div>
							
							<div class="form-group col-md-6">
								<label for="exampleInputPassword2 mb-2">Confirm Password</label>
								<input type="password" class="form-control" id="password2" name="Password_confirmation" placeholder="" required>
							</div>

						</div>
						<button type="submit" class="btn btn-primary submit mb-4">Register</button>
						<p>
							<a href="#">By clicking Register, I agree to your terms</a>
						</p>
					</form>

				</div>
			</div>
		</div>
	</section>
	@endsection
	<!--//main-->