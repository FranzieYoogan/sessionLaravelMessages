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

    <h1>Welcome @php if(Session::get('sessionAccountGender') == "f") echo "Ms"; elseif(Session::get('sessionAccountGender') == "m") echo "Mr"; @endphp @php echo Session::get('sessionAccount') @endphp ^-^</h1>

    @endif

    @if(session()->has('sessionAccountUser'))

    <h1>Welcome @php if(Session::get('sessionAccountGenderuser') == "m") echo "Mr"; elseif(Session::get('sessionAccountGenderuser') == "f") echo "Ms"; @endphp @php echo Session::get('sessionAccountUser') @endphp ^-^</h1>

    @endif


</body>
</html>