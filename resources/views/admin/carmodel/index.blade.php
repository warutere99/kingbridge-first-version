@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Car Models</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Car models</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
   <p> <a href="{{ route('admin.carmodel.create')}}" class="btn btn-primary">Add New Model</a></p>
   <div class="card-body"> 
   <div class="table-responsive"> 
 	<table class="table table-bordered table-striped table-hover datatable student-datatable">
 		<tr>
 			<th>ID</th>
       <th>Model</th>
       <th>Trim</th>
       <th>Year</th>
       <th>Car Make</th>
 			<th>Action</th>
 		</tr>
 		@foreach($carmodel as $c)
 		<tr>
 			<td>{{ $c->id }}</td>
       <td>{{ $c->model }}</td>
       <td>{{ $c->trim}}</td>
       <td>{{ $c->year}}</td>
       <td>{{ $c->carmake->make}}</td>
 			<td><a href="{{route('admin.carmodel.edit',$c->id)}}" class="btn btn-info">Edit</a> <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
        <form action="{{ route('admin.carmodel.destroy',$c->id)}}" method="post">
          @method('DELETE')
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>

      </td>

 		</tr>
 		@endforeach
   </table>
  </div>
</div>

  </div>    
</section>
@endsection