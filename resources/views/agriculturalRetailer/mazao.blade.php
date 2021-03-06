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
  <a href="{{ url('/agriculturalRetailer/pembejeo') }}" class="list-group-item active"> Pembejeo </a>
  <a href="{{ url('/agriculturalRetailer/mazao') }}" class="list-group-item">Mazao</a>
  <a href="{{ url('/agriculturalRetailer/Mada') }}" class="list-group-item">Mada</a>
      
      
</div>
<div class="col-md-9">
  <div class="row">

<div class="col-md-2">
  <h3><a href="/farmer/mazao">Yaliyopo</a></h3>
</div>

   </div>
<hr> 
@foreach($products->chunk(3) as $productChunk)
<div class="row">
  @foreach($productChunk as $product)
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{URL::asset("$product->imagePath")}}" alt="...">
      <div class="caption">
        <h3>{{$product->title}}</h3>
        <p><strong>Tsh{{$product->price}}</strong></p>
        <p><a href="{{ url('/nunua') }}" class="btn btn-primary" role="button">nunua</a></p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endforeach
</div>
</div>
        </div>
         <footer class="footer">
          <p class="text-center">wekezakilimo</p>
        </footer>
    </body>
</html>
