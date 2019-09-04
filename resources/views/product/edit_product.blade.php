@extends('admin.dashboard')

@section('form_edit_product')
<h1>Edit Product</h1>
<form action="{{route('admin.updateProduct',$product->id)}}" method="POST">
	@csrf
	@method('PUT')
	<label for="">Name</label>
	<input type="text" name="name" value="{{$product->name}}">
	<label for="">Price</label>
	<input type="text" name="price" value="{{$product->price}}">
	<label for="">Status</label>
	<input type="text" name="status" value="{{$product->status}}">
	<label for="">Quantity</label>
	<input type="text" name="quantity" value="{{$product->quantity}}">
	<label for="">Description</label>
	<input type="text" name="description" value="{{$product->description}}">
	<label for="">Image</label>
	<input type="text" name="image" value="{{$product->image}}">
	<label for="">Category ID</label>
	<select name="category_id" >
		@foreach($listCategory as $category)
		<option value="{{$category->id}}">{{$category->name}}</option>
		@endforeach
	</select>
	<button type="submit">Submit</button>
</form>
@endsection