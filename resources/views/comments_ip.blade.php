<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="icon" href="{{url('1.ico')}}" type="image/x-icon">
</head>
<body>


    <div class="wrapper">
        <div class="comment-container">
            <div class="comment-form">
                <h1 class="comment-form-title">Comments</h1>


                <form method="POST" action="{{url('/addcomments')}}">

                    {!! csrf_field() !!}

                
                    <span class="form-txt">Name</span>
                    <div class="input-wrapper mg-b-36">
                        <input type="text" name="name"  value="{{$CommentsData->cid}}" class="custom-input" disabled="disabled">
                    </div>
                
                    <span class="form-txt">Title</span>
                    <div class="input-wrapper mg-b-36">
                        <input type="text" name="title" value="{{$CommentsData->title}}" class="custom-input" disabled="disabled">
                    </div>

                    <span class="form-txt">Content</span>
                    <div class="input-wrapper mg-b-36">
                        <textarea name="content" class="custom-input-textarea" disabled="disabled">{{$CommentsData->content}}</textarea>
                    </div>

                    
                </form>
                <button onclick="location.href='/comments';" class="back-btn3">Back</button>
            </div>            
        </div>
    </div>
</body>
</html>