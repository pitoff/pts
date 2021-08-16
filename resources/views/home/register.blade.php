@extends('layouts.main')

@section('pageContent')

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Create an account</h3>
						<form class="row login_form" action="{{route('home.register')}}" method="POST" id="contactForm" novalidate="novalidate">
                            @csrf
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
                                @error('name')
                                    <span class="invalid text-danger">
                                       <em>{{ $message }}</em>*
                                    </span>

                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
								<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                @error('email')
                                    <span class="invalid text-danger">
                                       <em>{{ $message }}</em>*
                                    </span>

                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" name="phonenumber" value="{{old('phonenumber')}}" placeholder="Phone-Line" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone-Line'">
                                @error('phonenumber')
                                    <span class="invalid text-danger">
                                        <em>{{$message}}</em>
                                    </span>
                                @enderror
                            </div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
                                @error('password')
                                    <span class="invalid text-danger">
                                       <em>{{ $message }}</em>*
                                    </span>

                                @enderror
                            <div class="col-md-12 form-group">
								<input type="password" class="form-control" name="password_confirmation" placeholder="confirmPassword" onfocus="this.placeholder = ''" onblur="this.placeholder = 'confirmPassword'">
                            </div>
		
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Create account</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->


@endsection