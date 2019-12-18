<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="icon" href="{{url('1.ico')}}" type="image/x-icon">

    <!-- <script src="https://kit.fontawesome.com/9df95711ff.js" crossorigin="anonymous"></script> -->
</head>
<body>


    <div class="wrapper"> 
        <div class="container">
            <div class="register-form">
                <h1 class="register-form-title">Register</h1>


                <form method="POST" action="{{url('/register')}}">

                    {!! csrf_field() !!}

                    <span class="register-form-txt">Account</span>
                    <div class="input-wrapper mg-b-36">
                        <input type="text" name="account"  class="custom-input">
                        <span class="custom-focus-input"></span>
                    </div>

                    <span class="register-form-txt">Password</span>
                    <div class="input-wrapper mg-b-7">
                        <!-- <span class="btn-show-pass"><i class="fas fa-eye"></i></span> -->
                        <input type="password" name="password"  class="custom-input">
                        <span class="custom-focus-input"></span>
                    </div>

                    <div class="input-wrapper mg-b-36">
                        <input type="password" name="password2"  class="custom-input">
                        <span class="custom-focus-input"></span>
                    </div>


                    <span class="register-form-txt">Name</span>
                    <div class="input-wrapper mg-b-36">
                        <input type="text" name="name"  class="custom-input">
                        <span class="custom-focus-input"></span>
                    </div>

                    <div class="custom-btn-container">
                        <button class="register-btn">Register</button>
                        <button onclick='javascript:location.href="/";' class="back-btn">Back</button>
                    </div>
                </form>
                
            </div>            
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