<!DOCTYPE html>
<html class="en">
<head>
    
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> @yield('title')</title>

  <!-- Custom fonts for this template-->
 
  <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
  <!-- Page level plugin CSS-->
  <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">
  
  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets suser/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('assets suser/css/shop-homepage.css')}}" rel="stylesheet">
    
</head>
<body>

    
    
        
          <div class="content">
              @yield('content')    
          </div>
       
        
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('assets/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>
  <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script>  

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('assets suser/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets suser/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  @yield('scripts')
</body>
</html>
