@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Car Model</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit  Models</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
    
  <div class="card">
    <div class="card-body">
   <form method="post" action="{{ route('admin.carmodel.update', $carmodels->id) }}">
    @method('PUT')
    <div class="form-group" >
  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="label-control">Make</label>
    <select name="make_id" class="form-control  @error('make_id') is-invalid  @enderror">
        @foreach($carmakes as $c)
              <option value="{{ $c->id }}"
                @if($c->id== $carmodels->make_id)
                selected
                @endif
                >{{ $c->make }}</option>
            @endforeach

            

        @error('make_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>


    <div class="form-group" >
  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="label-control">Models</label>
      <input type="text" name="model" class="form-control  @error('model') is-invalid  @enderror" value="{{$carmodels->model}}" >
        @error('model')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>

    <div class="form-group" >
  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="label-control">Trim</label>
      <input type="text" name="trim" class="form-control  @error('trim') is-invalid  @enderror" value="{{$carmodels->trim}}">
        @error('trim')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>

    <div class="form-group" >
  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="label-control">Year</label>
      <input type="year" name="year" class="form-control  @error('year') is-invalid  @enderror" value="{{$carmodels->year}}">
        @error('year')
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