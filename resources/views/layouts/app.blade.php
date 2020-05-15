
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
     <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
     <link href="{{ asset('font.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background: rgb(159,25,50) !important;">
            <div class="container">
                <div class="col-lg-2">
                    <div class="row">
                        <a class="navbar-brand" href="{{ url('/') }}" style="color:#fff; font-size: 28px;">Liveselling</a>
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
                                    <a class="nav-link" href="{{ route('register') }}" style="color: #fff;">{{ __('Registration') }}</a>
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
                        
                  <li style="margin-top: 9px ;">
               
    <a id="adp"href="{{url('/post-classified-ads')}}" style="color: #fff; text-decoration: none;">Add post </a>
    
 
</li>

<li style="margin-top: 9px ;">
                
    <a id="dash"href="{{url('/admindashboard')}}" style="color: #fff; text-decoration: none;">Admin Dashboard </a>
   
 
</li>

@endguest
                          
                        
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
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="singleaddshow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Liveselling</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="Ad"class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Seller Registration</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
                        
                <form action="post">
                  @csrf
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-md-5 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="mobilenumber" type="text" class="form-control " name="mobilenumber" value="" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Permanent Address') }}</label>

                            <div class="col-md-6">
                                <input id="permanentaddress" type="text" class="form-control" name="permanentaddress" value="" >

                                
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Present Address') }}</label>

                            <div class="col-md-6">
                                <input id="presentaddress" type="text" class="form-control" name="presentaddress" value="" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Post Code') }}</label>

                            <div class="col-md-6">
                                <input id="postcode" type="text" class="form-control " name="postcode" value="" >

                                
                            </div>
                        </div><div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Product Names as A List') }}</label>

                            <div class="col-md-6">
                                <input id="productnames" type="text" class="form-control " name="productnames" value="" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Product Sources') }}</label>

                            <div class="col-md-6">
                                <input id="productsources" type="text" class="form-control " name="productsources" value="" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Product prices') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="productprices" value="" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Education Institutes:') }}</label>

                            <div class="col-md-6">
                                <input id="educationinstitutes" type="text" class="form-control " name="educationinstitutes" value="" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Present Study Level') }}</label>

                            <div class="col-md-6">
                                <input id="presentstudylevel" type="text" class="form-control " name="presentstudylevel" value="" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Nearest Courier Point') }}</label>

                            <div class="col-md-6">
                                <input id="nearestcourierpoint" type="text" class="form-control" name="nearestcourierpoint" value="" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __(' Courier Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="couriermobilenumber" type="text" class="form-control " name="couriermobilenumber" value="" >

                                
                            </div>
                        </div>

                       <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> 
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="applyseller" class="btn btn-primary">Apply Seller</button>
      </div>
    </div></form>
    </div>
  </div>
</div>
        </main>
    </div>
    <div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <h3>ABOUT Liveselling</h3>
        <div class="footer-logo"><img src="{{asset('kibria.png')}}" alt=""></div>
        <p>We are working on developing relations between seller and buyer.... <a href="about-us.html">Read More</a></p>
        <button type="button" class="btn btn-primary"id="sellerregistrationbutton" data-toggle="modal" data-target="#exampleModalLong">
  Register To be a seller
</button>
      </div>

<!-- Modal -->
<div class="modal fade" id="sellerregreport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="selregmessegebody">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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

$.ajaxSetup({
        headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'}
    });
    
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

               $(document).ready(function(){

               $.ajax({
                  method:'GET',
                  dataType:'json',
                  url:'{{route('authcheck')}}',  
                  success:function(data){
                    if(data!=1){
                        $('#dash').hide();

                    }
                    if(data==2 || data ==1){
                     $('#sellerregistrationbutton').hide();
                     $('#adp').show();
                    }
                    else
                    {
                        $('#adp').hide();
                    }

                    
                      
                    
                  }
               });
             });
                    
                                   
   
$(document).on("click",'#showunic',function(e){
    e.preventDefault();
    var id=$(this).val();
    var _token=$('input[name="_token"]').val();
    $.ajax({
        url:'{{route('getsingleadd')}}',
        method:'POST',
        data:{
            id:id,
            _token:_token
        },
        success:function(data){
            $('#Ad').html(data);
            $('#singleaddshow').modal('show');
            
           
        }
    });

});


           


                    $(document).on("click",'#applyseller',function(e){
                       e.preventDefault();
                        $('#exampleModalLong').modal('hide');
                       var name=$('input[name=name').val();
                       var email=$('input[name=email').val();
                       var mobilenumber=$('input[name=mobilenumber').val();
                       var permanentaddress=$('input[name=permanentaddress').val();
                       var presentaddress=$('input[name=presentaddress').val();
                       var postcode=$('input[name=postcode').val();
                       var productnames=$('input[name=productnames').val();
                       var productsources=$('input[name=productsources').val();
                       var productprices=$('input[name=productprices').val();
                       var educationinstitutes=$('input[name=educationinstitutes').val();
                       var presentstudylevel=$('input[name=presentstudylevel').val();
                       var nearestcourierpoint=$('input[name=nearestcourierpoint').val();
                       var couriermobilenumber=$('input[name=couriermobilenumber').val();
                       var password=$('input[name=password').val();
                       var password_confirmation=$('input[name=password_confirmation').val();
                       var _token=$('input[name="_token"]').val();
                       $.ajax({
                        url:'{{route('registrycheck')}}',
                        data:{email:email,_token:_token},
                        method:'POST',
                        success:function(data){
                          
                              if(data==1){
                                $('#selregmessegebody').html('You are already a seller pls login!!');
                               $('#sellerregreport').modal('show');

                              }

                              if(data==2){
                                alert('hi now wait for admin approved');
                                $.ajax({
                                   url:'{{route('sellersave')}}',
                                   method:'POST',
                                   data:{
                                    email:email,
                                    mobilenumber:mobilenumber,
                                    pe_address:permanentaddress,
                                    pre_address:presentaddress,
                                    po_code:postcode,
                                    p_name:productnames,
                                    p_source :productsources,
                                    p_price:productprices,
                                    ed_institute:educationinstitutes,
                                    ed_level  :presentstudylevel,
                                    CourierPoint:nearestcourierpoint,
                                    CourierMobileNumber:couriermobilenumber,
                                     _token:_token
                                   },
                                   success:function(data){
                                    $('#selregmessegebody').html('You are alreay registred as customer now applyed as seller so wait for admin aproved to be a seller');
                               $('#sellerregreport').modal('show');
                                    
                                    
                                   }

                                });
                              }


                              if(data==3){
                                
                                $('#selregmessegebody').html('You are alreay registred as customer and applied for seller also now wait for admin aproved to be a seller No need to register again');
                               $('#sellerregreport').modal('show');
                                 
                              }

                              if(data==4){
                                $.ajax({
                                   method:'GET',
                                   url:'{{route('loggingout')}}',
                                   success:function(){
                                    
                                   }
                                });
                                
                                $.ajax({
                                    url:'{{route('register')}}',
                                   method:'POST',
                                   data:{
                                    name:name,
                                    email:email,
                                    phone:mobilenumber,
                                    address:presentaddress,
                                    postcode:postcode,
                                    password:password,
                                     _token:_token
                                   },
                                   success:function(data){

                                 $.ajax({
                                    url:'{{route('sellersave')}}',
                                   method:'POST',
                                   data:{
                                    email:email,
                                    mobilenumber:mobilenumber,
                                    pe_address:permanentaddress,
                                    pre_address:presentaddress,
                                    po_code:postcode,
                                    p_name:productnames,
                                    p_source :productsources,
                                    p_price:productprices,
                                    ed_institute:educationinstitutes,
                                    ed_level  :presentstudylevel,
                                    CourierPoint:nearestcourierpoint,
                                    CourierMobileNumber:couriermobilenumber,
                                     _token:_token
                                   },
                                   success:function(data){
                                    $('#selregmessegebody').html('wellcome you registred for seller now use as customer till admin aproved');
                               $('#sellerregreport').modal('show');
                                    location.reload();
                                    return false;

                                   }
                                });

                                   }
                                });

                              }
              }//main success closed
                              
}); //main ajax closed
                      
                      
   });  //main document ready closed           



</script>

