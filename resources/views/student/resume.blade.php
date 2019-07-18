@extends('layouts.master')

@section('content')
<div class="my-resume container white">
    <v-layout row>
        <v-flex xs6>
            <h2>
                Willam <br>
                Micheal
            </h2>
        </v-flex>
        <v-flex xs6 text-xs-right>
            <p>
                H.No 381, <br>
                1st Floor, Sector-42 <br>
                Chandigarh, India <br>
                Vimalbharti@gmail.com <br>
                +91 - 9988776655
            </p>
        </v-flex>
    </v-layout>

    <v-divider class="my-4"></v-divider>

    <v-layout row>
        <v-flex xs8>
            <h3>About Me</h3>
            <p>A chronological resume is the standard resume format. It clearly shows off the companies you’ve worked for, and length of employment. To build it, list jobs in reverse-chronological order, starting with your current or most recent job, and then moving backward. A chronological resume typically includes a summary, work history, skills and education section in that order. Consider choosing the chronological resume format if you’re looking to stay within the same industry.</p>
        </v-flex>
        <v-flex xs4 text-xs-right>
            <v-list>
                /facebook.com/vimal.bharti
            </v-list>
            <v-list>/linkedin.com/vimal.bharti</v-list>
            <v-list>/twitter.com/vimal.bharti</v-list>
        </v-flex>
    </v-layout>

    <v-divider class="my-4"></v-divider>

    <v-layout>
        <v-flex xs6>
            <h3 class="mb-4">Experience</h3>
            <v-card-text class="pa-0">
                <v-timeline
                    align-top
                    dense
                >
                    <v-timeline-item
                        small
                        color="primary"
                    >
                        <v-layout pt-2>
                            <p>
                                <span><h4 >Experience</h4></span>
                                A chronological resume is the standard resume format. It clearly shows off the companies you’ve worked for, and length of employment. To build it, list jobs in reverse-chronological order
                            </p>
                        </v-layout>
                    </v-timeline-item>

                    <v-timeline-item
                        small
                        color="primary"
                    >
                        <v-layout pt-2>
                            <p>
                                <span><h4 >Experience</h4></span>
                                A chronological resume is the standard resume format. It clearly shows off the companies you’ve worked for, and length of employment. To build it, list jobs in reverse-chronological order
                            </p>
                        </v-layout>
                    </v-timeline-item>

                </v-timeline>
            </v-card-text>
        </v-flex>

        <v-flex xs6>
            <h3 class="mb-4">Education</h3>
            <v-card-text class="pa-0">
                <v-timeline
                    align-top
                    dense
                >
                    <v-timeline-item
                        small
                        color="primary"
                    >
                        <v-layout pt-2>
                            <p>
                                <span><h4 >Experience</h4></span>
                                A chronological resume is the standard resume format. It clearly shows off the companies you’ve worked for, and length of employment. To build it, list jobs in reverse-chronological order
                            </p>
                        </v-layout>
                    </v-timeline-item>

                    <v-timeline-item
                        small
                        color="primary"
                    >
                        <v-layout pt-2>
                            <p>
                                <span><h4 >Experience</h4></span>
                                A chronological resume is the standard resume format. It clearly shows off the companies you’ve worked for, and length of employment. To build it, list jobs in reverse-chronological order
                            </p>
                        </v-layout>
                    </v-timeline-item>

                </v-timeline>
            </v-card-text>
        </v-flex>
    </v-layout>

    <v-divider class="my-4"></v-divider>

    <v-layout>
        <h3 class="mb-4">Language & Skills</h3>
    </v-layout>
    <v-layout>
        <v-flex class="text-xs-center">
            <v-progress-circular
                :rotate="360"
                :size="100"
                :width="15"
                :value="56"
                color="teal"
                >
                56
            </v-progress-circular>
            <h3>VueJS</h3>
        </v-flex>

        <v-flex class="text-xs-center">
            <v-progress-circular
                :rotate="360"
                :size="100"
                :width="15"
                :value="15"
                color="teal"
                >
                15
            </v-progress-circular>
            <h3>Python</h3>
        </v-flex>
        
            <v-flex class="text-xs-center">
            <v-progress-circular
                :rotate="360"
                :size="100"
                :width="15"
                :value="65"
                color="teal"
                >
                65
            </v-progress-circular>
            <h3>Laravel</h3>
        </v-flex>

            <v-flex class="text-xs-center">
            <v-progress-circular
                :rotate="360"
                :size="100"
                :width="15"
                :value="80"
                color="teal"
                >
                80
            </v-progress-circular>
            <h3>HTML/CSS</h3>
        </v-flex>
    </v-layout>

</div> 
@endsection