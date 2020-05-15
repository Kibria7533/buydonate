<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Liveselling') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
     <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background: rgb(159,25,50) !important;">
            <div class="container">
                <div class="col-lg-2">
                    <div class="row">
                        <a class="navbar-brand" href="{{ url('/selpage') }}" style="color:#fff; font-size: 28px;">Liveselling</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"style="color: #fff;">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: #fff;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: #fff;"class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        @yield('adpost')
                    </ul>
                </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-4">
                            <form class="form-horizontal" method="POST" action="{{url('/product/search')}}">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <div class="col-8">
                                        <input type="text" name="searchonproduct" required="true"class="form-control" style="margin-top: 5px;"placeholder="Enter product">
                                    </div>
                                    <div class="col-4">
                                        <input type="submit" name="" value="search"class="btn btn-primary" style="margin-top: 5px;" >
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-horizontal" method="post" action="{{url('/search/advertisements')}}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <input type="text" name="state" required="true" id="state" class="form-control" placeholder="Enter State" style="margin-top: 5px;">
                                        <div id="stateList"></div>
                                        <div id="cityList"
                                        style="
                                           display: block;
                                           position: absolute;
                                           border-radius:0px;
                                           background: #fff;
                                           width:90%;
                                           padding: 0px 13px;
                                           overflow-y:auto;
                                           z-index:1;
                                        " 
                                        ></div>
                                        <input type="text" name="city" id="city" style="background: rgb(159,25,50); border:1px solid rgb(159,25,50); color:#fff;">
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="form-control dropdown" name="categories"id="categories" class="categories" style="margin-top: 5px;">
                                            <option value="">Select option</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="submit" name="search-adds" class="btn btn-primary" value="search" style="margin-top: 5px;">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                
                
            
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <h3>ABOUT Liveselling</h3>
        <div class="footer-logo"><img src="{{asset('kibria.png')}}" alt=""></div>
        <p>We are working on developing relations between seller and buyer.... <a href="about-us.html">Read More</a></p>
      </div>
      <div class="col-md-2 col-sm-6">
        <h3>Quick  LInks</h3>
        <ul class="footer-links">
          <li><a href="#.">Home</a></li>
          <li><a href="#.">About Us</a></li>
          <li><a href="#.">Features</a></li>
          <li><a href="#.">Categories</a></li>
          <li><a href="#.">Blog</a></li>
          <li><a href="#.">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <h3>MAIN CATEGORIES</h3>
        <ul class="footer-category">
          <li><a href="#.">Electronics</a></li>
          <li><a href="#.">Vahicles</a></li>
          <li><a href="#.">Bikes</a></li>
          <li><a href="#.">Animals</a></li>
          <li><a href="#.">Toys</a></li>
          <li><a href="#."> Furniture</a></li>
          <li><a href="#.">Marketing</a></li>
          <li><a href="#.">Technology</a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-3 col-sm-6">
        <h3>OUR LOCATION</h3>
        <div class="address">Kushtia Dhaka </div>
        <div class="info"><i class="fa fa-phone" aria-hidden="true"></i> <a href="#.">01720588884</a></div>
        <div class="info"><i class="fa fa-fax" aria-hidden="true"></i> <a href="#.">01706043918</a></div>
      </div>
    </div>
    <div class="copyright">Copyright © 2020 Liveselling - All Rights Reserved.</div>
  </div>
</div>

</body>
</html>

<script src="{{ asset('js/jquery.min.js') }}"></script>

<script type="text/javascript">
    
              $(document).ready(function(){
                        $('#state').keyup(function(){
                           var data;
                           var indianstates=$(this).val();

                           if(indianstates !=' '){
                            var _token=$('input[name="_token"]').val();

                            $.ajax({
                                url:"{{route('searchlocation.fetch')}}",
                                method:"POST",
                                data:{indianstates:indianstates,_token:_token},
                                success: function(data){
                                    $('#stateList').fadeIn();
                                    $('#stateList').html(data);
                                }

                            });


                           }
                           else
                           {
                               $('#stateList').fadeOut();
                                    $('#stateList').html(data);
                           }
                        });
                    });





              $(document).on('click','#search',function(){
                            $('#state').val($(this).text());
                             $('#stateList').fadeOut();
                       



                                                      
               $(document).on('click','#stateList ul li',function(){

                var state=$('#state').val();
                var id=$(this).val();
                var _token=$('input[name="_token"]').val();
                        $.ajax({
                            url:"{{route('state.cities')}}",
                            method:"POST",
                            data:{id:id,_token:_token},
                            success: function(data){
                                $('#cityList').fadeIn();
                                $('#cityList').html(data);
                            }

                        });
                    });


 });




       $(document).on('click','#cityList',function(e){
               var txt =$(e.target).text();
               $('#city').fadeIn();          
                $('#city').val(txt);
                $('#cityList').fadeOut();
             });







              $(document).ready(function(){

                     var _token=$('input[name="_token"]').val();
                        $.ajax({
                            url:"{{route('categories.retrieve')}}",
                            method:"POST",
                            data:{_token:_token},
                            success: function(data){
                                $('#categories').fadeIn();
                               $('#categories').html(data);
                               //alert(data);
                           }
                            });
                
                    });



              $(document).ready(function(){

                if(window.location== "http://127.0.0.1:8000/"){ 

                    var _token=$('input[name="_token"]').val();
                        $.ajax({
                            url:"{{route('categories.ads')}}",
                            method:"GET",
                            data:{_token:_token},
                            success: function(data){
                               // $('#categories').fadeIn();
                              $('#Advertiesment').html(data);
                               //alert(data);
                           }
                            });

                }

                    
                
                    });
   
   


</script>
