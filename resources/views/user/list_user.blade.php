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
		
		
		<h1>List user</h1>
		<div class="topnav">
		  <div class="search-container" style="float: right;">
		    <form action="{{route('admin.searchUser')}}" method="GET" role="search">
		    	{{ csrf_field() }}
		   	<div class="input-group">
		     	<input type="text" class="form-control" placeholder="Search.." name="search">
		      	<button type="submit"><i class="fa fa-search"></i></button>
		     </div>
		    </form>
		  </div>
		</div>
	 <table class="table table-bordered table-hover">
	 	<thead>
	 		<tr>
	 			<td>ID</td>
				<td>Name<a href=""><i class="fas fa-sort" style="float: right;"></i></a></td>
				<td>Email</td>
				<td>Image</td>
				<td colspan="2">Action</td>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		@foreach($listUser as $users)
			<tr>
				<td>{{$users->id}}</td>
				<td>{{$users->name}}</td>
				<td>{{$users->email}}</td>
				<td>{{$users->user_image}}</td>
				<td><a href="{{route('admin.profileUpdate',$users->id)}}"><i class="fas fa-edit"></i></a></td>
				<td><a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></a></td>
			</tr>
			@endforeach
	 	</tbody>
	 </table>
 	{{$listUser->links()}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm to delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Confirm" below if you are ready to delete.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{route('admin.deleteUser',$users->id)}}">Confirm</a>
        </div>
      </div>
    </div>
  </div>
@endsection