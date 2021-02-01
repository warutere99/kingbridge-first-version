@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Appartment Ads</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Apartment Ads</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
   <p> <a href="{{ route('admin.appartment_ads.create')}}" class="btn btn-primary">Add New Apartment Ad</a></p>
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
       <th>Category</th>
       <th>Subcategory</th>
       <th>County</th>
       <th>City</th>
       <th>User</th>
       <th>Title</th>
       <th>Ads_type</th>
       <th>Real State</th>
       <th>Condition</th>
       <th>Price</th>
       <th>Bedroom</th>
       <th>Bathroom</th>
       <th>Square Meters</th>
       <th>Amenities</th>
       <th>Description</th>
       <th>Package</th>
       <th>photos</th>
 			<th>Action</th>
 		</tr>
 		@foreach($appartment_ads as $ad)
 		<tr>
 			<td>{{ $ad->id }}</td>
       <td>{{ $ad->category->category_name }}</td>
       <td>{{ $ad->subcategory->subcategory_name }}</td>
       <td>{{ $ad->county->county_name }}</td>
       <td>{{ $ad->city->city }}</td>
       <td>{{ $ad->user_id }}</td>
       <td>{{ $ad->title }}</td>
       <td>{{ $ad->ads_type }}</td>
       <td>{{ $ad->real_state_type }}</td>
       <td>{{ $ad->condition }}</td>
       <td>{{ $ad->price }}</td>
       <td>{{ $ad->bedroom }}</td>
       <td>{{ $ad->bathroom }}</td>
       <td>{{ $ad->square_meters }}</td>
       <td>{{ $ad->amenities }}</td>
       <td>{{ $ad->description }}</td>
       <td>{{ $ad->package_id }}</td>
       <td>{{ $ad->photos }}</td>
 			<td><a href="{{route('admin.appartment_ads.edit',$ad->id)}}" class="btn btn-info">Edit</a> <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
        <form action="{{ route('admin.appartment_ads.destroy',$ad->id)}}" method="post">
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