@extends('layouts.app')

@section('content')
    <div id="app">
        <v-app>
            <v-container class="fill-height" fluid>
                <v-card>
                    <v-card-text>
                        <v-list dense>
                            <v-list-item>
                                <v-list-item-content>
                                    <v-list-item-title>Hello
                                        {{ Auth::user()->name }} welcome to the home page
                                    </v-list-item-title>
                                </v-list-item-content>
                        </v-list>
                    </v-card-text>
                </v-card>
            </v-container>
        </v-app>

    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
