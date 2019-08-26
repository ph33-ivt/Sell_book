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
			</tr>
		</thead>
		<tbody>
			@foreach($listCate as $category)
			<tr>
				<td>{{$category->id}}</td>
				<td>{{$category->name}}</td>
				<td>{{$category->parent_id}}</td>
				<td>{{$category->created_at}}</td>
				<td>{{$category->updated_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection