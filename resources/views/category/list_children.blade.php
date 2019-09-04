@extends('admin.dashboard')
@section('list_children')
<h1>List Children Category</h1>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Created At</td>
			<td>Updated At</td>
		</tr>
	</thead>
	<tbody>
		@foreach($children as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			<td>{{$category->created_at}}</td>
			<td>{{$category->updated_at}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<button><a href="{{route('admin.listCate')}}">Go back</a></button>
@endsection