@extends('admin.admin_layouts')
@section('admin_content')
    <style>
        /* Custom Premium Login Styles */
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%, #1e3c72 100%);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            font-family: 'Inter', sans-serif;
            position: relative;
            overflow: hidden;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Animated background shapes */
        .shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            z-index: 0;
        }
        .shape1 {
            width: 400px;
            height: 400px;
            background: rgba(118, 75, 162, 0.6);
            top: -100px;
            left: -100px;
            animation: float 8s ease-in-out infinite;
        }
        .shape2 {
            width: 300px;
            height: 300px;
            background: rgba(102, 126, 234, 0.6);
            bottom: -50px;
            right: -50px;
            animation: float 10s ease-in-out infinite reverse;
        }

        @keyframes float {
            0% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(20px) scale(1.05); }
            100% { transform: translateY(0px) scale(1); }
        }

        .glass-login-wrapper {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 420px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            text-align: center;
            color: #fff;
        }

        .signin-logo {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
            letter-spacing: 1px;
            color: #fff !important;
        }

        .signin-logo span {
            color: #a8b2d1;
            font-weight: 400;
        }

        .tx-center.mg-b-60 {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .custom-form-group {
            position: relative;
            margin-bottom: 25px;
            text-align: left;
        }

        .custom-input {
            width: 100%;
            background: rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 15px 20px;
            border-radius: 12px;
            color: #fff;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .custom-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .custom-input:focus {
            outline: none;
            background: rgba(0, 0, 0, 0.25);
            border-color: rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
        }

        .custom-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(118, 75, 162, 0.4);
        }

        .custom-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(118, 75, 162, 0.6);
        }

        .forgot-link {
            color: rgba(255,255,255,0.7);
            font-size: 13px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: #fff;
        }

        .invalid-feedback {
            display: block;
            color: #ff6b6b;
            font-size: 12px;
            margin-top: 8px;
            padding-left: 10px;
        }

    </style>

    <div class="shape shape1"></div>
    <div class="shape shape2"></div>

    <div class="glass-login-wrapper">
        <div class="signin-logo">Happy <span>Mart</span></div>
        <div class="tx-center mg-b-60">Secure Admin Panel</div>
        
        <form action="{{ route('admin.login') }}" method="post">
            @csrf
            
            <div class="custom-form-group">
                <input type="email" class="custom-input @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Admin Email Address">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="custom-form-group">
                <input type="password" class="custom-input @error('password') is-invalid @enderror" name="password"
                    required autocomplete="current-password" placeholder="Admin Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <button type="submit" class="custom-btn">Secure Login</button>
            
            <a href="{{-- {{ route('admin.password.request') }} --}}" class="forgot-link">Forgot password?</a>
        </form>
    </div>

    @if($errors->any())
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    type: 'error',
                    title: 'Authentication Failed',
                    html: '{!! implode("<br>", $errors->all()) !!}',
                    confirmButtonColor: '#764ba2',
                    background: '#fff',
                    customClass: {
                        popup: 'animated tada'
                    }
                });
            });
        </script>
    @endif
@endsection
