@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Car Ads</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Car Ads</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
 	<div class="card"> 
     <div class="card-body"> 
 	<form method="post" action="#">
        @csrf
        @method('PUT')

    <div class="form-group" >
  
      <label class="label-control">Ad Status</label>
      <select name="ad_status" class="form-control  @error('ad_status') is-invalid  @enderror">
        <option value="">Ad Status</option>
      </select>
  
        @error('ad_status')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>
    

    <div class="form-group">
      <input type="submit" class="btn btn-info" value="update">
      <a href="{{ route('admin.ads.car_ads')}}" class=" btn btn-default float-right">Back</a>
     </div>
  </form>
  </div>
</div>
  </div>    
</section>
@endsection