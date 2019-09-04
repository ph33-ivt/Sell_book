
@extends('admin.dashboard')
@section('form_product')
<h1>Form create product</h1>
<form action="{{route('admin.storeProduct')}}">
	@csrf
	
	<label for="">Name</label>
	<input type="text" name="name">
	<label for="">Price</label>
	<input type="text" name="price">
	<label for="">Status</label>
	<input type="text" name="status">
	<label for="">Quantity</label>
	<input type="text" name="quantity">
	<label for="">Description</label>
	<input type="text" name="description">
	<label for="">Image</label>
	<input type="text" name="image">
	<label for="">Category ID</label>
	<select name="category_id" >
		@foreach($listCategory as $category)
		<option value="{{$category->id}}">{{$category->name}}</option>
		@endforeach
	</select>
	<button type="submit">Submit</button>
</form>
@endsection