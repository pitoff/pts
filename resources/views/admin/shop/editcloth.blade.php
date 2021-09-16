@extends('layouts.main')

@section('pageContent')

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="login_form_inner">
                    <h3>Update {{$cloth->name}}</h3>
                    <form class="row login_form" action="{{route('admin.updateClothing', $cloth->id)}}" enctype="multipart/form-data" method="POST" id="contactForm" novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <img class="img-fluid" src="/images/{{$cloth->image}}" alt="">
                        <div class="col-md-12 form-group">
                            <input type="file" class="form-control" name="image" placeholder="Cloth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cloth'"></br>
                            @error('image')
                            <span class="invalid text-danger">
                                <em>{{ $message }}</em>*
                            </span>

                            @enderror
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="name" value="{{ $cloth->name }}" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
                            @error('name')
                            <span class="invalid text-danger">
                                <em>{{ $message }}</em>*
                            </span>

                            @enderror
                        </div>

                        <div class="col-md-12 form-group">
                            <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'">{{$cloth->description}}</textarea>
                            @error('description')
                            <span class="invalid text-danger">
                                <em>{{ $message }}</em>*
                            </span>

                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="number" class="form-control" name="amount" value="{{$cloth->price}}" placeholder="Amount" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Amount'">
                            @error('amount')
                            <span class="invalid text-danger">
                                <em>{{ $message }}</em>*
                            </span>

                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="category">Select all cloth category</label></br>
                            @foreach($categories as $category)
                            <input type="radio" name="categories" value="{{ $category->id }}"> {{$category->category}} </br>
                            @endforeach

                            @error('categories')
                            <span class="invalid text-danger">
                                <em>{{ $message }}</em>*
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