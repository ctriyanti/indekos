<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{asset('tadmin/assets/css/style.css')}}">

    <!-- Bootstrap Styles-->
    <link href="{{asset('tadmin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('tadmin/assets/css/font-awesome.css')}}" rel="stylesheet" />
</head>
<body>
    <div class="login-container">
        <div class="box">
            <div class="login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />
                        <input type="email" class="form-control" name="email" id="email" required autofocus>
                    </div>
                
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
                        <input type="password" class="form-control" name="password" id="password" required autocomplete="current-password">
                    </div>
                
                    <div class="flex items-center justify-end mt-4 button-login">
                        <x-button class="btn btn-primary">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>