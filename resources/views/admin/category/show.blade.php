@extends('layouts.main')
@section('pageContent')

<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>{{$category->category}}</h1>
					<nav class="d-flex align-items-center">
						<a href="{{route('admin.category')}}">Back to categories<span class="lnr lnr-arrow-left"></span></a>
					</nav>
				</div>
			</div>
		</div>
	</section>

    <div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="sidebar-categories">
					<div class="head">All clothing under {{$category->category}} category</div>

                    <section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						@foreach($cloth as $cloth)
							@if($category->id === $cloth->category_id)
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="/images/{{$cloth->image}}" alt="">
								<div class="product-details">
									<h6>{{$cloth->name}}</h6>		
									<div class="price">
										$<h6>@php echo number_format($cloth->price, 2) @endphp</h6>
										<!-- <h6 class="l-through">$210.00</h6> -->
									</div>
									<div class="prd-bottom">

										<a href="{{ route('admin.editClothing', $cloth->id) }}" class="social-info">
											<span class="ti-arrow-up"></span>
											<p class="hover-text">Update</p>
										</a>
										<a href="{{route('admin.showClothing', $cloth->id)}}" class="social-info">
											<span class="lnr lnr-eye"></span>
											<p class="hover-text">View</p>
										</a>

										<form action="{{route('admin.removeClothing', $cloth->id)}}" method="POST">
											@csrf
											@method('DELETE')
											<button class="btn">
												<span class="lnr lnr-trash text-danger"></span>
												<!-- <p class="hover-text">Remove</p> -->
											</button>
										</form>
										
									</div>
								</div>
							</div>
						</div>
							@endif
						@endforeach
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection