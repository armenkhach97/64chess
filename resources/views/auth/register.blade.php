@extends('layouts.login')
@section('login')
<div class="container">  
<div class="col-md-4" >

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label>{{ __('Name') }}</label>
                <input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <label >{{ __('Email') }}</label>
                <input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <label>{{ __('Password') }}</label>
                <input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label>{{ __('Confirm Password') }}</label>
                <input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="ml-4 btn btn-success">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
