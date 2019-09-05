@extends('admin.dashboard')
@section('db_content')
	<h1>Edit category {{$category->name}}</h1>
	<form action="{{route('admin.updateCategory',$category->id)}}" method="POST">
		@csrf
		@method('PUT')
		<label for="">Name</label>
		<input type="text" name="name" value="{{$category->name}}">
		<label for="">Parent id</label>
		<input type="text" name="parent_id" value="{{$category->parent_id}}">
		<button type="submit">Update category</button>
	</form>

@endsection