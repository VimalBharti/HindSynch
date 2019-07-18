<v-flex md3 hidden-sm-and-down white class="sidebar">
    <v-list>
        <v-layout column align-center>
            <v-flex class="mt-2 text-xs-center">
                <v-avatar size="180" >
                    <img src="https://picsum.photos/id/1/200/200">
                </v-avatar>
                <h2 class="headline mt-4">
                    <span class="primary--text">@</span>HindSynch  
                    <!-- <router-link to = "/user/profile">
                        <v-avatar size="28"><v-icon class="primary" dark size="19">edit</v-icon></v-avatar>
                    </router-link> -->
                </h2>
                <v-btn class="mt-1 mb-4 primary" round small depressed href="{{route('student-profile')}}">
                    My Profile
                </v-btn>
            </v-flex>
        </v-layout>

        <v-divider></v-divider>

        <v-list-tile @click="component = 'home'">
            <v-list-tile-action>
                <v-icon>apps</v-icon>
            </v-list-tile-action>
            <v-list-tile-title>Dashboard</v-list-tile-title>
        </v-list-tile>

        <v-divider></v-divider>
        
        <v-list-tile href="{{route('student-resume')}}">
            <v-list-tile-action>
                <v-icon>insert_chart_outlined</v-icon>
            </v-list-tile-action>
            <v-list-tile-title>My Resume</v-list-tile-title>
        </v-list-tile>

        <v-list-group no-action prepend-icon="build" value="true">
            <template v-slot:activator>
                <v-list-tile>
                    <v-list-tile-content>
                        <v-list-tile-title>Garage (Practice)</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </template>

            <v-list-tile @click="component = 'interview'">
                <v-icon class="mr-1">group</v-icon>
                <v-list-tile-content >
                    <v-list-tile-title>Practice Interview</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile @click="component = 'apptitude'">
                <v-icon class="mr-1">dvr</v-icon>
                <v-list-tile-content >
                    <v-list-tile-title>Apptitude</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile @click="component = 'gd'">
                <v-icon class="mr-1">video_call</v-icon>
                <v-list-tile-content >
                    <v-list-tile-title>Group Discussion</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile @click="component = 'communication'">
                <v-icon class="mr-1">keyboard_voice</v-icon>
                <v-list-tile-content >
                    <v-list-tile-title>Communication</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile @click="component = 'playground'">
                <v-icon class="mr-1">code</v-icon>
                <v-list-tile-content >
                    <v-list-tile-title>Code Ground</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list-group>

        <v-list-tile href="{{route('student-resume')}}">
            <v-list-tile-action>
                <v-icon>insert_chart_outlined</v-icon>
            </v-list-tile-action>
            <v-list-tile-title>Live Interview</v-list-tile-title>
        </v-list-tile>

        <v-list-group no-action prepend-icon="account_balance">
            <template v-slot:activator>
                <v-list-tile>
                    <v-list-tile-content>
                        <v-list-tile-title>Courses</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </template>

            <v-list-tile @click="component = 'courses'">
                <v-list-tile-content >
                    <v-list-tile-title>Programming</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile @click="component = 'courses'">
                <v-list-tile-content >
                    <v-list-tile-title>Personality Development</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile @click="component = 'courses'">
                <v-list-tile-content >
                    <v-list-tile-title>Communication</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list-group>
    
        <v-list-tile>
            <v-list-tile-action>
                <v-icon>mail</v-icon>
            </v-list-tile-action>
            <v-list-tile-title>Contact Us</v-list-tile-title>
        </v-list-tile>
        <v-list-tile>
            <v-list-tile-action>
                <v-icon>supervisor_account</v-icon>
            </v-list-tile-action>
            <v-list-tile-title>FAQ</v-list-tile-title>
        </v-list-tile>
    </v-list>
</v-flex>