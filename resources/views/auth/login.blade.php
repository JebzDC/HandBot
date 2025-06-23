<x-guest-layout>

    <style>
        .links{
                position: relative;
                text-align: center;
                font-weight: bold;
                font-size: .8rem;
                margin-bottom: 10px;
                
                }
                a{
                color: #800000;
                border: none;
                background-color: transparent;
                font-size: .8rem;
                font-weight: bold;
                margin-top: 0px;
                text-decoration: none;
                padding-top: 0%;
                }
                a:hover{
                text-decoration: underline;
                color: #000080;
                cursor: pointer;
                }

                .double-border {
                    position: relative;
                    padding-bottom: 15px;
                }

                .double-border::after {
                    content: '';
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    height: 15px;
                    background: linear-gradient(to right, navy 50%, maroon 50%);
                }
    </style>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="double-border">
    <form method="POST" action="{{ route('login') }}">
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div>
                    <img src="{{ asset('assets/image/chatbot.png') }}" alt="" style="height:30px;">
                </div>
            </div>

            <h5 style="text-align:center; font-size: 20px; font-weight: bold; padding-bottom: 20px"> HANDBOT LOGIN FORM</h5>
        @csrf

        <!-- Email Address -->
        <div>
        
            <x-input-label for="email" :value="__('Email')" />
            <i class="fas fa-envelope"></i>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        
        <div class="block mt-4">
       
            <!-- Remember Me
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
           -->
           <a class="links underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
             </a>
               
             <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY')}}"></div>
             <x-input-error :messages="$errors->get('g-recaptcha-response')" class="mt-2" />
        </div>
        <div class="flex justify-end items-center ">
        
        </div>
        <div class="flex items-center justify-center mt-4">

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        <div class="flex items-center justify-center mt-4">
        <div class="links ">
                    <p>Don't have an account?</p>
                    <a href="{{ url('/register') }}">Sign up</a>
                </div>
        </div>
    </form>
    </div>
    <footer class="flex items-center justify-center text-sm text-black dark:text-white/70" style="margin-top:15px">
        <img src="{{ asset('assets/image/dssc_logo.png') }}" alt="Icon" style="height:30px; margin-right:10px;">
        <h1>DAVAO DEL SUR STATE COLLEGE 2024</h1>
    </footer>
   
</x-guest-layout>
