@extends('layouts.master')
@section('content')
	<h1>List Category</h1>
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
				<td><a href="{{route('admin.editCategory',$category['id'])}}">Edit</a></td>
				<td><a href="{{route('admin.deleteCategory',$category['id'])}}">Delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
