@extends('admin.dashboard')
@section('db_content')
<h1>Search result</h1>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Image</td>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $user1)
		<tr>
			<td>{{$user1->id}}</td>
			<td>{{$user1->name}}</td>
			<td>{{$user1->email}}</td>
			<td>{{$user1->user_image}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<button class="btn btn-link"><a href="{{route('admin.listUser')}}">Back</a></button>

@endsection