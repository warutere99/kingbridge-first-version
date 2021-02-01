@extends('layouts.kingship')
@section('content')

<section class="hero-wrap-3 js-smallheight" style="background-image: url('images/bghouse3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"> <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Post an Add<span><i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Post house</h1>
        </div>
      </div>
    </div></div>
    
  </section>

      <section class="ftco-section"> 
          <div class="container">
              
              
              <div class="row ml-auto">
                  <div class="col-md-2.5 sidebar">
                      <div class="avatar">
                          <img src="images/person1.jpeg" alt="Avatar" class="avatar">
                      </div>
                      <nav class="ftco-navbar navbar-nar nav-pills">
                          <ul class="sidebar">
                              <li class="nav-item"><a href="#" class="nav-link">Insights</a></li>
                              <li class="nav-item"><a href="#" class="nav-link">Profile Settings</a></li>
                              <li class="nav-item"><a href="my-ads.html" class="nav-link ">My Ads</a></li>
                              <li class="nav-item"><a href="#" class="nav-link">Messagess</a></li>
                              <li class="nav-item"><a href="payments.html" class="nav-link">Payments</a></li>
                              <li class="nav-item"><a href="favourites.html" class="nav-link">My Favourites</a></li>
                              <li class="nav-item"><a href="#" class="nav-link ">Privacy Settings</a></li>
                              <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                          </ul>
                      </nav>
                  </div>

<!---post add details form 1 step 1---->



<div class="col-md-8 block-9 mb-md-5">
          <form action="#" class="bg-light p-5 contact-form">
            <h5>Follow the steps below to post you House ad </h5>

<div class="postListing__section">
<div class="grid">
<div class="field">
<div class="make-of-car"
<label class="">Property Type <span class="required-symbol">*</span><select id="makes" class="js-ajaxDrill" data-url="..." data-target="#properytype" required="" data-parsley-errors-messages-disabled="" name="make_id"><option value="" selected="selected">Please Select</option><option value="57">House</option><option value="39">Apartment</option><option value="54">TownHouse</option><option value="19">Commercial</option><option value="38">Industry</option></optgroup></select>
</label>
</div>
<br>
</div>
</div>
</div>
<br>
<div class="grid">
<div class="field">
<label class=""> Series <select id="series" data-parsley-errors-messages-disabled="" name="series_id"><option value="" selected="selected">Please Select</option></select>
</label>
</div>
<br>
<div class="field">
<label class=""> Year <span class="required-symbol">*</span><select id="year_of_manufacture" class="weight year_of_manufacture" required="required" matrix_option="year_of_manufacture" data-parsley-errors-messages-disabled="" name="year_of_manufacture" aria-required="true" score="2"><option value="" selected="selected">Please Select</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option></select>
</label>
</div>
</div>
<br>
<div class="grid">
<div class="field">
<label class=""> Mileage (km) <span class="required-symbol">*</span><input id="mileage" class="weight mileage" required="" matrix_option="mileage" step="any" data-parsley-error-message="Client Mileage" name="mileage" type="number" score="2">
</label>
</div>
<br>
<div class="field">
<label class=""> Body Type <span class="required-symbol">*</span><select id="body_type_id" required="" class="weight body_type_id" matrix_option="body_type_id" data-parsley-errors-messages-disabled="" name="body_type_id" score="1"><option value="" selected="selected">Please Select</option><option value="2">Saloons</option><option value="3">Hatchbacks</option><option value="4">4 Wheel Drives &amp; SUVs</option><option value="5">Station Wagons</option><option value="6">Pickups</option><option value="7">Motorbikes</option><option value="8">Convertibles</option><option value="9">Buses, Taxis and Vans</option><option value="10">Trucks</option><option value="11">Machinery and Tractors</option><option value="12">Trailers</option><option value="13">Minis</option><option value="15">Coupes</option><option value="16">Quad Bikes</option><option value="14">Other</option></select>
</label>
</div>
</div>
<!--- End of post add details form 1 step 1---->

<br>

<!---car features--->
<hr class="wizard-divider">
<h2 class=""data-toggle="#carFeatures">
Add Features (improve ad quality)
</h2>
<div id="carFeatures">
<div class="grid">
<div class="gold-border"> 


