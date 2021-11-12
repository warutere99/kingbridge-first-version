@extends('layouts.kingship')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/subaru.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="car_listing">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Cars for hire listing</h1>
          </div>
        </div>
      </div>

    </section>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-2 contact-info">
        	<div class="col-lg-2 col-md-5 col-sm-5">
        		<div class="row">
		        
		          	<div class="border w-100 p-4 rounded mb-2 d-flex bg-dark">
			          	
              <form action="{{ route('carshires')}}" method="get" style="width: 100%;">
                <div class="form-group">
                   <label>Filter:</label>
                </div>
               
                               
              

                  
                <!-- start form herer-->
                 <div class="form-group">
                  <label>Make</label>
                  <select class="form-control select2bs4" name="make" style="width: 100%;" >
                    <option value="">All</option>
                    <option>Subaru</option>
                    <option>Toyota</option>
                    <option>Benz</option>
                    <option>Lamborghini</option>
                    <option>Audi</option>

                  </select>
                </div>
                <div class="form-group">
                  <label>Model</label>
                  <select class="form-control select2bs4" name="model"  style="width: 100%;">
                    <option>Disable</option>
                    <option>Toyota</option>
                    <option>Benz</option>
                    <option>Urus</option>
                    <option>R8</option>
                  </select>
                </div>

                  <div class="form-group">
                  <label>Year</label>
                    <select class="form-control select2bs4" style="width: 70%;">
                    <option>From</option>
                    <option>1995</option>
                    <option>1996</option>
                  </select> - 
                  <select class="form-control select2bs4" style="width: 70%;">
                    <option>To</option>
                    <option>1995</option>
                    <option>1996</option>
                  </select>
                </div>

                  <div class="form-group">
                  <label>Prices</label>
                  <select class="form-control select2bs4" style="width: 70%;">
                    <option>Min Ksh</option>
                    <option>KSh100,000</option>
                    <option>KS500,000</option>
                    <option>KS1,000,000</option>
                  </select> - 
                  <select class="form-control select2bs4" style="width: 70%;">
                    <option>Max Ksh</option>
                    <option>KSh100,000</option>
                    <option>KS500,000</option>
                    <option>KS1,000,000</option>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Location</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>Nairobi</option>
                    <option>Karen</option>
                    <option>Meru</option>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Conditon</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>Used</option>
                    <option>Brand New</option>
                    <option>Meru</option>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Fuel Type</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>Pertol</option>
                    <option>Diesel</option>
                    <option>Hybird and Electric</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Transmission</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>Automatic</option>
                    <option>Manual</option>
                  </select>
                </div>


                <div class="form-group">
                  <label>Transmission</label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option>White</option>
                    <option>Silver</option>
                    <option>Blue</option>
                    <option>Yellow</option>
                    <option>Red</option>
                    <option>Black</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" value="Search Now" class="btn btn-dark w-100">
                  </div>
              </form>
			                       
			          </div>
		        </div>
          </div>

          <div class="col-lg-10">
            <div class="row">
  @foreach ($carshires as $ad)

  <div class="col-lg-4 col-md-4">
<div class="single-property-area wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
<div class="card car-wrap rounded ftco-animate">
  <div class="property-thumb">
<div class="img rounded d-flex align-items-end" style="background-image: url({{ strtok($ad->photos, ',') }})" ;></a>
  </div>
  </div>
<div class="property-desc-area">
<div class="property-title-seller d-flex justify-content-between">
  
<div class="property-title">
<h6><a href="{{ route('car_details', $ad->id)}}">{{ $ad->title}}</a></h6>
<span class="cat">{{ $ad->make}}</span>
<p><i class="fa fa-map-marker" aria-hidden="true"></i>{{$ad->county->county_name}},{{$ad->city->city}}</p>
</div>
</div>

<div class="property-info-area d-flex flex-wrap">
<p>Engine Size <span>{{$ad->engine_size}}</span></p>
<p>Transmission <span>{{$ad->transmission}}</span></p>
<p>Mileage <span>{{$ad->mileage}}Km</span></p>
<p>Fuel Type <span>{{$ad->fuel_type}}</span></p>
<p>Year <span>{{$ad->year_of_build}}</span></p>
<p>Body Type <span>{{$ad->body_type}}</span></p>
</div>
</div>

<div class="property-price">
<p class="badge-sale">For Sale</p>
<p class="price">Ksh{{ $ad->price}} Neg</p></a>
</div>
</div>
</div>
  </div>
            
            @endforeach
         
        
        <div class="row">
          <div class="col-md-12 text-center">
          
      </div>
        </div>
     
 
    </section>

  <script>
    function addCommas(nStr){
 nStr += '';
 var x = nStr.split('.');
 var x1 = x[0];
 var x2 = x.length > 1 ? '.' + x[1] : '';
 var rgx = /(\d+)(\d{3})/;
 while (rgx.test(x1)) {
  x1 = x1.replace(rgx, '$1' + ',' + '$2');
 }
 return x1 + x2;
}
</script>
   
    @endsection