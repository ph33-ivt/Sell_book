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

	<h1>List Category</h1>
	<button><a href="{{route('admin.createCate')}}"><i class="far fa-plus-square"></i></a></button>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Parent_id</td>
				<td>Created_at</td>
				<td>Updated_at</td>
				<td colspan="2">Action</td>
				
			</tr>
		</thead>
		<tbody>
			@foreach($listCategory as $category)
			<tr>
				<td>{{$category['id']}}</td>
				<td><a href="{{route('admin.list-children',$category['id'])}}">{{$category['name']}}</a></td>
				<td>{{$category['parent_id']}}</td>
				<td>{{$category['created_at']}}</td>
				<td>{{$category['updated_at']}}</td>
				<td><a href="{{route('admin.editCategory',$category['id'])}}"><i class="fas fa-edit"></i>Edit</a></td>
				<td><a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</a></td>
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
					<a class="btn btn-primary" href="{{route('admin.deleteCategory',$category['id'])}}">Confirm</a>
				</div>
			</div>
		</div>
	</div>
@endsection
