@extends('admin.dashboard')
@section('form_category')
	<h1>Form new category</h1>
	<form action="route{{('admin.storeCategory')}}" method="POST">
		@csrf
		<label for="">ID</label>
		<input type="text" name="id">
		<label for="">Name</label>
		<input type="text" name="name">
		<label for="">Parent_id</label>
		<input type="text" name="parent_id">
		<button type="submit">Create new</button>
	</form>

@endsection