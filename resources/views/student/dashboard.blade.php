@extends ('layouts.student')

@section('content')
<div class="user-dashboard-index">
    <v-layout row class="hero-area">
        <v-img
            :src="`https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940`"
            :lazy-src="`https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940`"
            aspect-ratio="1"
            height="250"
            class="grey lighten-2"
        >
        </v-img>
    </v-layout>
    
    <v-container grid-list-xl>

        <h2>Courses of Your Interest</h2>

        <v-layout row wrap>
            <v-flex md3 
                class="single-course"
            >
                <v-img
                    src="https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940"
                    lazy-src="https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940"
                    height="280"
                    aspect-ratio="1"
                    class="courses-thumb"
                >
                </v-img>
                <v-card flat>
                    <v-card-title>
                        Python Fundametals
                    </v-card-title>

                    <v-progress-linear
                        color="info"
                        height="5"
                        value="45"
                        class="mt-0"
                    ></v-progress-linear>
                </v-card>
            </v-flex>

        </v-layout>
    </v-container>
</div>
@endsection

@section('styles')
<style>
.sidebar{min-height: 500px;}
.my-resume-link{
    text-decoration: none;
    color: inherit;
}
</style>
@endsection