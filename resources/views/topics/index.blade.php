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
<img src="image/wekezakilimo(2).jpg" class="banner">
        </div>
        <div class="row">
     <div class="col-md-2">
    <div class="list-group">
           @if (Route::has('login'))

                    @if (Auth::check())
                        <a href="{{ url('/agriculturalOfficer/home') }}" class="list-group-item">Home</a>
                    @else
                        <a href="{{ url('/login') }}" class="list-group-item" >Login</a>
      <a href="{{ url('/register') }}" class="list-group-item" >Register</a>

                    
                    @endif
                </div>
            @endif
  <a href="{{ url('/agriculturalOfficer/pembejeo') }}" class="list-group-item active">
    Pembejeo
  </a>
  <a href="{{ url('/agriculturalOfficer/mazao') }}" class="list-group-item">Mazao</a>
  <a href="{{ url('/topics') }}" class="list-group-item">Maada</a>
      
</div>
<div class="col-md-8">
  <div class="row">
<div class="col-md-2">
  <h3>Mada</h3>
</div>
<div class="col-md-2">
  <h3><a href="{!! route('topics.index') !!}">zilizopo</a></h3>
</div>
<div class="col-md-3">
  <h3><a href="{!! route('topics.create') !!}">Mada mpya</a></h3>
</div>
   </div>
<hr> 
   @include('flash::message')
  @foreach($topics as $topic)
 <div class="row">
<h1>{!! $topic->title !!}</h1>
<p>{!! $topic->description !!}</p>

 {!! Form::open(['route' => ['topics.destroy', $topic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('topics.show', [$topic->id]) !!}" class='btn btn-success btn-xs'>angalia</a>
                    <a href="{!! route('topics.edit', [$topic->id]) !!}" class='btn btn-info btn-xs'>Rekebisha</a>
                    {!! Form::button('ondoa', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('kweli wataka ondoa?')"]) !!}
                </div>
                {!! Form::close() !!}

</div>
    @endforeach
</div>

</div>
        </div>    
    </body>
     <footer class="footer">
          <p class="text-center">wekezakilimo</p>
        </footer>
</html>
