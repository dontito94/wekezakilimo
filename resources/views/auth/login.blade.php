@extends('layouts.app')

@section('content')
<div class="container">
    <img src="image/wekezakilimo(2).jpg" class="banner">
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
            <div class="">
               
                <div class="">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Nenosiri" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingia
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Umesahau neno la siri?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
