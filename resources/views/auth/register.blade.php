<x-guest-layout>

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Register</span></li>
				</ul>
			</div>
			<div class="row">
				<center><h3>		Vous êtes sur le point de créer votre Compte sur notre site web,
					veuillez renseigner les informations ci-dessous :	</br></h3></center>
						
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">		
			
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">
        <form class="form-stl" method="POST" name="frm-login"  action="{{ route('register') }}">
        @csrf

									<fieldset class="wrap-title">
										<h3 class="form-title">Create an account</h3>
										<h4 class="form-subtitle">Personal infomation</h4>
									</fieldset>									
									<fieldset class="wrap-input">
										<label for="frm-reg-lname">{{ __('Name') }}*</label>
										<input  id="frm-reg-lname" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-email">{{ __('Email') }}*</label>
										<input type="email" id="frm-reg-email"  name="email" :value="old('email')" required  placeholder="Email address">
									</fieldset>
									<fieldset class="wrap-functions ">
										<label class="remember-field">
											<input name="newletter" id="new-letter" value="forever" type="checkbox"><span>Sign Up for Newsletter</span>
										</label>
									</fieldset>
									<fieldset class="wrap-title">
										<h3 class="form-title">Login Information</h3>
									</fieldset>
									<fieldset class="wrap-input item-width-in-half left-item ">
										<label for="frm-reg-pass">{{ __('Password') }} *</label>
										<input type="password" class="block mt-1 w-full" name="password" required autocomplete="new-password"  id="frm-reg-pass">
									</fieldset>
									<fieldset class="wrap-input item-width-in-half ">
										<label for="frm-reg-cfpass">{{ __('Confirm Password') }} *</label>
										<input id="frm-reg-cfpass" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirm Password">
									</fieldset>
                                    
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <br>
                <x-jet-button class="ml-4 btn btn-sign">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
          
								</form>
							</div>											
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
</x-guest-layout>
