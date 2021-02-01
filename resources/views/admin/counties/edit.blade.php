@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit County</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit County</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
 	<div class="card"> 
     <div class="card-body"> 
 	<form method="post" action="{{ route('admin.counties.update', $county->id) }}">
    @method('PUT')

    <div class="form-group" >
  
      <label class="label-control">Country</label>
      <select name="country" class="form-control  @error('country') is-invalid  @enderror">
        <option value="kenya">Kenya</option>
       
      </select>
  
        @error('country')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>
    
    <div class="form-group" >
      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="label-control">County</label>
      <input type="text" name="county_name" class="form-control  @error('county_name') is-invalid  @enderror" 
      value="{{ $county->county_name }}">
        @error('county_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    
    </div>

    <div class="form-group">
      <input type="submit" class="btn btn-info" value="update">
     </div>
  </form>
  </div>
</div>
  </div>    
</section>
@endsection