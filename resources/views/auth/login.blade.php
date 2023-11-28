<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mon-Stage</title>

        <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


        <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body>





        <main>
            <header>
                <nav>
                <div class="container">
                <div class="logo">
                 <div> <img src="{{ asset('image/logo1.png')}}" alt=""> </div>  

                <div class="links">
                <ul>
                    <li>  <a href="#" >Entreprise</a> </li>
                    <li>  <a href="#" >Candidats</a> </li>
                    <li>  <a href="#" >A propos de nous</a> </li> 
                    <li>  <a href="#" >Planifier une demo</a> </li>   
                </ul>
                </div>

                </div>
                </div>
                </nav>
                </div>
            </header>
        </main>


<br><br><br><br><br><br>

<div class="connexion">

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf


    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" 
                        type="password"
                        name="password"
                        required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" />
    </div>

    <!-- Remember Me -->
    <div>
        <label for="remember_me">
            <input id="remember_me" type="checkbox" name="remember">
            <span>{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-primary-button >
            {{ __('Log in') }}
        </x-primary-button>
    </div>
</form>




</div>
















    
</body>
    