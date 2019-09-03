@extends('layouts.master')
@section('content')
<h1>List Order</h1>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Address</td>
			<td>Tel</td>
			<td>User ID</td>
			<td>Created At</td>
			<td>Updated At</td>
		</tr>
	</thead>
	<tbody>
		@foreach($listOrder as $order)
		<tr>
			<td>{{$order->id}}</td>
			<td>{{$order->name}}</td>
			<td>{{$order->address}}</td>
			<td>{{$order->tel}}</td>
			<td>{{$order->user['user_id']}}</td>
			<td>{{$order->created_at}}</td>
			<td>{{$order->updated_at}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection