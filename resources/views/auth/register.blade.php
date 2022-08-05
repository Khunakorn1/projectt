@extends('layouts.master')
@section('content')
<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('register') }}">
                 @csrf
					<span class="login100-form-title">
                        Register
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter address">
						<input class="input100" type="text" name="address" placeholder="Address">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter phone">
						<input class="input100" type="text" name="phone" placeholder="Phone">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
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
                    

					<div class="text-right p-t-13 p-b-23">
						<a href="{{ route('password.request') }}" class="txt2">
							Forgot Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                          Register
						</button>
					</div>

                    <div class="flex-col-c p-t-10 p-b-40">
						<a href="{{ url('/') }}" class="txt3">
							go to home
						</a>
					</div>

                    <div class="flex-col-c p-t-10 p-b-40">
						<a href="login" class="txt3">
							go to login
						</a>
					</div>

				</form>
@endsection
