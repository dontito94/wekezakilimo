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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="js/respond.js"></script>

    </head>
    <body>
        <div class="row1">
<img src="image/wekezakilimo(2).jpg" class="banner img-responsive">
        </div>
        <div class="row">
       <div class="col-md-2">
    <div class="list-group">
  <a href="{{ url('/kutuhusu') }}" class="list-group-item active">
    Kutuhusu
  </a>
  <a href="{{ url('/wasiliana') }}" class="list-group-item">Wasiliana </a>
  <a href="{{ url('/msaada') }}" class="list-group-item">Msaada </a>
         @if (Route::has('login'))

                    @if (Auth::check())
                        <a href="{{ url('/home') }}" class="list-group-item">Home</a>
                    @else
                        <a href="{{ url('/login') }}" class="list-group-item" >Ingia</a>
      <a href="{{ url('/register') }}" class="list-group-item" >Jisajili</a>

                    
                    @endif
                </div>
            @endif
</div>
<div class="col-md-8">
<div class="jumbotron">
 <h1>Karibu Wekeza kilimo!</h1>
    <p>Wekeza kilimo inatufanya tunufaike kupitia kilimo kwakutuwezesha kujifunza,kununua,kutangaza na kujipatia pembejeo pamoja na mazao kwa urahisi.</p>
    <p><a href="{{ url('/kutuhusu') }}" class="btn btn-primary btn-lg" role="button">Zaidi &raquo;</a>
    </p>
               
                </div>

</div>
</div>
</div>

       </div>


        </div>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
               
            </div>
        </div>
         <footer class="footer-distributed">

      <div class="footer-right">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

      </div>

      <div class="footer-left">

        <p class="footer-links">
  <a href="{{ url('/wasiliana') }}">Wasiliana </a>
  <a href="{{ url('/msaada') }}">Msaada </a> 
        </p>

        <small>wekezakilimo &copy; 2017</small>
      </div>

    </footer>
    </body>
</html>






