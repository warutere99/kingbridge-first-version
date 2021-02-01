@extends('layouts.kingship')
@section('content')



<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">King<span>Ship Properties</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

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
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Profile Settings<span><i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Profile  Settings</h1>
      </div>
    </div>
  </div></div>
  
</section>

    <section class="ftco-section"> 
        <div class="container">
            
            
            <div class="row ml-auto">
                <div class="col-md-2.5 col-sm-2 sidebar">
                    <div class="avatar">
                        <img src="images/person1.jpeg" alt="Avatar" class="avatar">
                    </div>
                    <nav class="ftco-navbar navbar-nar nav-pills">
                        <ul class="sidebar">
                            <li class="nav-item"><a href="insights.html" class="nav-link">Insights</a></li>
                            <li class="nav-item"><a href="profile-settings.html" class="nav-link active-sidebar">Profile Settings</a></li>
                            <li class="nav-item"><a href="my-ads.html" class="nav-link ">My Ads</a></li>
                            <li class="nav-item"><a href="messages.html" class="nav-link">Messages</a></li>
                            <li class="nav-item"><a href="payments.html" class="nav-link">Payments</a></li>
                            <li class="nav-item"><a href="favourites.html" class="nav-link">My Favourites</a></li>
                            <li class="nav-item"><a href="privacy-settings.html" class="nav-link ">Privacy Settings</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <div class="row">

                        
                
                    <div class="col-lg-7 col-sm-4"> 
                        <div class="card">
                            <div class="card-header">
                              <h4 class="card-title-2">Profile Detials</h4>
              
                              
                            </div>
    
                            <div class="card-body">
                               
                                <form class="form-group">
                                    <div class="form-group">
                                    <p>I'm a: </p>
                                    <input class="" type="radio" name="gender" value="male">male
                                    <input type="radio" name="gender" value="female">male
                                    <input type="radio" name="gender" value="other">other
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" type="text" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="firstname" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="lastname" placeholder="Last Name">
                                    </div>

                                    
                                    

                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success">Update</button> 
                                    </div>

                                </form>
                            </div>
    
                            <div class="card-footer bg-light">
                                
                            </div>
                          </div>   
                    </div>

                    <div class="col-lg-5 col-sm-4"> 
                        <div class="card">
                            <div class="card-header">
                              <h4 class="card-title-2">Change Password</h4>
              
                              
                            </div>
    
                            <div class="card-body">
                               
                                <form class="form-group">

                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password" placeholder="Current Password">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="newpassword" placeholder="New Password">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="newpassword" placeholder="Confirm New Password">
                                    </div>
      

                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success">Change Password</button> 
                                    </div>

                                </form>
                            </div>
    
                            <div class="card-footer bg-light">
                                
                            </div>
                          </div>   
                    </div>

                    <div class="col-lg-5 col-sm-4"> 
                        <div class="card">
                            <div class="card-header">
                              <h4 class="card-title">Profile Photo</h4>
                              <div class="avatar">
                                <img src="images/person1.jpeg" alt="Avatar" class="avatar">
                             </div>
                              
                            </div>
    
                            <div class="card-body">
                                <form class="form-group">
                                    <div class="form-group">
                                    <input class="form-control" type="file" name="image">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Upload</button> 
                                     </div>
                                   </form>
                              
                            </div>
    
                            <div class="card-footer bg-light">
                                
                            </div>
                          </div>   
                    </div>
                    
                     
                  
                    
                    
             
                

                     </div>
                 </div>
            </div>

    </div>
    </section>








@endsection

