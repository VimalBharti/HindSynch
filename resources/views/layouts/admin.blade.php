<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard - HindSynch</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')

</head>
<body>
    <div id="app">
        <v-app>
            @include('_includes.partials.AdminNav')

            <div class="student-dashboard">
                <v-layout row wrap>
                    <!-- sidebar -->
                    @include('_includes.student.sidebar')

                    <v-flex md9 xs12>
                        @yield('content')
                    </v-flex>

                </v-layout>
            </div>

            @include('_includes.partials.MainFooter')
        </v-app>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
</body>
</html>
