<div class="main-navigation">
    <v-toolbar flat class="primary-navbar white">
        <v-toolbar-title class="text-uppercase grey--text">
            <a href="/">
                <span class="font-weight-light">Hind</span>
                <span class="font-weight-medium">Edu</span>
            </a>
        </v-toolbar-title>
        <v-autocomplete
            v-model="select"
            cache-items
            single-line
            return-object
            :loading="isLoading"
            hide-no-data
            hide-details
            label="Search any anything"
            prepend-inner-icon="search" 
            class="mx-4 search-box"
            outline
            flat
        >
        </v-autocomplete>

        <v-spacer></v-spacer>

        <div class="hidden-sm-and-down">
            <v-btn flat color="grey">
                <span>My Career</span>
            </v-btn>

            <!-- dropdown menu -->
            <v-menu offset-y>
                <v-btn flat slot="activator" color="grey">
                    <span>More</span>
                    <v-icon right>expand_more</v-icon>
                </v-btn>
                <v-list>
                    <v-list-tile href="/">
                        <v-list-tile-title>dfsdfdf</v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-menu>

    <!-- LoggedIn User account link -->
            @if (Auth::guest())
                <v-btn outline color="primary" slot="activator" href="{{route('login')}}">Log In</v-btn>
                <v-btn color="primary" slot="activator" href="{{route('register')}}"><span>Sign Up</span></v-btn> 
            @else
                <v-menu offset-y>
                    <v-avatar size="40" slot="activator"  color="primary white--text">
                        {{ Str::limit(Auth::user()->name, 1, $end='') }}
                    </v-avatar>
                    <v-list class="mt-2">
                        <v-list-tile href="{{route('student-dashboard')}}">
                            <v-icon size="22" class="mr-1">home</v-icon>
                            <v-list-tile-title>Admin Dashboard</v-list-tile-title>
                        </v-list-tile>

                        <v-divider></v-divider>

                        <v-list-tile
                            href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        >
                            <v-icon>exit_to_app</v-icon>
                            <v-list-tile-title>Logout</v-list-tile-title>
                        </v-list-tile>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                    </v-list>
                </v-menu>    
            @endif
        
        </div>
        
    </v-toolbar>

    
</div>