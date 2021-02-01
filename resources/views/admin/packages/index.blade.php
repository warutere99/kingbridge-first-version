@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Packages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Packages</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
   <p> <a href="{{ route('admin.packages.create')}}" class="btn btn-primary">Add New Packages</a></p>
   <div class="card-body"> 
    @if(session('success'))
    <div class="mt-3 alert alert-success">
    <span> {{ session('success') }} </span>
    </div>
    @endif
   <div class="table-responsive"> 
 	<table class="table table-bordered table-striped table-hover datatable student-datatable">
 		<tr>
 			<th>ID</th>
       <th>Package name</th>
       <th>Amount</th>
       <th>Ad duration</th>
       <th>Featured</th>
       <th>Description</th>
 			<th>Action</th>
 		</tr>
 		@foreach($packages as $package)
 		<tr>
 			<td>{{ $package->id }}</td>
       <td>{{ $package->package_name }}</td>
       <td>{{ $package->package_amount }}</td>
       <td>{{ $package->package_duration }}</td>
       <td>{{ $package->package_featuring }}</td>
       <td>{!! $package->description !!}</td>
 			<td><a href="{{route('admin.packages.edit',$package->id)}}" class="btn btn-info">Edit</a> <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
        <form action="{{ route('admin.packages.destroy',$package->id)}}" method="post">
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