<div class="fuel_type gold-border">
<fieldset>
Fuel Type
<div class="form-toggle-select">
<label for="fuel_1">
<input class="weight_radio fuel_type_id" matrix_option="fuel_type_id" id="fuel_1" data-parsley-error-message="Client Fuel Type" name="fuel_type_id" type="radio" value="1">
<span class="slider">Petrol</span>
</label>
<label for="fuel_2">
<input class="weight_radio fuel_type_id" matrix_option="fuel_type_id" id="fuel_2" data-parsley-error-message="Client Fuel Type" name="fuel_type_id" type="radio" value="2">
<span class="slider">Diesel</span>
</label>
<label for="fuel_3">
<input class="weight_radio fuel_type_id" matrix_option="fuel_type_id" id="fuel_3" data-parsley-error-message="Client Fuel Type" name="fuel_type_id" type="radio" value="3">
<span class="slider">Hybrid</span>
</label>
<label for="fuel_5">
<input class="weight_radio fuel_type_id" matrix_option="fuel_type_id" id="fuel_5" data-parsley-error-message="Client Fuel Type" name="fuel_type_id" type="radio" value="5">
<span class="slider">Diesel-Hybrid</span>
</label>
<label for="fuel_6">
<input class="weight_radio fuel_type_id" matrix_option="fuel_type_id" id="fuel_6" data-parsley-error-message="Client Fuel Type" name="fuel_type_id" type="radio" value="6">
<span class="slider">Electric</span>
</label>
<label for="fuel_4">
<input class="weight_radio fuel_type_id" matrix_option="fuel_type_id" id="fuel_4" data-parsley-error-message="Client Fuel Type" name="fuel_type_id" type="radio" value="4">
<span class="slider">Other</span>
</label>
</div>
</div>
</div>
</div>
</fieldset>
<hr class="wizard-divider">
<div class="grid featureAddSplit">
<div class="field">
<fieldset>
Interior Type
<div class="form-toggle-select">
<label for="interior_1">
<input class="weight_radio interior_type_id" matrix_option="interior_type_id" id="interior_1" data-parsley-error-message="Client Interior Type" name="interior_type_id" type="radio" value="1">
<span class="slider">Cloth</span>
</label>
<label for="interior_2">
<input class="weight_radio interior_type_id" matrix_option="interior_type_id" id="interior_2" data-parsley-error-message="Client Interior Type" name="interior_type_id" type="radio" value="2">
<span class="slider">Leather</span>
</label>
<label for="interior_3">
<input class="weight_radio interior_type_id" matrix_option="interior_type_id" id="interior_3" data-parsley-error-message="Client Interior Type" name="interior_type_id" type="radio" value="3">
<span class="slider">Other</span>
</label>
</div>
</fieldset>
</div>
</div>
<div class="grid">
<div class="field">
<label class=""> Colour Type <select id="colour_type_id" class="weight colour_type_id" matrix_option="colour_type_id" data-parsley-errors-messages-disabled="" name="colour_type_id"><option value="" selected="selected">Please Select</option><option value="2">White</option><option value="3">Silver</option><option value="11">Green</option><option value="12">Dark Green</option><option value="15">Blue</option><option value="16">Dark Blue</option><option value="14">Brown</option><option value="17">Black</option><option value="1">Yellow</option><option value="4">Red</option><option value="5">Maroon</option><option value="6">Purple</option><option value="7">Pink</option><option value="8">Orange</option><option value="9">Grey</option><option value="10">Dark Grey</option><option value="13">Gold</option><option value="19">Beige</option><option value="20">Pearl</option><option value="18">Other</option></select>
</label>
</div>
<div class="field">
<label class=""> Engine size (cc) <input id="engine_size" class="weight engine_size" matrix_option="engine_size" step="any" data-parsley-error-message="Client Engine Size" name="engine_size" type="number">
</label>
</div>
</div>
<div class="field">
<label for="description" class="">
Description
<textarea id="description" rows="10" maxlength="600" data-char-count class="weight description" matrix_option="description" data-parsley-error-message="Contact information should not be included in the description. Please remove what appears to be a phone number or email address." name="description" cols="46"></textarea>
</label>
</div>
<hr class="wizard-divider">
<h2 class="select-vehicle-features">Vehicle features</h2>
<p class="text-center">We&#039;ve pre-selected the common features for you</p>
<br>
<div class="postListing__section" id="carFeaturesTarget">
<div class="grid featureAddSplit">
<label for="2" class="postListing__featureAdd switch">
<input id="2" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="2">
<span class="slider">Airbags</span>
</label>
<label for="24" class="postListing__featureAdd switch">
<input id="24" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="24">
<span class="slider">Traction Control</span>
</label>
<label for="23" class="postListing__featureAdd switch">
<input id="23" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="23">
<span class="slider">Tinted Windows</span>
</label>
<label for="16" class="postListing__featureAdd switch">
<input id="16" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="16">
<span class="slider">Power Steering</span>
</label>
<label for="11" class="postListing__featureAdd switch">
<input id="11" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="11">
<span class="slider">Electric Windows</span>
</label>
<label for="10" class="postListing__featureAdd switch">
<input id="10" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="10">
<span class="slider">Electric Mirrors</span>
</label>
<label for="9" class="postListing__featureAdd switch">
<input id="9" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="9">
<span class="slider">Cup Holders</span>
</label>
<label for="6" class="postListing__featureAdd switch">
<input id="6" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="6">
<span class="slider">Armrests</span>
</label>
<label for="5" class="postListing__featureAdd switch">
<input id="5" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="5">
<span class="slider">Anti-Lock Brakes</span>
</label>
<label for="1" class="postListing__featureAdd switch">
<input id="1" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="1">
<span class="slider">Air Conditioning</span>
</label>
<label for="4" class="postListing__featureAdd switch">
<input id="4" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="4">
<span class="slider">AM/FM Radio</span>
</label>
<label for="3" class="postListing__featureAdd switch">
<input id="3" matrix_option="feature_id[]" score="1" class="feature_checkboxes" checked="checked" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="3">
<span class="slider">Alloy Wheels</span>
</label>
<hr class="wizard-divider">
<div style="clear:both"></div>
<h2 class="select-vehicle-features">Select extra vehicle features</h2>
<label for="7" class="postListing__featureAdd switch">
<input id="7" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="7">
<span class="slider">Bullbar</span>
</label>
<label for="29" class="postListing__featureAdd switch">
<input id="29" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="29">
<span class="slider">Thumbstart Ignition</span>
</label>
<label for="28" class="postListing__featureAdd switch">
<input id="28" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="28">
<span class="slider">Xenon Lights</span>
</label>
<label for="26" class="postListing__featureAdd switch">
<input id="26" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="26">
<span class="slider">Wheel Locks</span>
</label>
<label for="25" class="postListing__featureAdd switch">
<input id="25" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="25">
<span class="slider">Turbo Charged</span>
</label>
<label for="22" class="postListing__featureAdd switch">
<input id="22" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="22">
<span class="slider">Sunroof</span>
</label>
<label for="20" class="postListing__featureAdd switch">
<input id="20" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="20">
<span class="slider">Spoilers</span>
</label>
<label for="19" class="postListing__featureAdd switch">
<input id="19" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="19">
<span class="slider">Sidesteps</span>
</label>
<label for="18" class="postListing__featureAdd switch">
<input id="18" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="18">
<span class="slider">Roof Rack</span>
</label>
<label for="17" class="postListing__featureAdd switch">
<input id="17" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="17">
<span class="slider">Rear Camera</span>
</label>
<label for="15" class="postListing__featureAdd switch">
<input id="15" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="15">
<span class="slider">Keyless Entry</span>
</label>
<label for="14" class="postListing__featureAdd switch">
<input id="14" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="14">
<span class="slider">Front Fog Lamps</span>
</label>
<label for="13" class="postListing__featureAdd switch">
<input id="13" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="13">
<span class="slider">Fog Lights</span>
</label>
<label for="8" class="postListing__featureAdd switch">
<input id="8" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="8">
<span class="slider">CD Player</span>
</label>
<hr class="wizard-divider">
<div style="clear:both"></div>
<h2 class="select-vehicle-features">Uncommon vehicle features</h2>
<label for="21" class="postListing__featureAdd switch">
<input id="21" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="21">
<span class="slider">Spotlight</span>
</label>
<label for="27" class="postListing__featureAdd switch">
<input id="27" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="27">
<span class="slider">Winch</span>
</label>
<label for="12" class="postListing__featureAdd switch">
<input id="12" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="12">
<span class="slider">External Winch</span>
</label>
<label for="30" class="postListing__featureAdd switch">
<input id="30" matrix_option="feature_id[]" score="1" class="feature_checkboxes" data-parsley-error-message="Client Feature[]" name="feature_id[]" type="checkbox" value="30">
<span class="slider">Bulletproof</span>
</label>
</div>
</div>
</div>



<!--- Step 1 of posting car ad---->
<hr class="wizard-divider">

<div class="col-md-8 block-9 mb-md-5">
<div class="grid">
</div>
<div class="listing_attributes">
</div>
</div>
<div class="photo-details">
<div class="preview-files">
<h2>Your Car Pictures</h2>
<p class="text-center">Attach High Quality pictures of your Vehicle inorder to attract potential buyers. Follow this order. 
<li><b>1.The Front side of the car.</b></li> 
<li><b>2.Both front and back seats.</b></li> 
<li><b>3.An image of the whole dashboard.</b> </li>
<li><b>4.An image of the tires/rims.</b> </li>
<li><b>5.An image of both sides of the car right and left.</b></li> 
<li><b>6.Rear of the car.</b></li>
<li><b>7.The Engine bay</b></li>
<li><b>NB* If any major dents/cracks kindly attach an image to let potential buyers be aware.</b></li>
</p>
</div>
<br>
<input id="browse" type="file" onchange="previewFiles()" multiple>
<div id="preview"></div>


</div>



</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>



<!---End of step 1 of posting house ad---->

@endsection