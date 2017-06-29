<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="js/respond.js"></script>

    </head> 
    <body>
        <div class="row1">

<img src="{{ URL::asset("image/wekezakilimo(2).jpg") }}" class="banner">
        </div>
        <div class="row">
       <div class="col-md-2">
    <div class="list-group">
           @if (Route::has('login'))

                    @if (Auth::check())
                        <a href="{{ url('/home') }}" class="list-group-item">Home</a>
                    @else
                        <a href="{{ url('/login') }}" class="list-group-item" >Login</a>
      <a href="{{ url('/register') }}" class="list-group-item" >Register</a>

                    
                    @endif
                </div>
            @endif
  <<a href="{{ url('/agriculturalOfficer/pembejeo') }}" class="list-group-item active">
    Pembejeo
  </a>
  <a href="{{ url('/agriculturalOfficer/mazao') }}" class="list-group-item">Mazao</a>
  <a href="{{ url('/topics') }}" class="list-group-item">Maada</a>
      
</div>
<div class="col-md-8">
 <h3>Mada mbalimbali</h3>
<hr> 
<div class="row">
<div class="col-md-2">
    <p>{!! $topic->id !!}</p>
    <p>{!! $topic->created_at !!}</p>
</div>
<div class="col-md-6">
<h><strong> {!! $topic->title !!}</strong></h>
<p>{!! $topic->description !!}</p>

</div>



</div>
</div>

<div class="col-md-2">
  

</div>

</div>
</div>

       </div>


        </div>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
               
            </div>
        </div>
         <footer class="footer">
          <p class="text-center">wekezakilimo</p>
        </footer>
    </body>
</html>
