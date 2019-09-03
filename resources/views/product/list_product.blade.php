@extends('layouts.master')
@section('content')
	<h1>List product</h1>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Price</td>
				<td>Status</td>
				<td>Quantity</td>
				<td>Description</td>
				<td>Image</td>
				<td>Category ID</td>
				
				
				<td colspan="2">Action</td>
			</tr>
		</thead>
		<tbody>
			@foreach($listProduct as $product)
			<tr>
				<td>{{$product->id}}</td>
				<td>{{$product->category->name}}</td>
				<td>{{$product->price}}</td>
				<td>{{$product->status}}</td>
				<td>{{$product->quantity}}</td>
				<td>{{$product->description}}</td>
				<td>{{$product->image}}</td>
				<td>{{$product->category->parent_id}}</td>
				
				
				<td><a href="{{route('admin.editProduct',$product->id)}}">Edit</a></td>
				<td><a href="{{route('admin.deleteProduct',$product->id)}}">Delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection