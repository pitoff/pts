@extends('layouts.main')

@section('pageContent')

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Add New clothing</h3>
						<form class="row login_form" action="" method="POST" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
								<input type="file" class="form-control" name="cloth" value="{{old('cloth')}}" placeholder="Cloth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cloth'"></br>
                                @error('cloth')
                                    <span class="invalid text-danger">
                                       <em>{{ $message }}</em>*
                                    </span>

                                @enderror
                            </div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
                                @error('name')
                                    <span class="invalid text-danger">
                                       <em>{{ $message }}</em>*
                                    </span>

                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
								<textarea name="description" class="form-control" cols="30" rows="5" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'">{{old('description')}}</textarea>
                                @error('description')
                                    <span class="invalid text-danger">
                                       <em>{{ $message }}</em>*
                                    </span>

                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
								<input type="number" class="form-control" name="amount" value="{{old('amount')}}" placeholder="Amount" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Amount'">
                                @error('amount')
                                    <span class="invalid text-danger">
                                       <em>{{ $message }}</em>*
                                    </span>

                                @enderror
                            </div>
                
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Add cloth</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->


@endsection