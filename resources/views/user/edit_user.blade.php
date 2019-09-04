@extends('admin.dashboard')
@section('form_edit_user')
<h1>Edit user</h1>
<form action="{{route('admin.updateUser',$user->id)}}" method="POST">
	@csrf
	@method('PUT')
	<label for="">Name</label>
	<input type="text" name="name" value="{{$user->name}}">
	<label for="">Address</label>
	<input type="text" name="address" value="{{$user->address}}">
	<label for="">Tel</label>
	<input type="text" name="tel" value="{{$user->tel}}">
	<label for="">Email</label>
	<input type="text" name="email" value="{{$user->email}}">
	<button type="submit">Submit</button>
</form>
@endsection