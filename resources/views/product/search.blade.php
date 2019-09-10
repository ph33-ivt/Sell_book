@extends('admin.dashboard')
@section('db_content')

<h1>Search result</h1>
<table class="table table-hover" >
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Price</td>
			<td>Image</td>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->name}}</td>
			<td>{{$product->price}}</td>
			<td >{{asset($product->product_image)}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
	
	
		
<button class="btn btn-link"><a href="{{route('admin.listProduct')}}">Back</a></button>
@endsection
