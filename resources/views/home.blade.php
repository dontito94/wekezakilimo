@extends('layouts.app')

@section('content')
    <div class="row">        
<img src="{{ URL::asset("image/wekezakilimo(2).jpg") }}" class="banner">
</div>
        
        <div class="row">
          <div class="">
       <div class="col-md-2">
    <div class="list-group">
         
  <a href="{{ url('/agriculturalOfficer/home') }}" class="list-group-item active">
    afisa kilimo
  </a>
  <a href="{{ url('/agriculturalInputs/home') }}" class="list-group-item">Muuza pembejeo</a>
  <a href="{{ url('/agriculturalRetailer/home') }}" class="list-group-item">Mnunuzi </a>
  <a href="{{ url('/farmer/home') }}" class="list-group-item">Mkulima</a>
     <!-- Right Side Of Navbar -->
      <a href=""> <ul class="nav nav-pills">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>   </a>             
</div>

</div>
</div>

<div class="col-md-8">
 <h3>Karibu wekezakilimo</h3>
<hr> 

</div>
       </div>


        </div>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
               
            </div>
        </div>
    
</html>

        </div>
    </div>
@endsection