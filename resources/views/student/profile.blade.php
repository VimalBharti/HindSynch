@extends('layouts.master')

@section('content')

<div class="edit-account container">
        <v-layout>

            <v-flex xs12 md3 class="social-account white pa-4">
                <h3 class="sunheading">Social Accounts</h3>
                <p class="caption font-weight-light mb-5">Add or update your social accounts. It will help your profile searching. </p>

                <v-layout row>
                    <v-flex>
                        <v-form>
                            <v-text-field
                                label="facebook"
                                prefix="facebook.com/"
                            ></v-text-field>
                            <v-text-field
                                label="LinkedIn"
                                prefix="linkedin.com/"
                            ></v-text-field>
                            <v-text-field
                                label="Twitter"
                                prefix="twitter.com/"
                            ></v-text-field>
                        </v-form>
                    </v-flex>
                </v-layout>

                <v-layout>
                    <v-flex>
                        <v-btn>Save</v-btn>
                    </v-flex>
                </v-layout>
            </v-flex>

            <v-flex xs12 md6 class="white">
                <v-card>
                    <v-layout>
                        <v-flex text-xs-center mt-3>
                            <v-avatar size="100">
                                <img src="https://picsum.photos/id/1/200/200">
                            </v-avatar>
                        </v-flex>
                    </v-layout>

                    <v-form>
                        @foreach($users as $user)
                        <v-container>
                            <v-layout>
                                <v-flex xs12 md6>
                                    <v-text-field
                                        counter="12"
                                        label="First Name"
                                        value="{{$user->name}}"
                                        required
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 md6>
                                    <v-text-field
                                        :counter="12"
                                        label="Last Name"
                                        required
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>

                            <v-layout>
                                <v-flex xs12 md6>
                                    <v-text-field
                                        label="E-mail"
                                        required
                                        value="{{$user->email}}"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 md6>
                                    <v-text-field
                                        label="Username"
                                        required
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>

                            <v-layout>
                                <v-flex xs12>
                                    <v-text-field
                                        label="Phone Number"
                                        mask="phone"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex>
                                   <!-- verfiy -->
                                   <v-dialog v-model="dialog" persistent max-width="550">
                                        <template v-slot:activator="{ on }">
                                            <v-btn depressed outline v-on="on">Verfiy</v-btn>
                                        </template>

                                        <v-card class="flat pa-5">
                                            <v-card-title class="headline">Verify your phone number</v-card-title>
                                            <v-card-text>We want to verfiy your number so we know it's really you. HindSynch will send a text message with a verfication code to your phone. If you don't receive the code, please wait for 1 minute to edit the number or try again.</v-card-text>

                                            <v-container>
                                                <v-layout>
                                                    <v-flex xs2>
                                                        <v-select
                                                            single-line
                                                            menu-props="auto"
                                                            label="+91"
                                                        ></v-select>
                                                    </v-flex>
                                                    <v-flex xs8>
                                                        <v-text-field
                                                            label="Phone number"
                                                        ></v-text-field>
                                                    </v-flex>
                                                    <v-flex xs3>
                                                        <v-btn depressed>Verify</v-btn>
                                                    </v-flex>
                                                </v-layout>

                                                <v-layout>
                                                    <v-flex>
                                                        <v-text-field
                                                            label="Enter Code"
                                                        ></v-text-field>
                                                    </v-flex>
                                                </v-layout>
                                            </v-container>

                                            <v-card-actions>
                                            <v-btn color="grey" outline @click="dialog = false">Cancel</v-btn>
                                            <v-btn color="green darken-1" outline @click="dialog = false">Done</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-dialog>
                                </v-flex>
                            </v-layout>

                            <v-layout>
                                <v-flex xs12>
                                    <v-textarea
                                        auto-grow
                                        label="Bio"
                                        rows="1"
                                    ></v-textarea>
                                </v-flex>
                            </v-layout>

                            <v-layout>
                                <v-btn 
                                    color="primary"
                                    class="white--text"
                                    depressed
                                >Update</v-btn>
                            </v-layout>

                        </v-container>
                        @endforeach
                    </v-form>
                </v-card>

                <v-card class="my-5">
                    <v-form>
                        <v-container>
                            <v-layout>
                                <v-flex xs12>
                                    <v-text-field
                                        name="new-password"
                                        label="New Password"
                                        hint="At least 8 characters"
                                        counter
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>

                            <v-layout>
                                <v-btn outline color="grey">Clear</v-btn>
                                <v-btn outline color="primary">Update</v-btn>
                            </v-layout>

                        </v-container>
                    </v-form>
                </v-card>

            </v-flex>

            <v-flex xs12 md3 class="social-account white pa-4">
                <h3 class="sunheading">My Skills</h3>
                <p class="caption font-weight-light mb-5">Add or update your social accounts. It will help your profile searching. </p>

                <v-layout>
                    <v-flex xs4 mb-2>
                        <h3>Python</h3>
                        <v-text-field
                        ></v-text-field>
                    </v-flex>
                    <v-flex xs8 class="text-xs-right">
                        <v-progress-circular
                            value="76"
                            :width="12"
                            :size="75"
                            color="primary"
                        >76</v-progress-circular>
                    </v-flex>
                </v-layout>

                <v-layout>
                    <v-flex>
                        <v-btn small>Add New</v-btn>
                        <v-btn small>Save</v-btn>
                    </v-flex>
                </v-layout>
            </v-flex>

        </v-layout>
    </div>

@endsection