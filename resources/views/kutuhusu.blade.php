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
<div class="row">
  <h3>kuhusu wekezakilimo</h3>
<hr> 
      <article class="col-lg-9 col-sm-8">
      <h1>karibu wekeza kilimo</h1>
            <p><img src="image/wek2.jpg" class="img-responsive img-rounded">
           Wekeza kilimo ni mfumo wa kidigitali unaosaidia katika kuboresha na kukuza sekta ya kilimo Tanzania kuanzia
           kwa wakulima wadogo wadogo mpaka kwa wakulima wakubwa.Wekeza kilimo ina msaidia mkulima,mfanya biashara,muuza pembejeo
           na afisa kilimo katika kupelekea urahisi wa huduma na utolewaji wa elimu kwa ujumla.
           Chini tumeonyesha jinsi mkulima,mfanya biashara,muuza pembejeo wanavyofaidika na mfumo huu.
            </p>
  
         <div class="clearfix visible-xs visible-lg"></div>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                  <div class="panel panel-default">
                      <div class="panel-heading"><strong>Mkulima</strong></div>
                      <div class="panel-body">
                              <p>Mfumo unamsaidia mkulima kujitangaza na kufanya biashara bila kulanguliwa,
                              pia unampa nafasi ya kujifunza kuhusu mazao mbali mbali na pia kununua pembeleo za kilimo
                              kwa bei rahisi na kwa urahisi pia</p>
                         <p><a href="#" class="btn btn-info">Endelea >></a></p>
                            </div>
                    </div>
          
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="panel panel-default">
                      <div class="panel-heading"><strong>Mfanya biashara</strong></div>
                      <div class="panel-body">
                              <p>Mfumo unamkutanisha mfanya biashara na mkulima katika kufanya biashara
                            na pia unaweka ukaribu kati yao.Mfanyabiashara anakuwa na uhuru wa kuchaguwa
                            bidhaa kutoka kwa wakulima mbalimbali walioko kwenye mfumo.  </p>
                            <p><a href="#" class="btn btn-info">Endelea >></a></p>
                            </div>
                    </div>
                     
                </div>
                <div class="clearfix visible-md visible-xs"></div>
                <div class="col-lg-3 col-xs-6">
                  <div class="panel panel-default">
                      <div class="panel-heading"><strong>Afisa kilimo</strong></div>
                      <div class="panel-body">
                             <p>Afisa kilimo anapata urahisi wa kutoa suluisho la magonjwa na pia kutoa ushauri na elimu
                              kuhusu jinsi ya kutumia mbinu za kisasa kwenye kilimo na ufugaji kwa ujumla.
                              Anapata urahisi pia kufanya mawasiliano na wakulima walaioko katika eneo lake hususani katika 
                              maswala ya matibabu na kueneza elimu ya kilimo.</p>
                            <p><a href="#" class="btn btn-info">Read more >></a></p>
                            </div>
                    </div>
                  
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="panel panel-default">
                      <div class="panel-heading"><strong>Muuza pembejeo</strong></div>
                      <div class="panel-body">
                             <p>Mfumo unamsaidia mkulima kujitangaza na kufanya biashara bila kulanguliwa,
                              pia unampa nafasi ya kujifunza kuhusu mazao mbali mbali na pia kununua pembeleo za kilimo
                              kwa bei rahisi na kwa urahisi pia</p>
                            <p><a href="#" class="btn btn-info">Endelea >></a></p>
                            </div>
                    </div>
                 
                 </div>
            </div><!-- end nested row 3a -->
        </article>
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
