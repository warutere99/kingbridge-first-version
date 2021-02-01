@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Package</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Package</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
    
  <div class="card">
    <div class="card-body">
 	<form method="post" action="{{ route('admin.packages.store')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group" >
      <label class="label-control">Package Name</label>
      <input type="text" name="package_name" class="form-control  @error('package_name') is-invalid  @enderror">
        @error('package_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group" >
      <label class="label-control">Package Amount</label>
      <input type="number" name="package_amount" class="form-control  @error('package_amount') is-invalid  @enderror">
        @error('package_amount')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group" >
      <label class="label-control">Package Duration</label>
      <input type="number" name="package_duration" class="form-control  @error('package_duration') is-invalid  @enderror">
        @error('package_duration')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
      <label class="label-control">Package Feature</label>
      <div class="form-check">
        <input class="form-check-input @error('package_feature') is-invalid  @enderror" type="checkbox" name="package_feature" value="featured">
        <label class="form-check-label">Feature</label>
      </div>
      
      @error('package_feature')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
      <label class="label-control">Package Description</label>
      <textarea id="article-ckeditor" name="package_description" ></textarea>
      
      @error('package_feature')
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