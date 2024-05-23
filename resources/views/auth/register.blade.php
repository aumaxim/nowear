@extends('layouts.app')

@section('content')
    <div id="app">
        <v-app>
            <v-container class="col-md-8">
                <v-form method="POST" action="{{ route('register') }}">
                    @csrf
                    <v-text-field id="name" prepend-icon="person" name="name" label="name"
                        type="name"></v-text-field>

                    <v-text-field id="email" prepend-icon="person" name="email" label="email"
                        type="email"></v-text-field>
                    <v-container class="col-md-6">
                        <v-text-field id="password" prepend-icon="lock" name="password" label="Password" type="password"
                            class="@error('password') is-invalid @enderror"></v-text-field>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </v-container>

                    <v-text-field id="password-confirm" prepend-icon="lock" name="password_confirmation"
                        label="password-confirm" type="password-confirm"></v-text-field>
                    <v-container>
                        <v-btn type="submit">
                            {{ __('Register') }}
                        </v-btn>
                    </v-container>
                </v-form>
            </v-container>
        </v-app>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
