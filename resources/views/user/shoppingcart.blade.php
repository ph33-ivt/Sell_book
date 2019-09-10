@extends('layouts.master')
@section('content')
      
      @if(Session::has('cart'))
          <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
              <ul class="list-group">
                @foreach($listProduct as $product)
                  <li class="list-group-item">
                    <span class="badge">
                      {{$product['quantity']}}
                    </span>
                    <span class="label label-success">
                      {{$product['price']}}
                    </span>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary btn xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="">Reduce by 1</a></li>
                        <li><a href="">Reduce all</a></li>
                      </ul>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div> 
          </div>
          
          <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
              <strong>Total: {{$totalprice}}</strong>
            </div> 
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
              <div class="btn btn-success" type="button"><a href="{{route('user.checkout-cart')}}">Checkout</a>
              </div>
            </div> 
          </div>
      @else
          <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
             <h2>No item in cart</h2>
            </div> 
          </div>
      @endif
      

@endsection