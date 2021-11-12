@extends('layouts.kingship')
@section('content')

<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images/navbg.jpg')}}');" data-stellar-background-ratio="0.5">
  <div class="overlay"> <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Post Ad <span><i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Car Hire Ad</h1>
      </div>
    </div>
  </div></div>
  
</section>
<section class="ftco-section">
  
 <div class="container">
   <div class="row">
    <div class="col-md-2 sidebar">
      <div class="avatar">
          <img src="{{ asset('images/car1.jpg')}}" alt="Avatar" class="avatar">
      </div>
      <nav class="ftco-navbar navbar-nar nav-pills">
          <ul class="sidebar">
              <li class="nav-item"><a href="insights.html" class="nav-link active-sidebar">Insights</a></li>
              <li class="nav-item"><a href="profile-settings.html" class="nav-link">Profile Settings</a></li>
              <li class="nav-item"><a href="my-ads.html" class="nav-link ">My Ads</a></li>
              <li class="nav-item"><a href="messages.html" class="nav-link">Messages</a></li>
              <li class="nav-item"><a href="payments.html" class="nav-link">Payments</a></li>
              <li class="nav-item"><a href="favourites.html" class="nav-link">My Favourites</a></li>
              <li class="nav-item"><a href="privacy-settings.html" class="nav-link ">Privacy Settings</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
          </ul>
      </nav>
  </div>

  <div class="col-lg-10">
   <div class="card-body"> 
     @if(session('success'))
        <div class="mt-3 alert alert-success">
         <span> {{ session('success') }} </span>
        </div>
     @endif

   <div class="table-responsive"> 
 	<table class="table table-bordered table-striped table-hover datatable student-datatable">
 	
 	
 		<tr>
 		<tr> <td>ID: {{ $carshire_ad->id }} </td> </tr>
        <tr> <td>Category: {{ $carshire_ad->category->category_name }}</td> </tr>
        <tr><td>Subcategory: {{ $carshire_ad->subcategory->subcategory_name }}</td></tr>
        <tr> <td>County: {{ $carshire_ad->county->county_name }}</td></tr>
        <tr><td>City: {{ $carshire_ad->city->city }}</td></tr>
        <tr> <td>User: {{ $carshire_ad->User->firstname }} {{ $car_ad->User->secondname }}</td></tr>
        <tr><td>Title: {{ $carshire_ad->title }}</td></tr>
    <tr><td>Ads_type: {{ $carshire_ad->ads_type }}</td></tr>
     <tr> <td>Condition: {{ $carshire_ad->condition }}</td></tr>
     <tr> <td>Price: {{ $carshire_ad->price }}</td></tr>
        <tr> <td>Mileage: {{ $carshire_ad->mileage }}</td></tr>
        <tr> <td>Bathroom: {{ $carshire_ad->bathroom }}</td></tr>
        <tr> <td>Square Meters: {{ $carshire_ad->square_meters }}</td></tr>
        <tr> <td>Description: {{ $carshire_ad->description }}</td></tr>
        <tr><td>Package: {{ $carshire_ad->Package->package_name }} {{ $carshire_ad->Package->package_amount }}</td></tr>
        <tr><td>photos: 
        <img src="{{ strtok($carshire_ad->photos, ',') }}" width="100">
        </td></tr>
        <tr><td>Action:<a href="#" class="btn btn-info">Edit</a> <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
        <form action="#" method="post">
          @method('DELETE')
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>

      </td></tr>

 		</tr>
 	
   </table>
  </div>
</div>
    </div>
  </div>  
 </div>  
</section>
@endsection