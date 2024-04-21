<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



</head>
<body>

    @include('header')

    @if(session()->has('sessionAccount'))


    <h1>Welcome @if(session()->get('sessionAccountGender') == "f")  Ms {{session()->get('sessionAccount')}} ^-^ @else Mr {{session()->get('sessionAccount')}}  ^-^ @endif</h1>

    @endif

    


</body>
</html>