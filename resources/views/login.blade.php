<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="icon" href="{{url('1.ico')}}" type="image/x-icon">

</head>
<body>


    <div class="wrapper"> 
        <div class="container">
            <form method="POST" action="{{url('/login')}}">

                {!! csrf_field() !!}

                <div class="login-form">
                    <h1 class="login-form-title">Login</h1>
                    <span class="login-form-txt">Account</span>
                    <div class="input-wrapper mg-b-36">
                        <input type="text" name="account" class="custom-input">
                        <span class="custom-focus-input"></span>
                    </div>
                    <span class="login-form-txt">Password</span>
                    <div class="input-wrapper mg-b-12">
                        <input type="password" name="password" class="custom-input">
                        <span class="custom-focus-input"></span>
                    </div>
                    <div class="custom-btn-container">
                        <button class="login-btn">Login</button>
                    </div>
                    <div class="fun-txt">
                        <span class="txt-register">Not registered? <a href="/register" class="register">Create an account</a></span>
                    </div>
                    <div class="fun-txt">
                        <span class="txt-forgot-pwd"><a href="#" >Forgot password?</a></span>
                    </div>
                </div>          
            </form>  
        </div>
        <!-- <div class="container2">            
            <select name="lang" class="lang-style">
                <option value="en">English</option>
                <option value="zh-TW">ç¹�é«”ä¸­æ–‡</option>
            </select>
        </div> -->
    </div>
</body>
</html>