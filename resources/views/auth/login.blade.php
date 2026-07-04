@extends('layouts.app')

@section('content')
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-color: #f7f9fc;
            --text-dark: #333333;
            --text-light: #888888;
        }

        .auth_page_container {
            background-color: #f4f7f6;
            padding: 80px 0;
            font-family: 'Inter', 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        .auth-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
            padding: 40px;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.4);
        }

        .auth-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .auth-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary-gradient);
        }

        .auth-title {
            font-weight: 700;
            font-size: 28px;
            color: var(--text-dark);
            margin-bottom: 30px;
            text-align: center;
        }

        .custom-form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .custom-input {
            width: 100%;
            padding: 15px 20px;
            border-radius: 10px;
            border: 1px solid #e1e5eb;
            background-color: #f8f9fa;
            font-size: 15px;
            color: var(--text-dark);
            transition: all 0.3s ease;
        }

        .custom-input:focus {
            background-color: #ffffff;
            border-color: #764ba2;
            outline: none;
            box-shadow: 0 0 0 4px rgba(118, 75, 162, 0.1);
        }

        .custom-input::placeholder {
            color: #adb5bd;
        }

        .custom-btn {
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-login {
            background: var(--primary-gradient);
        }

        .btn-login:hover {
            box-shadow: 0 6px 20px rgba(118, 75, 162, 0.4);
            transform: translateY(-2px);
        }

        .btn-signup {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }

        .btn-signup:hover {
            box-shadow: 0 6px 20px rgba(17, 153, 142, 0.4);
            transform: translateY(-2px);
        }

        .social-login-divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--text-light);
            margin: 30px 0;
            font-size: 14px;
        }

        .social-login-divider::before,
        .social-login-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e1e5eb;
        }

        .social-login-divider:not(:empty)::before {
            margin-right: .25em;
        }

        .social-login-divider:not(:empty)::after {
            margin-left: .25em;
        }

        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 15px;
            text-decoration: none !important;
        }

        .social-btn i {
            margin-right: 10px;
            font-size: 18px;
        }

        .btn-facebook {
            background-color: #eef1f7;
            color: #3b5998;
            border: 1px solid #dce2ef;
        }

        .btn-facebook:hover {
            background-color: #3b5998;
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(59, 89, 152, 0.3);
        }

        .btn-google {
            background-color: #fdf5f4;
            color: #db4437;
            border: 1px solid #fae6e4;
        }

        .btn-google:hover {
            background-color: #db4437;
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(219, 68, 55, 0.3);
        }

        .forgot-pass {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: var(--text-light);
            font-size: 14px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-pass:hover {
            color: #764ba2;
        }

        @media (max-width: 991px) {
            .auth-card {
                margin-bottom: 30px;
            }
        }
    </style>

    <div class="auth_page_container">
        <div class="container">
            <div class="row">
                <!-- Sign In Section -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="auth-card">
                        <div class="auth-title">Welcome Back</div>
                        
                        <form action="{{ route('login') }}" id="login_form" method="post">
                            @csrf
                            <div class="custom-form-group">
                                <input type="text" class="custom-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email or Phone Number" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="custom-form-group">
                                <input type="password" class="custom-input @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <button type="submit" class="custom-btn btn-login">Sign In</button>
                        </form>
                        
                        <a href="{{ route('password.request') }}" class="forgot-pass">Forgot your password?</a>
                        
                        <div class="social-login-divider">Or continue with</div>
                        
                        <a href="{{ url('/auth/redirect/facebook') }}" class="social-btn btn-facebook">
                            <i class="fab fa-facebook-f"></i> Continue with Facebook
                        </a>
                        <a href="{{ url('/auth/redirect/google') }}" class="social-btn btn-google">
                            <i class="fab fa-google"></i> Continue with Google
                        </a>
                    </div>
                </div>

                <!-- Sign Up Section -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="auth-card">
                        <div class="auth-title">Create Account</div>
                        
                        <form action="{{ route('register') }}" id="register_form" method="post">
                            @csrf
                            <div class="custom-form-group">
                                <input type="text" class="custom-input" name="name" placeholder="Full Name" required>
                            </div>
                            
                            <div class="custom-form-group">
                                <input type="text" class="custom-input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" required>
                            </div>
                            
                            <div class="custom-form-group">
                                <input type="email" class="custom-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                            </div>
                            
                            <div class="custom-form-group">
                                <input type="password" class="custom-input" name="password" placeholder="Password" required>
                            </div>
                            
                            <div class="custom-form-group">
                                <input type="password" class="custom-input" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            
                            <button type="submit" class="custom-btn btn-signup">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($errors->any())
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    html: '{!! implode("<br>", $errors->all()) !!}',
                    confirmButtonColor: '#764ba2'
                });
            });
        </script>
    @endif
@endsection
