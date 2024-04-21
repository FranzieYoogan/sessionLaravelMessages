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

    @if (isset($usersMessages))
    @foreach ($usersMessages as $data)

        @if($data->user_message)
        <section class="containerAll">

           
                
    

     

       
            <div class="containerForBorder">
                <h1 class="feddbackStyle">FEEDBACK #  {{$counter++}}</h1>

        
          

          
            <div>
          
                <div class="contentMessage">
                  
                    <h1 class="responseBy">Response By {{$data->user_nickname}} <img class="userIconStyle" src="{{asset('/img/icons/user.png')}}" alt="">  <span class="dateStyle">{{substr($data->user_date,0,26)}}  <img class="dateIconStyle" src="{{asset('/img/icons/date.png')}}" alt=""> </span> </h1>
             
                    <h1 class="messageStyle">{{$data->user_message}}</h1>

                 
                </div>
           
            </div>

      
        </div>
    
        @endif
            @endforeach
     
            @endif
    
        </section>


  

    
</body>
</html>