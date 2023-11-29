@extends('client.master')
@section('content')

	<section class="banner-bottom">
		<div class="container">
			<h3 class="tittle">Sign In Now</h3>
			<div class="row inner-sec">
				<div class="login p-5 bg-dark mx-auto mw-100">
					<form action="/login" method="post">
					<!-- @csrf -->
					<input type="hidden" name="_token" value="<?php echo csrf_token()?>">
						<div class="form-group">
							<label for="exampleInputEmail1 mb-2">User Name</label>
							<input type="text" class="form-control" name= "UserName" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						@if(count($errors) > 0)
								@foreach($errors->get('UserName') as $er)
									<font style="font-size:16px;color:#ff0000;">{{$er}}</font>
								@endforeach
							@endif
						<div class="form-group">
							<label for="exampleInputPassword1 mb-2">Password</label>
							<input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="" required>
						</div>
						@if(count($errors) > 0)
								@foreach($errors->get('Password') as $er)
									<font style="font-size:16px;color:#ff0000;">{{$er}}</font>
								@endforeach
							@endif
						<div class="form-check mb-2">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
						<p>
							<a href="/register"> Don't have an account?</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</section>
	@endsection
	<!--//main-->