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
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label" ></label>

                            <div class="col-md-6">
                                <input id="first_name" type="string" placeholder="jina la kwanza" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="jina la mwisho" class="form-control" name="name" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" placeholder="Neno la siri" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Thibitisha nenosiri" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="phone_number" type="integer" placeholder="Namba ya simu" class="form-control" name="phone_number" required>

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="birth_date" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="birth_date" type="date" placeholder="tarehe ya kuzaliwa" class="form-control" name="birth_date" required>

                                @if ($errors->has('birth_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Jisajili
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
