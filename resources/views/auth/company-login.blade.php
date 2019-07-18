@extends('layouts.master')

@section('content')
<div class="container main-login-page">

    <v-layout>
        <v-flex xs12 sm6 offset-sm3>

            <!-- login as a links -->
            <v-layout row class="login-as-a">
                <v-flex>
                    <v-btn color="grey" outline block class="ma-0 py-3" href="/login">
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
                    <v-btn color="primary" block class="ma-0 py-3" href="/company/login">
                        Company
                    </v-btn>
                </v-flex>
            </v-layout>


            <v-card class="pa-4">
                <v-card-title primary-title>
                    <div>
                        <h3 class="headline mb-0">LOG IN AS COMPANY</h3>
                        <h4>Improve Placements with Business Ready Students</h4>
                        <div>Help provide all students with professional training by experts before venturing into a job. Improve your industry connections and improve placements.</div>
                    </div>
                </v-card-title>

                <form method="POST" action="{{ route('company.login.submit') }}" class="pa-3">
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