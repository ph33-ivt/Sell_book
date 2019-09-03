@extends('layouts.master')
@section('content')
<h1>List user</h1>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Role_id</td>
			<td>Created_at</td>
			<td>Updated_at</td>
			<td colspan="2">Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($listUser as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->role['id']}}</td>
			<td>{{$user->created_at}}</td>
			<td>{{$user->updated_at}}</td>
			<td><a href="{{route('admin.editUser',$user->id)}}">Edit</a></td>
			<td><a href="{{route('admin.deleteUser',$user->id)}}">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection