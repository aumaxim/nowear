@extends('layouts.app')

@section('content')
    <div id="app">
        <v-app>
            <v-container>
                <v-form method="POST" action="{{ route('login') }}">
                    @csrf
                    <v-text-field id="email" prepend-icon="person" name="email" label="email"
                        type="email"></v-text-field>
                    <v-text-field id="password" prepend-icon="lock" name="password" label="Password"
                        type="password"></v-text-field>
                    <v-container>
                        <v-btn type="submit">
                            {{ __('Login') }}
                        </v-btn>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </v-container>
                </v-form>
            </v-container>
        </v-app>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
