@extends('admin.dashboard')
@section('db_content')
<h1>Form create product</h1>
<form action="{{route('admin.storeProduct')}}" method="POST">
	@csrf
	
	<label for="">Name</label>
		@if($errors->has('name'))
		<input type="text" name="name" value="{{old('name')}}">
		<p role="alert" style="color: red;">
				{{$errors->first('name')}}
			</p>
		@else
		<input type="text" name="name" value="{{$product->name}}">
		@endif
	<label for="">Price</label>
		@if($errors->has('price'))
		<input type="text" name="price" value="{{old('price')}}">
		<p role="alert" style="color: red;">
				{{$errors->first('price')}}
			</p>
		@else
		<input type="text" name="price" value="{{$product->price}}">
		@endif
	<label for="">Status</label>
		@if($errors->has('status'))
		<input type="text" name="status" value="{{old('status')}}">
		<p role="alert" style="color: red;">
				{{$errors->first('status')}}
			</p>
		@else
		<input type="text" name="status" value="{{$product->status}}">
		@endif
	<label for="">Quantity</label>
		@if($errors->has('quantity'))
		<input type="text" name="quantity" value="{{old('quantity')}}">
		<p role="alert" style="color: red;">
				{{$errors->first('quantity')}}
			</p>
		@else
		<input type="text" name="quantity" value="{{$product->quantity}}">
		@endif
	<label for="">Description</label>
		@if($errors->has('description'))
		<input type="text" name="description" value="{{old('description')}}">
		<p role="alert" style="color: red;">
				{{$errors->first('description')}}
			</p>
		@else
		<input type="text" name="description" value="{{$product->description}}">
		@endif
	<label for="">Image</label>
	@if($errors->has('product_image'))
	<input type="text" name="product_image" value="{{old('product_image')}}">
	<p role="alert" style="color: red;">
			{{$errors->first('product_image')}}
		</p>
	@else
	<input type="text" name="product_image" value="{{$product->product_image}}">
	@endif
	<label for="">Category ID</label>
	<select name="category_id" >
		@foreach($listCategory as $category)
		<option value="{{$category->id}}">{{$category->name}}</option>
		@endforeach
	</select>
	<button type="submit">Submit</button>
</form>
@endsection