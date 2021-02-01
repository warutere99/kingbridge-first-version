@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Apartment Ad</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Apartment Ad</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
 <div class="container-fluid">
    
  <div class="card">
    <div class="card-body">
   <form method="post" action="{{ route('admin.appartment_ads.store')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group" >
      <label class="label-control">category</label>
      <select name="category_id" class="form-control category  @error('category_id') is-invalid  @enderror" id="category_id">
        <option value="0" disabled="true" selected="true">Choose a Category</option>
              @foreach($categories as $c)
              <option value="{{ $c->id }}">{{ $c->category_name }}</option>
              @endforeach
      </select>
            @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        <label class="label-control">Subcategory</label>
        <select name="subcategory_id" class="form-control subcategory  @error('subcategory_id') is-invalid  @enderror">
          <option value="">Choose a Subcategory</option>
              @foreach($subcategories as $c)
                <option value="{{ $c->id }}">{{ $c->subcategory_name }}</option>
              @endforeach
        </select>
              @error('subcategory_id')
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
              <option value="{{ $c->id }}">{{ $c->subcategory_name }}</option>
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
              <option value="{{ $c->id }}">{{ $c->county_name }}</option>
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
                    @if($c->county_id =  1 )
                      <option value="{{ $c->id }}">{{ $c->city }}</option>
                    @endif
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
      <input type="text" name="title" class="form-control  @error('title') is-invalid  @enderror">
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>

    <div class="form-group">
    <label class="label-control">Choose Ad Post Type</label>
      <select name="ads_type" class="form-control  @error('ads_type') is-invalid  @enderror">
        <option value="">Choose a Sale or Rent</option>
              <option>rent</option>
              <option>sale</option>
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
          <option value="">Choose a real state type</option>
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
        <input type="text" name="condition" class="form-control  @error('condition') is-invalid  @enderror">
          @error('condition')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">Price</label>
        <input type="number" name="price" class="form-control  @error('price') is-invalid  @enderror">
          @error('price')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">Bedroom</label>
        <input type="text" name="bedroom" class="form-control  @error('bedroom') is-invalid  @enderror">
          @error('bedroom')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">Bathroom</label>
        <input type="text" name="bathroom" class="form-control  @error('bathroom') is-invalid  @enderror">
          @error('bathroom')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group" >
        <label class="label-control">Apartment Square Meters</label>
        <input type="number" name="square_meters" class="form-control  @error('square_meters') is-invalid  @enderror">
          @error('square_meters')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group" >
        <label class="label-control">Amenities</label>
        <textarea  name="amenities" class="form-control  @error('amenities') is-invalid  @enderror"> 

        </textarea>
          @error('amenities')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group" >
        <label class="label-control">Description</label>
        <textarea  name="description" class="form-control  @error('description') is-invalid  @enderror"> 

        </textarea>
          @error('description')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group" >
        <label class="label-control">photos</label>
        <input type="text" name="photos" multiple="true" class="form-control  @error('photos') is-invalid  @enderror">
          @error('photos')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group">
        <label class="label-control">Packages</label>
          <select name="package_id" class="form-control  @error('package_id') is-invalid  @enderror">
            <option value="">Choose a Package</option>
                  <option value="1">Silver Kes 1000</option>
                  <option value="2">Gold Kes 2000</option>
                  <option value="3">Premium Kes 3000</option>
          </select>
      
            @error('package_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
         <input type="hidden" name="user_id" value="1">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
<script type="text/javascript">
  $(document).ready(function(){

    $(document).on('change','.category',function(){
      // console.log("hmm its change");

      var category_id=$(this).val();
      // console.log(cat_id);
      var div=$(this).parent();

      var op=" ";

      $.ajax({
        type:'get',
        url:'{!!URL::to('admin/appartment_ads/subcategory')!!}',
        data:{'id':category_id},
        success:function(data){
          //console.log('success');

          //console.log(data);

          //console.log(data.length);
          op+='<option value="0" selected disabled>chose subcategory </option>';
          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].id+'">'+data[i].subcategory_name+'</option>';
           }

           div.find('.subcategory').html(" ");
           div.find('.subcategory').append(op);
        },
        error:function(){

        }
      });
    });


  });
</script>
@endsection