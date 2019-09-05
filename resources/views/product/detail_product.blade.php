@extends('admin.dashboard')
@section('db_content')
	<h1>Product Description</h1>
	<div style="position: relative;float: left;">
		<table>
			<thead>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Description</td>
					<td>Quantity</td>
					<td>Status</td>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<td>{{$product['id']}}</td>
					<td>{{$product['name']}}</td>
					<td>{{$product['description']}}</td>
					<td>{{$product['quantity']}}</td>
					
					<td>{{$product['status']}}</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	<div style="position: relative;float: right;">
			{{$product['product_image']}}
	</div>
@endsection