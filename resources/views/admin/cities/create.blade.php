@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add City</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add City</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
    
  <div class="card">
    <div class="card-body">
 	<form method="post" action="{{ route('admin.cities.store')}}">
    
    <div class="form-group" >
  
      <label class="label-control">County</label>
      <select name="county_id" class="form-control  @error('county_id') is-invalid  @enderror">
        <option value="">Choose a County</option>
            @foreach($counties as $c)
              <option value="{{ $c->id }}">{{ $c->county_name }}</option>
            @endforeach
      </select>
  
        @error('county_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>

    <div class="form-group" >
  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="label-control">City</label>
      <input type="text" name="city" class="form-control  @error('city') is-invalid  @enderror">
        @error('city')
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