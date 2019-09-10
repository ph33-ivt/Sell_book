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
<h1>Edit user</h1>
<form action="{{route('admin.profileUpdate',$user->id)}}" method="POST" enctype="multipart/form-data">
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
	<div class="form-group row">
        <label for="user_image" class="col-md-4 col-form-label text-md-right">User Image</label>
            <div class="col-md-6">
                <input id="user_image" type="file" class="form-control" name="user_image">
                @if (auth()->user()->image)
                    <code>{{ auth()->user()->image }}</code>
                @endif
            </div>
    </div>
	<button type="submit">Submit</button>
</form>
@endsection