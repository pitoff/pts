@extends('layouts.main')

@section('pageContent')

<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>clothing categories</h1>
					<nav class="d-flex align-items-center">
						<a href="{{route('admin.dashboard')}}">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Categories</a>
					</nav>
				</div>
			</div>
		</div>
	</section>

    <div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-xl-8 col-lg-12 col-md-12">
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
                    <div class="table-responsive text-center">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Category</td>
                                    <td>Clothings</td>
                                    <td colspan="3">Actions</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($categories as $key => $category)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$category->category}}</td>
                                    <td>(53)</td>
                                    <td><a href="{{route('admin.showCategory', $category->id)}}"><button class="pull-right genric-btn info"><span class="ti-eye"></span></button></a></td>
                                    <td><a href="{{route('admin.editCategory', $category->id)}}"><button class="pull-right genric-btn primary">Edit</button></a></td>
                                    <td>
                                        <form action="{{route('admin.delCategory', $category->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="pull-right genric-btn danger">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Product Filters</div>
					<div class="common-filter">
						<div class="head">Brands</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Color</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
										Leather<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
										with red<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
		</div>
	</div>

@endsection