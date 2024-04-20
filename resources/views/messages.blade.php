<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/messages.css')}}">

</head>
<body>

    @include('header')

 

        <section class="containerAll">

            @if (isset($usersMessages))
                
    

            @foreach ($usersMessages as $data)

            <div class="containerForBorder">
                <h1 class="feddbackStyle">ALL FEEDBACK</h1>

        
          


            <div>
                <div class="contentMessage">
                    <h1>Response By {{$data->user_nickname}} #{{$data->user_id}}</h1>
                   
                    <h1 class="messageStyle">{{$data->user_message}}</h1>
                </div>
            </div>

      
        </div>


            @endforeach
          
            @endif
        </section>


  

    
</body>
</html>