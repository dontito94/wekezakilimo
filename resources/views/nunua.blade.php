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
                        <a href="{{ url('/home') }}" class="list-group-item">Home</a>
                    @else
                        <a href="{{ url('/login') }}" class="list-group-item" >Login</a>
      <a href="{{ url('/register') }}" class="list-group-item" >Register</a>

                    
                    @endif
                </div>
            @endif
  <a href="{{ url('/pembejeo') }}" class="list-group-item active">
    Pembejeo
  </a>
  <a href="{{ url('/mazao') }}" class="list-group-item">Mazao</a>
  <a href="{{ url('/kilimo') }}" class="list-group-item">KIlimo </a>
  <a href="{{ url('/maada') }}" class="list-group-item">Maada</a>
      
</div>
<div class="col-md-9">
 <h3>Mazao</h3>
<hr> 
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="image/k10.jpg" alt="...">
      <div class="caption">
        <h3>Nyanya</h3>
        <p><strong>Tsh.</strong></p>
        <p> <a href="#" class="btn btn-default" role="button">wasiliana</a></p>
      </div>
    </div>
  
  
  </div>
  <div class="col-md-5">

      <div class="form-group">
          {!! Form::label('firstName', 'First Name:') !!}
          {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('lastName', 'Last Name:') !!}
          {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('email', 'Email address:') !!}
          {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email@example.com']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('product', 'Select product:') !!}
          {!! Form::select('product', ['book' => 'Book ($10)', 'game' => 'Game ($20)', 'movie' => 'Movie ($15)'], 'Book', ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label(null, 'Credit card number:') !!}
          {!! Form::text(null, null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::label(null, 'Card Validation Code (3 or 4 digit number):') !!}
          {!! Form::text(null, null, ['class' => 'form-control']) !!}
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
              {!! Form::label(null, 'Ex. Month') !!}
              {!! Form::selectMonth(null, null, ['class' => 'form-control'], '%m') !!}
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
              {!! Form::label(null, 'Ex. Year') !!}
              {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, ['class' => 'form-control']) !!}
          </div>
        </div>
      </div>

        <div class="form-group">
            {!! Form::submit('Place order!', ['class' => 'btn btn-primary btn-order', 'id' => 'submitBtn', 'style' => 'margin-bottom: 10px;']) !!}
        </div>

    {!! Form::close() !!}
  </div>
</div>
  </div>
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
         <footer class="footer">
          <p class="text-center">wekezakilimo</p>
        </footer>
    </body>
</html>
