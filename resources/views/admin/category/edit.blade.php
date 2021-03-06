@extends('layouts.main')

@section('pageContent')

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Edit clothing category</h3>
							<div class="successMsg text-success">{{session('message')}}</div>
						<form class="row login_form" action="{{route('admin.updateCategory', $category->id)}}" method="POST" id="contactForm" novalidate="novalidate">
                            @csrf
                            @method('PUT')
							<div class="col-md-12 form-group">
								<input type="category" class="form-control" name="category" value="{{ $category->category }}" placeholder="Category" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Category'">
								@error('category')
									<span class="invalid text-danger">
										<em>{{ $message }}</em>
									</span>
								@enderror
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->


@endsection