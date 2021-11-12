@extends('layouts.kingship')
@section('content')

<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images/navbg.jpg')}}');" data-stellar-background-ratio="0.5">
  <div class="overlay"> <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Post Ad <span><i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Bnb Ad</h1>
      </div>
    </div>
  </div></div>
  
</section>
<section class="ftco-section bg-light">
  
  <div class="container">
    <div class="row">
     <div class="col-xl-2 col-lg-2 col-sm-12 rounded"> 
       <div class="mb-4 p-2 text-center bg-white rounded"> 
           <p> 
           <div class="avatar">
               <img src="/storage/users-avatar/{{ Auth::user()->avatar }}" alt="Avatar" class="avatar">
           </div> 
           <a href="#" class="text-dark" >View profile</a>
           </p>
           <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-cog"> </i>Dashbord</a> </p>	
           <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-heart"> </i>My Ads</a> </p>
           <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-view_list"> </i>Draft Ads</a> </p>
           <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-chat"> </i>Messages</a> </p>
           <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-dollar"> </i>Payments</a> </p>
               
           </div>   
       </div>
   <div class="col-xl-10 col-lg-8 col-sm-12 col-12 rounded">
 
 <a href="{{ route('user.user_cart')}}" class="btn btn-primary w-25">Back</a>
 	<div class="card"> 
     <div class="card-body"> 
 	<form method="post" action="{{ route('postad.update_bnb_ad', $bnb_ad->id) }}">
    @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group" >
      <label class="label-control">category</label>
      <select name="category_id" class="form-control  @error('category_id') is-invalid  @enderror">
        <option value="">Choose a Category</option>
                @foreach($categories as $c)
                <option value="{{ $c->id }}" 
                  @if($c->id == $bnb_ad->category_id)
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
      <label class="label-control">Subcategory</label>
      <select name="subcategory_id" class="form-control  @error('subcategory_id') is-invalid  @enderror">
        <option value="">Choose a Subcategory</option>
            @foreach($subcategories as $c)
                <option value="{{ $c->id }}" 
                  @if($c->id == $bnb_ad->subcategory_id)
                    selected
                    @endif
                    > {{ $c->subcategory_name }} </option>
                @endforeach
      </select>
            @error('subcategory_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group" >
      <label class="label-control">Location</label>
      <select name="county_id" class="form-control  @error('county_id') is-invalid  @enderror">
        <option value="">Choose a County</option>
            @foreach($counties as $c)
            <option value="{{ $c->id }}" 
              @if($c->id == $bnb_ad->county_id)
                selected
                @endif
                > {{ $c->county_name }} </option>
            @endforeach
      </select>
            @error('county_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

      <select name="city_id" class="mt-2 form-control  @error('city_id') is-invalid  @enderror">
        <option value="">Choose a City</option>
            @foreach($cities as $c)
            <option value="{{ $c->id }}" 
              @if($c->id == $bnb_ad->county_id)
                selected
                @endif
                > {{ $c->city }} </option>
            @endforeach
      </select>
            @error('city_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group" >
      <label class="label-control">Title</label>
      <input type="text" name="title" value="{{ $bnb_ad->title }}" class="form-control  @error('title') is-invalid  @enderror">
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>
    <div class="form-group" >
      <label class="label-control">Parking</label>
      <input type="text" name="parking" value="{{ $bnb_ad->parking }}" class="form-control  @error('parking') is-invalid  @enderror">
        @error('parking')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>

    <div class="form-group">
    <label class="label-control">Choose Ad Post Type</label>
      <select name="ads_type" class="form-control  @error('ads_type') is-invalid  @enderror">
         <option> {{ $bnb_ad->ads_type }} </option>
         <option>Sale</option>
         <option>Rent</option>
              
         
      </select>
  
        @error('ads_type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>
    <div class="form-group">
      <label class="label-control">Real State</label>
        <select name="real_state_type" class="form-control  @error('real_state_type') is-invalid  @enderror">
          <option>{{ $bnb_ad->real_state_type }}</option>
                <option>Flat</option>
                <option>Studio</option>
                <option>Buglows</option>
        </select>
    
          @error('real_state_type')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
       
      </div>

      <div class="form-group" >
        <label class="label-control">Condition</label>
        <input type="text" name="condition" value="{{ $bnb_ad->condition }}"  class="form-control  @error('condition') is-invalid  @enderror">
          @error('condition')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">Price</label>
        <input type="number" name="price" value="{{ $bnb_ad->price }}" class="form-control  @error('price') is-invalid  @enderror">
          @error('price')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">Bedroom</label>
        <input type="number" name="bedroom" value="{{ $bnb_ad->bedroom }}" class="form-control  @error('bedroom') is-invalid  @enderror">
          @error('bedroom')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">Bathroom</label>
        <input type="number" name="bathroom" value="{{ $bnb_ad->bathroom }}" class="form-control  @error('bathroom') is-invalid  @enderror">
          @error('bathroom')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group" >
        <label class="label-control">Apartment Square Meters</label>
        <input type="number" name="square_meters" value="{{ $bnb_ad->square_meters }}" class="form-control  @error('square_meters') is-invalid  @enderror">
          @error('square_meters')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group" >
        <label class="label-control">Amenities</label>
        <textarea  name="amenities" class="form-control  @error('amenities') is-invalid  @enderror">{{$bnb_ad->amenities }}</textarea>
          @error('amenities')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group" >
        <label class="label-control">Description</label>
        <textarea  name="description" class="form-control  @error('description') is-invalid  @enderror">{{$bnb_ad->description }}</textarea>
          @error('description')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group" >
        <label class="label-control">photos</label>
        <input type="file" name="photos" value="{{$bnb_ad->photos }}" multiple="true" class="form-control  @error('photos') is-invalid  @enderror">
          @error('photos')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group">
        <label class="label-control">Packages</label>
          <select name="package_id" class="form-control  @error('package_id') is-invalid  @enderror">
            <option value="{{$bnb_ad->package_id }}">{{$bnb_ad->Package->package_name }}{{$bnb_ad->Package->package_amount }}</option>
                  <option value="1">Silver Kes 1000</option>
                  <option value="2">Gold Kes 2000</option>
                  <option value="3">Premium Kes 3000</option>
          </select>
      
            @error('package_id')
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