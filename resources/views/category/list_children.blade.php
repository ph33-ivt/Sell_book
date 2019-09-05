@extends('admin.dashboard')
@section('db_content')
<h1>List Children Category</h1>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
		
		</tr>
	</thead>
	<tbody>
		@foreach($children as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			
		</tr>
		@endforeach
	</tbody>
</table>
<button><a href="{{route('admin.listCate')}}">Go back</a></button>
@endsection