@extends('layouts.kingship')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/ChauffeurService.jpg')}}');" data-stellar-background-ratio="0.5">
 
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start mb-4">
        <div class="col-lg-5 m-auto">
            <div class="card">
              <div class="card-body ">
             @if(session('message'))
                <div class="mt-3 alert alert-danger">
                 <span> {{ session('message') }} </span>
                </div>
             @endif
            <form action="{{ route('user.login')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group" >
                    <label class="label-control">email</label>
                    <input type="email" name="email" class="form-control  @error('email') is-invalid  @enderror">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group" >
                    <label class="label-control">password </label>
                    <input type="password" name="password" class="form-control  @error('password') is-invalid  @enderror">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
      </div>
                <span>
                    <input type="checkbox" class="checkbox">
                        Keep me signed in
                </span>
          <button type="submit" class="btn btn-default w-50 ml-auto">Login</button>
</form>

              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

@endsection