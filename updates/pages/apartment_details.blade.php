@extends('layouts.kingship')
@section('content')


<section class="ftco-section ftco-car-details">

    <div class="container">

   <div class="row">
        <div class="col-lg-8 bg-light">
          <p><h3> Located in Runda. </h3></p>
          <p><h6> On 1/2 Acre</p>
          <p><h7>Added 6 days ago</h7></p>
          <script>
              function thumbChange(num) {
                  var thumb ='images/rundahs' +num +'.jpg';
                  document.getElementById("mainImg").src = thumb;
              }
          </script>
          
          <div class="main">
              <img id="mainImg" src="images/rundahs0.jpg">
          </div>

          <div class="slide-one-item home-slider owl-carousel" >
              
          <ul class="thumbs mt-3">
              <li onclick="thumbChange(0)"><img class="thumb-img" src="images/rundahs0.jpg"></li>
              <li onclick="thumbChange(1)"><img class="thumb-img" src="images/rundahs1.jpg"></li>
              <li onclick="thumbChange(2)"><img class="thumb-img" src="images/rundahs2.jpg"></li>
              <li onclick="thumbChange(3)"><img class="thumb-img" src="images/rundahs3.jpg"></li>
              <li onclick="thumbChange(4)"><img class="thumb-img" src="images/rundahs4.jpg"></li>
              <li onclick="thumbChange(5)"><img class="thumb-img" src="images/rundahs5.jpg"></li>
              <li onclick="thumbChange(6)"><img class="thumb-img" src="images/rundahs6.jpg"></li>  
              

          </ul>
      </div>
      


          
          
                <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="icon-bed"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Bedrooms
                          <span>5</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="icon-bathtub"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Bathrooms
                          <span>5</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Parking
                          <span>6</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="icon-pets"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Pets
                          <span>Allowed</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="icon-pool"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Swimming pool 
                          <span>Available</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Color
                          <span>Black</span>
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
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                              <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                              </li>
                            </ul>
                          </div>

                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                              <div class="row">
                                  <div class="col-md-9">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Compound.</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Laundry Area.</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Fitted with Quality imported Tiles.</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Stairs fitted with Marble.</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>The ceiling is T&G timber throughout.</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>3 Covered Carports.</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Solar water heaters</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Generator for Power Barkup</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Kitchen Pantry</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Big water storage Tanks with pumps to pressurise water to the Bathrooms.</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Spacious One (1) Bedroom Guestwing. Has its own Kitchennete.</li>
                                      </ul>
                                  </div>
                                  
                                  
                              </div>
                          </div>

                          <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                  <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                          </div>

                          <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                     <div class="col-md-7">
                                         <h3 class="head">23 Reviews</h3>
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">Jacob Webb</span>
                                                     <span class="text-right">14 March 2018</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                             </div>
                                         </div>
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">Jacob Webb</span>
                                                     <span class="text-right">14 March 2018</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                             </div>
                                         </div>
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">Jacob Webb</span>
                                                     <span class="text-right">14 March 2018</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-5">
                                         <div class="rating-wrap">
                                             <h3 class="head">Give a Review</h3>
                                             <div class="wrap">
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (98%)
                                                     </span>
                                                     <span>20 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (85%)
                                                     </span>
                                                     <span>10 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (70%)
                                                     </span>
                                                     <span>5 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (10%)
                                                     </span>
                                                     <span>0 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (0%)
                                                     </span>
                                                     <span>0 Reviews </span>
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                          </div>
                        </div>
                      </div>
            </div>

        </div>



        
        <div class="col-lg-4">

          <div class="mb-4 p-4 text-center bg-light">
              <p> <h4 class="mb-0"> KSh 100 Million </h4> <small>NEGOTIABLE</small> <span> REF-ID:q8g02w4</span> </p>
          </div>
<div class="mb-4 p-4 text-center bg-light">
              <p>
                  <img src="images/joshua.jpeg" alt="Avatar" class="avatar">
              </p>
               <p> <h3 class="h5 text-black mb-0">Warutere jnr</h3>
              <small class="mt-1"><i class="icon-verified_user"> </i>Verified</small> </p> 

               <p> <a href="#">View profile</a></p>

               <p><small>joined: 1 year ago</small></p>

               <p class="star">
                  <span>
                      <i class="ion-ios-star"></i>
                      <i class="ion-ios-star"></i>
                      <i class="ion-ios-star"></i>
                      <i class="ion-ios-star"></i>
                      <i class="ion-ios-star"></i>
                      (10%)
                  </span>
                  <span>5 Reviews</span>
              </p>

              <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-message "> </i>SEND EMAIL</a> </p>	
              <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-phone"> </i>CALL</a> </p>	

              <p>
              <p> <span><i class="icon-location-arrow mt-1"></i> Karen - Nairobi</span> </p>	
              <p> <span><i class="icon-timer"></i> Posted 2hrs ago</span> </p>	
              <p> <span><i class="icon-eye"></i> 123 ad views</span> </p>	
              </p>

              <p>
              
                      <i class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></i>
                      <i class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></i>
                      <i class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></i>
                   
              </p>

              <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-heart"> </i>SAVE AS FAVOURITE</a> </p>

              <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-remove"> </i>REPOERT THIS AD</a> </p>

           
          </div>
       
         


        </div>

      </div>

        
    </div>
  </section>

  <section class="ftco-section ">
      <div class="container">
          <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Choose Car</span>
          <h2 class="mb-2">Related Cars</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/red-1.jpeg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="car_single.html">Mercedes Grand Sedan</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Cheverolet</span>
                              <p class="price ml-auto">$500 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/benz-1.jpg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Subaru</span>
                              <p class="price ml-auto">$500 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/red-1.jpeg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Cheverolet</span>
                              <p class="price ml-auto">$500 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
      </div>
      </div>
  </section>




  @endsection