@extends('layouts.front_end')
@section('title', 'Smart Garage Support | login')
@section('content')

        <div class="card">
            <div class="card-body">
                {{-- <h3 class="text-center m-0"><a href="index.html" class="logo logo-admin"><img src="assets/images/logo-text.jpg" height="65" alt="logo"></a></h3> --}}
                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                    <p class="text-muted text-center">{{ __('Sign in to continue') }}</p>
                    
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-form-label text-center">{{ __('E-Mail Address') }}</label>

                            <div >
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                 
                       
                       
                        <div class="form-group row m-t-20">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline" {{ old('remember') ? 'checked' : '' }}> 
                                <label class="custom-control-label" for="customControlInline">Remember me</label></div>
                            </div>
                            <div class="col-6 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button></div>
                        </div>
               
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20"><a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a></div>
                        </div>
                    </form>
                    
                    
            </div>
            </div></div>
@section('extra')       
            <div class="m-t-40 text-center">
            {{-- <p>Don't have an account ? <a href="{{url('register')}}" class="text-primary">Signup Now</a></p> --}}
            <p>© 2019 Smart Garage Support. Crafted with <i class="mdi mdi-heart text-danger"></i> by jules & i3</p>
        </div>
@endsection
@endsection
