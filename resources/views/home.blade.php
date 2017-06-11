@extends('layouts.app')

@section('content')
    <div class="row">        

<img src="{{ URL::asset("image/wekezakilimo(2).jpg") }}" class="banner img-responsive">
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
  <hr />


                <div class="row">
                    <div class="col-md-8">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">KILIMO UHAKIKA</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">TAARIFA ZA KILIMO</a>
            

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h3>Pata Makala mbalimbali kuhusu kilimo</h3>
                                <img src="image/kk6.jpg" class="img-responsive img-rounded">
                                <p>
                         Kilimo uhakika ni mpango wa mafunzo na ushauri wa kilimo, ambapo utapata mshauri wako wa kilimo  anakupa mafunzo na mwongozo wa kuweza kufanya kilimo cha uhakika.
                         Kwa kutebelea mara kwa mara kwenye mfumo wa wekeza kilimo, unaweza kupata mafunzo ya karibu ya kujihakikishia kufanikiwa kwenye kilimo.
                         Kuweza kupata makala na mafunzo ya kilimo uhakika, Karibu sana kwenye KILIMO UHAKIKA tufanye kazi pamoja.
</p>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h3>Taarifa muhimu kuhusu kilimo</h3>
                                <img src="image/papai_1.jpg" class="img-responsive img-rounded">
                                <p>
                                    Faidika na kuelima kupitia wekeza kilimo unaeza kupata taarifa na makala mbalimbali kuhusu kilimo
                                    au mazao mbalimbali.Pia pata taarifa za bei za mazao pamoja na soko la kilimo kwa ujumla wake na fahamu
                                    masoko mbalimbali ambpo bidhaa uhuzwa kwa wingi sanaa.
                                </p>

                            </div>
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h5>Kupitia wekeza kilimo,unaeza kufanya vifuatavyo</h5>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">Kununua Mazao na pembejeo</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                        Mkulima anaweza kuweka mazao yake kwaajili ya kutafuta wateja kwa urahisi na kwa bei nafuu,pia 
                                        muuza pembejeo ana uwezo wa kuweka zana za kilimo kwa kumrahsishia mkulima katika mahitaji na kununua 
                                        mbolea pamoja na madawa ya mazao mbalimbali.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Kujitangaza kupitia biashara ya kilimo</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                    <div class="panel-body">
                                        makaala pamoja na mada mbalimbali zinatolewaa kuelimisha watu katika kilimo bora pamoja 
                                        na ushauri kupitia mada mbalimbali.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Kupata mafunzo kuhusu kilimo</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                  

                                        <div class="panel-body">
                                            Jifunze kuhusu kilimo cha kisasa na timiza malengo yako kupitia kilimo.Wekeza kwenye kilimo upate faida
                                            na endesha biashara yako kisasa.
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /. ROW  -->


</div>
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

      </div>

    </footer>
    
</html>

    
