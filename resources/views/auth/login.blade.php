@extends('layouts.master')
@section('content')
<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('login') }}">
                 @csrf
					<span class="login100-form-title">
						Log In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<a href="{{ route('password.request') }}" class="txt2">
							Forgot Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Log in
						</button>
					</div>

                    <div class="flex-col-c p-t-10 p-b-40">
						<a href="{{ url('/') }}" class="txt3">
							go to home
						</a>
					</div>

                    <div class="flex-col-c p-t-10 p-b-40">
						<a href="register" class="txt3">
							go to register
						</a>
					</div>

				</form>
@endsection
