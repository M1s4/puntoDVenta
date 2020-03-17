@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row pt-5">
      <div class="col-3">
       
      </div>
      <div class="col-6">
        <div class="card " >
            <div class="card-header  mdb-color  rgba-blue-slight " style="background-color:#F4F4F4;color:#e0e0e0;">{{ __('Login') }}</div>
            <!-- Default form login -->
        <form class="text-center border border-light p-5" action="{{ route('login') }}">
        
            
        
            <!-- Email -->
            <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
            <!-- Password -->

           
                <input id="password" type="password" class="form-control mt-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        
            <div class="d-flex ">
                <div class="mt-2">
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox ">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label font-weight-light" for="remember">
                            {{ __('Recordar') }}
                        </label>
                       
                    </div>
                </div>
                
            </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary" style="background-color:#8F77A6!important;border:none;">
                        {{ __('Login') }}  
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Recuperar contraseña?') }}
                        </a>
                    @endif
                </div>
        
        </form>
        <!-- Default form login -->
        </div>
      </div>
      <div class="col-6">
       
      </div>
    </div>
  </div>


@endsection
