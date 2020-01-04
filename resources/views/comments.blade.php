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
        <div class="article_list_container">
            <div class="article_list_title">Comments</div>
            @foreach ($CommentsData as $CommentsData)
            <div class="content_area">
                <div class="contenttt">                    
                    <a href="/comments/{{$CommentsData->cid}}" class="title">{{$CommentsData->title}}</a>
                </div>
            
                <div class="contenttt content">
                    {{$CommentsData->content}}
                </div>

                <div class="contenttt info">
                    {{$CommentsData->created_at}}，
                        @for($i=0;$i <= count($UsersData)-1;$i++)
                            @if($CommentsData->users_id == $UsersData[$i]->id)
                                由 {{$UsersData[$i]->name}} 發布
                        @endif
                @endfor
                </div>
            </div>
            @endforeach
        </div>

         

      
        <input type="button" value="+" onclick="location.href='/addcomments'" class="contenttt_btn">
    </div>
</body>
</html>