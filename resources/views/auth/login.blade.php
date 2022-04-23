
<x-guest-layout>

    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">


                                <x-jet-validation-errors class="mb-4" />

                                @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <form name="frm-login"  method="POST" action="{{ route('login') }}">
                                             @csrf

                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Log in to your account</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Email Address:</label>
                                        <input  id="frm-login-uname" 
                                            placeholder="Type your email address"
                                            type="email" name="email" :value="old('email')" required autofocus 
                                            >
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-pass">Password:</label>
                                        <input  type="password" name="password" required autocomplete="current-password"
                                            placeholder="************">
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label class="remember-field">
                                            <input class="frm-input " id="remember_me" name="remember" value="forever"
                                                type="checkbox"><span>Remember me</span>
                                        </label>
                                        @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                                    </fieldset>
                                    <x-jet-button class="ml-4 btn btn-submit">
                    {{ __('Log in') }}
                </x-jet-button>
                                            </form>
                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->

</x-guest-layout>
