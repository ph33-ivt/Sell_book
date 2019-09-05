@extends('admin.dashboard')
@section('db_content')

	@if(session('success'))
	<p role="alert" style="color: red;display: true;">
		{{session('success')}}
	</p>
@else
	<p role="alert" style="color: red;display: true;">
		{{session('fail')}}
	</p>
@endif
      
     <h1>List product</h1>
     	<button><a href="{{route('admin.createProduct')}}"><i class="far fa-plus-square"></i></a></button>
			<table>
				<thead>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Image</td>
						<td>Category ID</td>
						<td colspan="2">Action</td>
					</tr>
				</thead>
				<tbody>
					@foreach($listProduct as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->category['name']}}</td>
						<td>{{$product->price}}</td>
						<td>{{$product->quantity}}</td>
						<td>{{$product->product_image}}</td>
						<td>{{$product->category['parent_id']}}</td>
						<td><a href="{{route('admin.detailProduct',$product->id)}}"><i class="fas fa-info-circle"></i></a></td>
						<td><a href="{{route('admin.editProduct',$product->id)}}"><i class="fas fa-edit"></i></a></td>
						<td><a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Confirm to delete?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				</div>
			<div class="modal-body">Select "Confirm" below if you are ready to delete.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="{{route('admin.deleteProduct',$product->id)}}">Confirm</a>
				</div>
			</div>
		</div>
	</div>
@endsection

	