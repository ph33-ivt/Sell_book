@extends('layouts.master')
@section('content')
@if(session('success'))
<p style="color: red;">{{session('success')}}</p>
@endif
<h1>Form contact</h1>
<form action="{{route('send-contact')}}" method="POST">
	@csrf
	<label for="">Email</label>
	<input type="text" name="email" value="{{old('email')}}">
	@if($errors->has('email'))
	<p style="color: green;">
		{{$errors->first('email')}}
	</p>
	@endif
	@if($errors->has('content'))
	<p style="color: green;">
		{{$errors->first('content')}}
	</p>
	@endif
	<label for="">Content</label>
	<textarea name="content" >"{{old('content')}}"</textarea>
	<button type="submit">Submit</button>
</form>
@endsection