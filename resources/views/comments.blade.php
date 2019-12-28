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
        <!-- {{$UsersData[0]->id}} -->

         

        @foreach ($CommentsData as $CommentsData)
            <div>
                title: {{$CommentsData->title}}
            </div>

            @for($i=0;$i <= count($UsersData)-1;$i++)
                @if($CommentsData->users_id == $UsersData[$i]->id)
                <div>
                    name: {{$UsersData[$i]->name}}
                </div>  
                @endif
            @endfor

            
                      

            <div>
                content: {{$CommentsData->content}}
            </div>

            <div>
                created_at: {{$CommentsData->created_at}}
            </div>

            <div>
                -----------------------
            </div>

        @endforeach
        <input type="button" value="AddComments" onclick="location.href='/addcomments'" class="btn">
    </div>
</body>
</html>