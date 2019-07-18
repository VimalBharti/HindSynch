@extends('layouts.master')

@section('content')
<div class="container main-login-page">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <v-layout>
        <v-flex xs12 sm6 offset-sm3>

            <!-- login as a links -->
            <v-layout row class="login-as-a">
                <v-flex>
                    <v-btn color="primary" block class="ma-0 py-3" href="/login">
                        Student
                    </v-btn>
                </v-flex>
                <v-flex>
                    <v-btn color="grey" outline block class="ma-0 py-3" href="/college/login">
                        College
                    </v-btn>
                </v-flex>
                <v-flex>
                    <v-btn color="grey" outline block class="ma-0 py-3" href="/teacher/login">
                        Tutor
                    </v-btn>
                </v-flex>
                <v-flex>
                    <v-btn color="grey" outline block class="ma-0 py-3" href="/company/login">
                        Company
                    </v-btn>
                </v-flex>
            </v-layout>


            <v-card class="pa-4">
                <v-card-title primary-title>
                    <div>
                        <h3 class="headline mb-0">LOG IN AS STUDENT</h3>
                        <h4>Unleash Your Potential and Accelerate Your Career</h4>
                        <div>Get career guidance, get coached by experts, secure your dream job and build a long-lasting career. All with Board Infinity.</div>
                    </div>
                </v-card-title>

                <form method="POST" action="{{ route('login') }}" class="pa-3">
                    @csrf
                    <v-text-field
                        name="email"
                        v-validate="'required|email'"
                        label="E-mail"
                        data-vv-name="email"
                        required
                        class="@error('email') is-invalid @enderror"
                    ></v-text-field>

                    <v-text-field   
                        name="password"
                        label="Password"
                        counter
                    ></v-text-field>

                    <v-flex md6 class="text-lg-left mt-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </v-flex>

                    <v-flex class="mt-4">
                        <v-btn color="primary" type="submit" block outline>Login</v-btn>
                    </v-flex>
                    
                </form>
            </v-card>
            <v-flex class="text-md-center mt-4">
                @if (Route::has('password.request'))
                    <a class="btn btn-link grey--text" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </v-flex>
        </v-flex>
    </v-layout>

</div>
@endsection