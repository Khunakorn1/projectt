@extends('layouts.master')
@section('content')
<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('password.email') }}">
                 @csrf
					<span class="login100-form-title">
                    Reset Password
					</span>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 

                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>


					<div class="text-right p-t-13 p-b-23">
						<a href="{{ route('password.request') }}" class="txt2">
							Forgot Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        Send Password Reset Link
						</button>
					</div>

				</form>
@endsection
