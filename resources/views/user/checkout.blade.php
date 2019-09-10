@extends('layouts.master')
@section('content')
   <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
			<h1>Checkout</h1>
			<h4>Total:{{$total}}</h4>
			<form action="{{route('user.checkout-cart')}}" method="POST" id="checkout-form" class="form-inline">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" id="name" class="form-control" required="required">
						</div>
					</div>
					<hr>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="address">Address</label>
							<input type="text" id="address" class="form-control" required="required">
						</div>
					</div>
					<hr>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="tel">Tel</label>
							<input type="text" id="tel" class="form-control" required="required">
						</div>
					</div>
					<hr>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-name">Card holder name</label>
							<input type="text" id="card-name" class="form-control" required="required">
						</div>
					</div>
					<hr>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-name">Expiration month</label>
							<input type="text" id="card-expiry" class="form-control" required="required">
						</div>
					</div>
					<hr>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-name">CVC</label>
							<input type="text" id="card-cvc" class="form-control" required="required">
						</div>
					</div>
				</div>
				{{csrf_field()}}
				<button type="submit" class=btn btn-success>Buy</button>
			</form>
        </div>
    </div>
@endsection

