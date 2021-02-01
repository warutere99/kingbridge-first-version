@extends('layouts.kingship')
@section('content')

<div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="about.html" class="nav-link">listing</a></li>
      <li class="nav-item active"><a href="services.html" class="nav-link">Dashbord</a></li>
      <li class="nav-item "><a href="pricing.html" class="nav-link">Post An AD</a></li>
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="icon-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="images/Person2.jpg" alt="User Avatar" class="avatar">
            <div class="media-body">
              <h5 class="dropdown-item-title">
                Flash 
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h5>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="images/person3.jpg" alt="User Avatar" class="avatar">
            <div class="media-body">
              <h5 class="dropdown-item-title">
                Joel 
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h5>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="images/person4.jpg" alt="User Avatar" class="avatar">
            <div class="media-body">
              <h5 class="dropdown-item-title">
                Kenneth
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h5>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>


    </ul>
  </div>
</div>
</nav>
<!-- END nav -->

<section class="hero-wrap-3 js-smallheight" style="background-image: url('images/vw.jpeg');" data-stellar-background-ratio="0.5">
<div class="overlay"> <div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
  <div class="col-md-9 ftco-animate pb-5">
      <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Dashbord <i class="ion-ios-arrow-forward"></i></span></p>
    <h1 class="mb-3 bread">My Ads</h1>
  </div>
</div>
</div></div>

</section>

<section class="ftco-section ftco-section ftco-cart"> 
    <div class="container">
        
        
        <div class="row ml-auto">
            <div class="col-md-2.5 sidebar mb-2">
                <div class="avatar">
                    <img src="images/person1.jpeg" alt="Avatar" class="avatar">
                </div>
                <nav class="ftco-navbar navbar-nar nav-pills">
                    <ul class="sidebar">
                        <li class="nav-item"><a href="insights.html" class="nav-link">Insights</a></li>
                        <li class="nav-item"><a href="profile-settings.html" class="nav-link">Profile Settings</a></li>
                        <li class="nav-item"><a href="my-ads.html" class="nav-link active-sidebar">My Ads</a></li>
                        <li class="nav-item"><a href="messages.html" class="nav-link">Messages</a></li>
                        <li class="nav-item"><a href="payments.html" class="nav-link">Payments</a></li>
                        <li class="nav-item"><a href="favourites.html" class="nav-link">My Favourites</a></li>
                        <li class="nav-item"><a href="privacy-settings.html" class="nav-link ">Privacy Settings</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">My Ads</h4>
  
                  <div class="card-tools">
                    <nav class="navbar navbar-expand" style="float: left;">
                      <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link">All Ads(12)</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Featured(10)</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Active(5)</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Sold(2)</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Expired(2)</a></li>
                        </ul>
                    </nav>
                    <div class="input-group input-group-sm" style="width: 150px; float: right; ">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body table-responsive pt-1 pr-1 pl-1">
                  <table  class="table  table-hover table-responsive text-wrap ">
                    <thead class="thead bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Featured</th>
                            <th>Ad Status</th>
                            <th>Price &amp; Location</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-category="active">
                            <td>
                                <span class="tom-checkbox">
                                    <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                    <label for="tg-adone"></label>
                                </span>
                            </td>
                            <td><img src="images/car4.jpg" width="50" height="50" alt="image description"></td>
                            <td>
                                <h6>2010 Mercedes-Benz C200</h6>
                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                            </td>
                            <td><h6>cars</h6><span class="tg-adcategories">Benz</span></td>
                            <td>Yes</td>
                            <td><span class="round btn-success">active</span></td>
                            <td>
                                <h6>Ksh 2,000,000</h6>            
                            </td>
                            <td>
                                <time datetime="2017-08-08">April 27, 2020</time>
                                <span>Published</span>
                            </td>
                            <td>
                                <div class="tg-btnsactions">
                                    <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr data-category="active">
                            <td>
                                <span class="tg-checkbox">
                                    <input id="tg-adtwo" type="checkbox" name="myads" value="myadtwo">
                                    <label for="tg-adtwo"></label>
                                </span>
                            </td>
                            <td><img src="images/cars/red-1.jpeg" width="50" height="50"  alt="image description"></td>
                            <td>
                                <h6>2020 Volkswagen Jetta Red.</h6>
                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                            </td>
                            <td><h6>cars</h6><span>Jetta</span></td>
                            <td>Yes</td>
                            <td><span class="btn-warning">inactive</span></td>
                            <td>
                                <h6>Ksh 1,470,000</h6>                         
                            </td>
                            <td>
                                <time datetime="2017-08-08">Jun 27, 2017</time>
                                <span>Published</span>
                            </td>
                            <td>
                                <div class="tg-btnsactions">
                                    <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr data-category="active">
                            <td>
                                <span class="tom-checkbox">
                                    <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                    <label for="tg-adone"></label>
                                </span>
                            </td>
                            <td><img src="images/house11.jpg" width="50" height="50" alt="image description"></td>
                            <td>
                                <h6>Swiss Lenana Mount Hotel Opens in new window4-star hotel</h6>
                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                            </td>
                            <td><h6>Property</h6><span class="tg-adcategories">Appartment</span></td>
                            <td>Yes</td>
                            <td><span class="round btn-success">active</span></td>
                            <td>
                                <h6>Ksh 300,000,000</h6>                
                            </td>
                            <td>
                                <time datetime="2017-08-08">May 27, 2020</time>
                                <span>Published</span>
                            </td>
                            <td>
                                <div class="tg-btnsactions">
                                    <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr data-category="active">
                            <td>
                                <span class="tg-checkbox">
                                    <input id="tg-adtwo" type="checkbox" name="myads" value="myadtwo">
                                    <label for="tg-adtwo"></label>
                                </span>
                            </td>
                            <td><img src="images/cars/red-1.jpeg" width="50" height="50"  alt="image description"></td>
                            <td>
                                <h6>2020 Volkswagen Jetta Red.</h6>
                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                            </td>
                            <td><h6>Cars</h6><span>Jetta</span></td>
                            <td>Yes</td>
                            <td><span class="btn-warning">inactive</span></td>
                            <td>
                                <h6>Ksh 1,470,000</h6>                         
                            </td>
                            <td>
                                <time datetime="2017-08-08">Jun 27, 2017</time>
                                <span>Published</span>
                            </td>
                            <td>
                                <div class="tg-btnsactions">
                                    <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td >
                                <span class="tg-checkbox">
                                    <input id="tg-adthree" type="checkbox" name="myads" value="myadthree">
                                    <label for="tg-adthree"></label>
                                </span>
                            </td>
                            <td ><img src="images/house6.jpg" width="50" height="50"  alt="image description"></td>
                            <td>
                                <h6>sheka’s house </h6>
                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                            </td>
                            <td><h6>Property</h6><span>House</span></td>
                            <td>Yes</td>
                            <td>
                                <span class="btn-success">active</span>
                               
                            </td>
                            <td >
                                <h6>Ksh 23,000,000</h6>             
                            </td>
                            <td>
                                <time datetime="2017-08-08">Jun 27, 2017</time>
                                <span>Published</span>
                            </td>
                            <td>
                                <div class="tg-btnsactions">
                                    <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                    <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                       
                       

                    </tbody>

                </table>
                <div class="card-footer">
                  <div class="block-27" style="float: left;">
                    <ul>
                      <li><a href="#">&lt;</a></li>
                      <li class="active"><span>1</span></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">&gt;</a></li>
                    </ul>
                  </div>
                </div>
                </div>
              </div>
            
         

            </div>
        </div>
</div>
</section>


@endsection