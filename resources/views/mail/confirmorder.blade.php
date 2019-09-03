<h1>Confirming Order</h1>
<p>Dear {{$confirm['email']}},We would like to tell you that {{$confirm['content']}}</p>

<h2>Order Confirmation</h2>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Status</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Description</td>
			<td>Images</td>
			<td>Category Id</td>
		</tr>
	</thead>
	<tbody>
		@foreach($listProduct as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->name}}</td>
			<td>{{$product->status}}</td>
			<td>{{$product->price}}</td>
			<td>{{$product->quantity}}</td>
			<td>{{$product->description}}</td>
			<td>{{$product->images}}</td>
			<td>{{$product->category_id}}</td>
		</tr>
		@endforeach
	</tbody>
</table>