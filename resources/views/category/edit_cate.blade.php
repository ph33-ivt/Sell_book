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

	<h1>Edit category {{$category->name}}</h1>
	<form action="{{route('admin.updateCategory',$category->id)}}" method="POST">
		@csrf
		@method('PUT')
		<label for="">Name</label>
		@if($errors->has('name'))
		<input type="text" name="name" value="{{old('name')}}">
			<p role="alert" style="color: red;">
				{{$errors->first('name')}}
			</p>
		@else
		<input type="text" name="name" value="{{ $category->name}}">
		@endif
		<button type="submit">Update category</button>
	</form>

@endsection