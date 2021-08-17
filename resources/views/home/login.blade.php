@extends('layouts.main')

@section('pageContent')

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
							<div class="errMsg text-danger">{{session('message')}}</div>
						<form class="row login_form" action="{{route('login')}}" method="POST" id="contactForm" novalidate="novalidate">
                            @csrf
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
								@error('email')
									<span class="invalid text-danger">
										<em>{{ $message }}</em>
									</span>
								@enderror
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
								@error('password')
									<span class="invalid text-danger">
										<em>{{ $message }}</em>
									</span>
								@enderror
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->


@endsection