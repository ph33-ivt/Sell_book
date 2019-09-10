@extends('admin.dashboard')
@section('db_content')

	<h1>Product Description</h1>

	<div style="position: relative;float: center;">
		<table style="width:50%" class="table table-bordered table-hover">
			<tr>
				<td>ID</td>
				<td>{{$product['id']}}</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>{{$product['name']}}</td>
			</tr>
			<tr>
				<td>Description</td>
				<td>{{$product['description']}}</td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td>{{$product['quantity']}}</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>{{$product['status']}}</td>
			</tr>
		</table>
	</div>
	<div style="position: relative;float: right; width: 50%">
			{{$product['product_image']}}
	</div>
	<button class="btn btn-link"><a href="{{route('admin.listProduct')}}">Back</a></button>
@endsection




