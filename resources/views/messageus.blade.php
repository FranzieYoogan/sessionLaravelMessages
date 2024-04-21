<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

      <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
></script>


    <link rel="stylesheet" href="{{asset('/css/messageus.css')}}">

</head>
<body>

    @include('header')

    <section class="containerText">

        <div class="containerAllItems">



  
        <div>
            <h1 class="titleMessageus">TYPE US YOUR TRULY FEEDBACK</h1>
        </div>

        <form action="/messageus" method="POST" class="containerItems">
            @csrf
            
          
        <div data-mdb-input-init class="form-outline">
            <label class="labelText" id="labelText">Message</label>
            <textarea class="textInputStyle form-control" name="textareaInput" id="textareaInput" rows="4" required></textarea>

          </div>    

          <div style="position: relative">

          <button type="submit" class="buttonMessageusStyle" data-mdb-ripple-init><img class="sendStyle" src="{{asset('img/icons/send.png')}}" alt=""></button>
      
        </div>

        </form>


        <script>

            document.getElementById('textareaInput').addEventListener("input", (event) => {
            
                if (event.target.value != "") {
   
                    document.getElementById('labelText').style.bottom = "6em"
                    document.getElementById('labelText').style.color = "orange"
            
                } else {

                    document.getElementById('labelText').style.bottom = "5em"
                    document.getElementById('labelText').style.color = "white"
                }
            
            
            });
            
                </script>
    </div>

    </section>

 



</body>
</html>