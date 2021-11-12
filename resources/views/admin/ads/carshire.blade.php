@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Ads management</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Ads management</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
      <section class="content"> 
          <div class="container-fluid">
              
              
              <div class="row m-auto">
                 
                  <div class="col-md-12 m-auto">
                  
                    
                      <div class="row">
                          <div class="col-md-12">
                            @if(session('success'))
                            <div class="mt-3 alert alert-success">
                            <span> {{ session('success') }} </span>
                            </div>
                            @endif
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">Carshire Ads</h4>
                
                                <div class="card-tools">
                                    <a href="{{route('admin.ads.index')}}" class="btn btn-default">All Ads</a>
                                    <a href="{{route('admin.ads.car_ads')}}" class="btn btn-default">Cars Ads</a>
                                    <a href="{{route('admin.ads.apartment_ads')}}" class="btn btn-default">Apartment Ads</a>
                                    <a href="{{route('admin.ads.house_ads')}}" class="btn btn-default">House Ads</a>
                                    <a href="{{route('admin.ads.land_ads')}}" class="btn btn-default">Land Ads</a>
                                    <a href="{{route('admin.ads.bnd_ads')}}" class="btn btn-default">Bnd Ads</a>
                                    <a href="{{route('admin.ads.carshire_ads')}}" class="btn btn-default">Carshire Ads</a>
                                </div>
                              </div>
                               
                              <div class="card-body">
                                <table class="table table-striped projects table-responsive-md">
                                  <thead class="thead bg-light">
                                      <tr>
                                          <th>ID</th>
                                          <th>Category</th>
                                          <th>Title</th>
                                          <th>Ad Duration</th>
                                          <th>Ad Status</th>
                                          <th>Package</th>
                                          <th>Amount</th>
                                          <th>Payment_status</th>
                                          <th>user</th>
                                          <th>Action</th>
                                          
                                      </tr>
                                  </thead>
                                  <tbody>
                                
                                      @foreach($carshire as $ad)
                                      <tr data-category="active">
                                          <td>
                                              <span class="tom-checkbox">
                                                  <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                                  <label for="tg-adone"></label>
                                              </span>
                                          </td>
                                          <td><h6>{{ $ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $ad->Subcategory->subcategory_name }}</span></td>
                                          <td>
                                              <h6>{{ $ad->title }}</h6>
                                              <span>Ad ID: {{ $ad->id }}</span>
                                              <input type="hidden" name="appartment_ad_id[]" value="{{ $ad->id }}" multiple="true">
                                          </td>
                                          <td>{{ $ad->ad_duation}}</td>
                                          
                                          <td><span class="round btn-warning">Not Published</span></td>
                                          <td>
                                            <h6>{{ $ad->Package->package_name }}</h6>            
                                        </td>
                                        <td class="count-me">
                                           {{ $ad->Package->package_amount }}
                                        </td>
                                        <td>not paid</td>
                                        <td>
                                            {{ $ad->User->firstname}} {{$ad->User->secondname  }}
                                            <p> {{$ad->User->email }}</p>
                                            <p> {{$ad->User->phone_number  }}</p>
                                         </td>
                                          <td>
                                              <div class="tg-btnsactions">
                                                  <a href="{{route('postad.show_apartment_ad_post',$ad->id)}}"><i class="fa fa-eye"></i></a>
                                                  <a href="{{route('admin.ads.edit_carshire_ad',$ad->id)}}"><i class="fa fa-edit"></i> </a>
                                          
                                              </div>
                                          </td>
                                       
                                      </tr>
                                      @endforeach
        
                                  </tbody>
      
                              </table>
                            
                             
                              <div class="card-footer">
                          
                              </div>
                            
                              </div>  
                            </div>    
                          </div> 
                        
                
      </div>
      </section>


@endsection