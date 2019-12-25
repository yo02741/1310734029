<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddComments</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="icon" href="{{url('1.ico')}}" type="image/x-icon">
</head>
<body>


    <div class="addcomments-wrapper"> 
        <div class="addcomments-container">
            <div class="addcomments-form">
                <h1 class="addcomments-form-title">AddComments</h1>


                <form method="POST" action="{{url('/addcomments')}}">

                    {!! csrf_field() !!}

                
                    <span class="addcomments-form-txt">Name</span>
                    <div class="input-wrapper mg-b-36">
                        <input type="text" name="name"  value="{{session()->get('name')}}" class="custom-input" disabled="disabled">
                    </div>
                
                    <span class="addcomments-form-txt">Title</span>
                    <div class="input-wrapper mg-b-36">
                        <input type="text" name="title"  class="custom-input">
                        <span class="custom-focus-input"></span>
                    </div>

                    <span class="addcomments-form-txt">Content</span>
                    <div class="input-wrapper mg-b-36">
                    <!-- cols="30" rows="10" -->
                        <textarea name="content" class="custom-input-textarea"></textarea>
                        <span class="custom-focus-input"></span>
                    </div>

                    <div class="custom-btn-container">
                        <button class="addcomments-btn">Add</button>
                    </div>
                </form>
                <button onclick="location.href='/comments';" class="back-btn2">Back</button>
            </div>            
        </div>
    </div>
</body>
</html>