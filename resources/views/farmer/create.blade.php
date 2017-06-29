@extends('layouts.app')

@section('content')
    
           <div class="row1">
<img src="{{ URL::asset("image/wekezakilimo(2).jpg") }}" class="banner">
        </div>
        <div class="row">
       <div class="col-md-2">
    <div class="list-group">
         
  <a href="{{ url('/farmer/pembejeo') }}" class="list-group-item active"> Pembejeo </a>
  <a href="{{ url('/farmer/mazao') }}" class="list-group-item">Mazao</a>
  <a href="{{ url('/farmer/kilimo') }}" class="list-group-item">KIlimo</a>
  <a href="{{ url('/farmer/Mada') }}" class="list-group-item">Mada</a>

     <!-- Right Side Of Navbar -->
                    <ul class="nav nav-pills">
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
                    </ul>   
</div>

</div>
<div class="col-md-8">
 <h3>zao jipya</h3>
<hr> 

    <h2>zao jipya</h2>
 
    
    <form method="post" action="/mazaos" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" id="titleid" placeholder="Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="descriptionid" class="col-sm-3 col-form-label">description</label>
            <div class="col-sm-9">
                <input name="description" type="text" class="form-control" id="descriptionid"
                       placeholder="description">
            </div>
        </div>
        <div class="form-group row">
            <label for="priceid" class="col-sm-3 col-form-label">price</label>
            <div class="col-sm-9">
                <input name="price" type="number" class="form-control" id="priceid"
                       placeholder="price">
            </div>
        </div>
        <div class="form-group row">
            <label for="gameimageid" class="col-sm-3 col-form-label">Image</label>
            <div class="col-sm-9">
                <input name="image" type="file" id="gameimageid" class="custom-file-input">
                <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
 
</div>
</div>

       


        
    
    
</html>

        </div>
    </div>
@endsection