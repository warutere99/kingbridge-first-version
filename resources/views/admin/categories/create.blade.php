@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
    
  <div class="card">
    <div class="card-body">
 	<form method="post" action="{{ route('admin.categories.store')}}">
    <div class="form-group" >
  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="label-control">Category</label>
      <input type="text" name="category_name" class="form-control  @error('category_name') is-invalid  @enderror">
        @error('category_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>

    <div class="form-group">
      <input type="submit" class="btn btn-info" value="save">
     </div>

        </form>
    </div>
  </div>
</div>

  </div>    
</section>
@endsection