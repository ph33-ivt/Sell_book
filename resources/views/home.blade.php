@extends('layouts.master')
@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @if (Route::has('login'))
            @auth        
             <!--  <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">Home</a>
              </li> -->
           
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.shoppingCart')}}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Shopping cart
                    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalquantity : '' }}</span>
                </a>
              </li>
              @else
            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
             @endif
           @endauth
           @endif
        </ul>
      </div>
    </div>
  </nav>
   <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Truyện</a>
          <a href="#" class="list-group-item">Sách</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->
      

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{asset('images/page/icon1.jpg')}}" width="900" height="300" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('images/page/icon2.jpg')}}" width="900" height="300" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('images/page/icon3.jpg')}}" width="900" height="300" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('images/page/icon4.jpg')}}" width="900" height="300" alt="Fourth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
      <div class="col-lg-12">

        <div class="row">
          @foreach($listProduct as $product)
          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" style="max-height: 150px;" src="{{asset('images/product/$product->product_image')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#" class=''>{{$product->name}}</a>
                </h4>
                <button class="card-cart"><a href="{{route('user.addToCart',['id'=>$product->id])}}"><i class="fa fa-shopping-cart" aria-hidden="true" ></i></a></button>
                <h5>{{$product->price}} VND</h5>
                <p class="card-text">{{$product->description}}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        @endforeach
        

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer> 

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{route('user.logout-user')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>

 
@endsection
