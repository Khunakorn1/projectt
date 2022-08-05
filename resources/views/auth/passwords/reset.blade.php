@extends('layouts.master')
@section('content')
<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('password.update') }}">
                 @csrf

                 <input type="hidden" name="token" value="{{ $token }}">
                 
					<span class="login100-form-title">
                        Register
					</span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password confirmation">
						<input class="input100" type="password" name="password confirmation" placeholder="Confirm Password">
						<span class="focus-input100"></span>
					</div>
                

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        Reset Password
						</button>
					</div>

				</form>
@endsection
