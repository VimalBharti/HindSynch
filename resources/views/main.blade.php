@extends('layouts.master')

@section('content')
<div class="main-homepage">
    <v-layout row class="hero-area">
        <v-img
        :src="`https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80`"
        :lazy-src="`https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80`"
        aspect-ratio="1"
        class="grey lighten-2"
        >
        </v-img>
    </v-layout>

    <!-- Contunue Watching -->
    <v-container grid-list-lg class="py-5 continue-watching">
        <h2>Continue Watching</h2>
        <v-layout wrap row>
            <v-flex cs12 md4 lg3 xl3>
                <v-img 
                src="https://source.unsplash.com/user/erondu/1600x900"
                class="text-xs-center continue-watch"
                height="150px"
                >
                <v-icon 
                    class="white--text fill-height play-icon" 
                    size="40"
                >
                    play_circle_filled
                </v-icon>
                </v-img>

                <v-progress-linear 
                value="50" 
                class="my-0"
                height="5"
                ></v-progress-linear>
                <h4 class="grey--text caption my-1">Rest API</h4>
                <h3 class="mb-0 font-weight-regular">Tip to Clear Group Discussion in Interview</h3>
            </v-flex>
        </v-layout>
    </v-container>

    <!-- Course by Category -->
    <v-container grid-list-lg class="top-free-courses py-5">
      
      <v-layout justify-space-between>
         <h2 class="ml-2">Programming Courses</h2>
          <v-btn
            small
            round
          >
            Show all
          </v-btn>
      </v-layout>
      
      <v-layout wrap>

        <v-flex xs3>
          <v-list>
            <v-list-tile>
                <v-list-tile-title>C++ Language</v-list-tile-title>
            </v-list-tile>
            <v-list-tile>
                <v-list-tile-title>Python Language</v-list-tile-title>
            </v-list-tile>
            <v-list-tile>
                <v-list-tile-title>R Language</v-list-tile-title>
            </v-list-tile>
            <v-list-tile>
                <v-list-tile-title>Laravel</v-list-tile-title>
            </v-list-tile>
            <v-list-tile>
                <v-list-tile-title>Node JS</v-list-tile-title>
            </v-list-tile>
            <v-list-tile>
                <v-list-tile-title>Vue JS</v-list-tile-title>
            </v-list-tile>
          </v-list>
        </v-flex>

        <v-flex xs9>
          <v-layout wrap>
            <v-flex md4 mb-4>
              <v-img
                src="https://images.unsplash.com/photo-1510125964506-dc5a14f3ef4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                height="150px"
              ></v-img>
              <h4 class="grey--text caption mt-1">Rest API</h4>
              <h3 class="mb-0 font-weight-regular">Course one</h3>

              <div class="course-rating">
                <span class="secondary--text caption">
                  4.3
                  <v-icon size="14">star</v-icon>
                </span>
                <span class="grey--text caption">
                  (234 ratings)
                </span>
              </div>     
              
              <v-layout>
                <v-flex>
                  <v-avatar
                    size="20"
                  >
                    <img src="https://source.unsplash.com/user/erondu/1600x900">
                  </v-avatar>
                  <span
                    class="grey--text caption"
                  > Deep Techno Inc.</span>
                </v-flex>
              </v-layout>
              
            </v-flex>
          </v-layout>
        </v-flex>
      </v-layout>
    </v-container>
    

</div>
@endsection

@section('styles')
<style>
.hero-area{ height: 380px;position: relative;}
.play-icon{opacity: 0;}
.continue-watch:hover .play-icon{opacity: 1;}
</style>
@endsection