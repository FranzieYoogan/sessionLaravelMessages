<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css/header.css')}}">

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Navbar</a>
          <button onclick="toggling()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              @if(!session()->has('sessionAccount') && !session()->has('sessionAccountUser'))

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Login</a>
              </li>

              @endif
          
              @if(session()->has('sessionAccount'))

              <li class="nav-item">
                <a class="nav-link" href="/messages">Messages</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/account" > {{$sessionAccount = session('sessionAccount')}}</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/logout"> LogOut</a>
              </li>


              @elseif(session()->has('sessionAccountUser')) 


              
              <li class="nav-item">
                <a class="nav-link" href="/messages">Message us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/account" > {{$sessionAccountUser = session('sessionAccountUser')}}</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/logout"> LogOut</a>
              </li>


              @endif

              
       
            </ul>
          </div>
        </div>
      </nav>

      <script>

            var click = 0;

            function toggling() {
                click ++;     

                if(click == 1) {

                    document.getElementById('navbarNav').style.display = "block";
                
                } else {

                click = 0;
                document.getElementById('navbarNav').style.display = "none";
              
            }
               

            }

      </script>
    
</body>
</html>