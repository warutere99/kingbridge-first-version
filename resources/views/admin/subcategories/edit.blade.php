@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Subcategories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Subcategories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
 	<div class="card"> 
     <div class="card-body"> 
 	<form method="post" action="{{ route('admin.subcategories.update', $subcategory->id) }}">
    @method('PUT')

    <div class="form-group" >
  
      <label class="label-control">category</label>
      <select name="category_id" class="form-control  @error('category_id') is-invalid  @enderror">
        <option value="">Choose a Category</option>
            @foreach($categories as $c)
            <option value="{{ $c->id }}" 
              @if($c->id == $subcategory->category_id)
                selected
                @endif
                > {{ $c->category_name }} </option>
            @endforeach
      </select>
  
        @error('category_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>
    
    <div class="form-group" >
      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="label-control">Subcategory</label>
      <input type="text" name="subcategory_name" class="form-control  @error('subcategory_name') is-invalid  @enderror" 
      value="{{ $subcategory->subcategory_name }}">
        @error('subcategory_name')
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
</section>
@endsection