<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{asset('/css/login.css')}}">

      
    </head>
    <body class="antialiased">

      


        @include('header')

        <section class="containerForm">

    

        <form method="POST" action="/account" class="formItems">
            @csrf
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" maxlength="15" name="nickname" id="form2Example1" class="form-control" required />
              <label class="form-label" for="form2Example1">account's nickname</label>
            </div>
          
            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" maxlength="8" name="password" id="form2Example2" class="form-control" required />
              <label class="form-label" for="form2Example2">Password</label>
            </div>
          
          
          
            <!-- Submit button -->
            <button type="submit"  name="submit" data-mdb-ripple-init class="submitStyle btn btn-primary btn-block mb-4">Sign in</button>
            
            @if(isset($error))

            <div style="position: relative;">
              <h1 class="errorStyles">INVALID CREDENTIALS <img class="errorIcon" src="{{asset('/img/icons/error.png')}}" alt=""></h1>
            </div>
            
            <script>

              setTimeout(() => {

                window.location.href = 'http://127.0.0.1:8000/';

              }, 2000);

            </script>

            @endif
          
            </div>
          </form>



        </section>

    </body>
</html>
