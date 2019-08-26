@extends('layouts.master')
@section('content')
@if(session('success'))
<p style="color: red;">{{session('success')}}</p>
@endif
<h1>Form contact</h1>
<form action="{{route('send-contact')}}" method="POST">
	@csrf
	<label for="">Email</label>
	<input type="text" name="email">
	<label for="">Content</label>
	<textarea name="content"></textarea>
	<button type="submit">Submit</button>
</form>
@endsection