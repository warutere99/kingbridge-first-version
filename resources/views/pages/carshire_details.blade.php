@extends('layouts.kingship')
@section('content')

<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
 <div class="container">
	  <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
		<div class="col-md-9 ftco-animate pb-5">
			<p class="breadcrumbs"><span class="mr-2"><a href="#" style="color: #D4AF37">Vehicle  <i class="ion-ios-arrow-forward"></i></a></span>Cars<span><i class="ion-ios-arrow-forward"></i></span></p>
		  <h1 class="mb-3">{{$carshire->title}}</h1>
		</div>
	  </div>
	</div>
	
  </section>
<section class="ftco-section ftco-car-details bg-light">
    <div class="container">
     <div class="row">
    	<div class="col-lx-9 col-lg-9 col-sm-12 mb-4 bg-white rounded" > 
			<?php 
			$img = [];
			$img = explode(",", $car->photos);
			?>
<!-- Next and previous buttons -->
<a class="carousel-control-prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="carousel-control-next" onclick="plusSlides(1)">&#10095;</a>

			<img id=featured class="mt-3 main" src="{{ $img[0] }}">

			<div id="slide-wrapper">
			<div class="slide-one-item home-slider owl-carousel" >
			<div id="slider">
				<ul class="thumbs mt-3">	
					@foreach ($img as $i)
					<img class="thumbnail thumb-img" src=" {{ $i}}">
					@endforeach
				</ul>

			</div>
			</div>
			</div>  

            <div class="row m-auto">
      		<div class="col-md-4 col-sm-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard" style="color: #d4af37;"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Mileage
		                	<span>{{$car->mileage}}</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md-4 col-sm-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons" style="color: #d4af37;"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Transmission
		                	<span>{{$car->transmission}}</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md-4 col-sm-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat" style="color: #d4af37;"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Seats
		                	<span>5 Adults</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md-4 col-sm-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack" style="color: #d4af37;"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Interior Type
		                	<span>{{$car->interior_type}}</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md-4 col-sm-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel" style="color: #d4af37;"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Fuel
		                	<span>{{$car->fuel_type}}</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md-4 col-sm-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car" style="color: #d4af37;"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Color
		                	<span>{{$car->color}}</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
		  </div>
		  
      	<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex justify-content-center">
							  <ul class="nav nav-pills mb-3"  id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active"  id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
							
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Music</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
						    				<li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Water</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
						    				<li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
						    			</ul>
						    		</div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p>{{ $car->description}}</p>
									
						    </div>

						    
						  </div>
						</div>
		      </div>

          </div>



          
          <div class="col-xl-3 col-lg-3 col-sm-12 rounded">

            <div class="mb-4 p-4 text-center bg-white rounded">
            	<p class=""> <h4 class="mb-0"> KSh {{$car->price}} </h4>  <span> REF-ID:{{$car->id}}</span> </p>
            </div>
			<div class="mb-4 p-4 text-center bg-white rounded">
				<p>
					<img src="/storage/users-avatar/{{$car->user->avatar}}" alt="Avatar" class="avatar">
				</p>
				 <p> <h3 class="h5 text-black mb-0">{{$car->user->firstname}} {{$car->user->secondname}}</h3>
				<small class="mt-1"><i class="icon-verified_user"> </i>Verified</small> </p> 

				 <p> <a href="#" class="text-dark" >View profile</a></p>

				 <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-chat"> </i>Chat</a> </p>	
				

				<p> {{$car->user->email}} <a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-message "></i>SEND EMAIL</a> </p>	
				<p> {{$car->user->phone_number}} <a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-phone"> </i>CALL</a> </p>	

				<p>
				<p> <span><i class="icon-location-arrow mt-1"></i> {{$car->county->county_name}}-{{$car->city->city}}</span> </p>	
				<p> <span><i class="icon-timer"></i> Posted 2hrs ago</span> </p>	
				<p> <span><i class="icon-eye"></i> 123 ad views</span> </p>	
				</p>

				<p>
				
						<i class="ftco-animate"><a href="#" class="text-dark"><span class="icon-twitter"></span></a></i>
						<i class="ftco-animate"><a href="#" class="text-dark"><span class="icon-facebook"></span></a></i>
						<i class="ftco-animate"><a href="#" class="text-dark"><span class="icon-instagram"></span></a></i>
					 
				</p>

				<p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-heart"> </i>SAVE AS FAVOURITE</a> </p>

				<p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-remove"> </i>REPORT THIS AD</a> </p>

             
            </div>
         
           


          </div>

        </div>
  
      	
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Choose Car</span>
            <h2 class="mb-2">Related Cars</h2>
          </div>
        </div>
        <div class="col-md-12">
			<div class="carousel-car owl-carousel">
	  @foreach ($cars as $car)
		  
				<div class="item">
					<div class="single-property-area wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
						<div class="card car-wrap rounded ftco-animate">
						  <div class="property-thumb">
						<div class="img rounded d-flex align-items-end" style="background-image: url({{ strtok($car->photos, ',') }})" ;></a>
						  </div>
						  </div>
						<div class="property-desc-area">
						<div class="property-title-seller d-flex justify-content-between">
						<div class="property-title">
						<h4><a href="{{ route('car_details', $car->id)}}">{{ $car->title}}</a></h4>
						<span class="cat">{{ $car->make}}</span>
						<p><i class="fa fa-map-marker" aria-hidden="true"></i>{{$car->county->county_name}},{{$car->city->city}}</p>
						</div>
						</div>
					
						</div>
						
						<div class="property-price">
						<p class="badge-sale">For Sale</p>
						<p class="price">Ksh{{ $car->price}} Neg</p></a>
						</div>
						</div>
						</div>
						  </div>
									
									@endforeach
								 
								
			
			</div>
		</div>
	</div>
    	</div>
    </section>

	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')
		
		let activeImages = document.getElementsByClassName('active')
		
		for (var i=0; i < thumbnails.length; i++){
		
		  thumbnails[i].addEventListener('click', function(){
			  console.log(activeImages)
			  
			  if (activeImages.length > 0){
				  activeImages[0].classList.remove('active')
			  }
			  
		
			  this.classList.add('active')
			  document.getElementById('featured').src = this.src
		  })
		}        
		</script> 
    @endsection