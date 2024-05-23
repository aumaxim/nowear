@extends('layouts.app')

@section('content')
    <div id="app">
        <v-app>
            <v-container class="fill-height" fluid>
                <v-card>
                    <v-card-text>
                        <v-form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf
                            <v-file-input id="image" name="image" v-model="image" label="Upload image" accept="image/*"
                                prepend-icon="mdi-camera" @change="handleImageChange" required></v-file-input>
                            <v-img :src="imagePreview" v-if="imagePreview" max-width="200"></v-img>
                            <v-text-field prepend-icon="mdi-lock" name="description" label="Description" type="text"
                                required></v-text-field>
                            <v-btn type="submit">
                                {{ __('Post') }}
                            </v-btn>
                        </v-form>
                    </v-card-text>
                </v-card>
            </v-container>
        </v-app>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
