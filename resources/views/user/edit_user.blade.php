@extends('admin.dashboard')
@section('db_content')
<h1>Edit user</h1>
<form action="{{route('admin.updateUser',$user['id'])}}" method="POST">
	@csrf
	@method('PUT')
	
	<label for="name">Name</label>
	@if($errors->has('name'))
	<input type="text" name="name" value="{{old('name')}}">

		<p role="alert" style="color: red;">
			{{$errors->first('name')}}
		</p>
	@else
	<input type="text" name="name" value="{{ $user->name}}">
	@endif
	<label for="">Address</label>
	
	@if($errors->has('address'))
	<input type="text" name="address" value="{{ old('address')}}">
		<p role="alert" style="color: red;">
			{{$errors->first('address')}}
		</p>
	@else
	<input type="text" name="address" value="{{$user->address}}">
	@endif
	<label for="">Tel</label>
	
	@if($errors->has('tel'))
	<input type="text" name="tel" value="{{old('tel')}}">
		<p role="alert" style="color: red;">
			{{$errors->first('tel')}}
		</p>
	@else
	<input type="text" name="tel" value="{{$user->tel}}">
	@endif
	
	
	<button type="submit">Submit</button>
</form>
@endsection