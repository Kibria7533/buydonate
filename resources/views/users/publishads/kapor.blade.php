@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">
					<strong>Categories</strong>
				</div>
				<div class="card-body">
					<ul class="userpgcategory fa-ul">
						@if(isset($categories))

		                        @if(count($categories)>0)
		                              @foreach($categories as $category)
<li><a href='{{url('/post-classified-ads/'.preg_replace('/\s+/','',$category->maincategory).'/'.$category->id)}}'>{!!html_entity_decode($category->icons)!!}{{$category->maincategory}}</a></li>

		                                @endforeach

		                        @else

                        @endif
						@endif



					</ul>
					
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					<strong>Advertiesment</strong>
				</div>
				<div class="card-body">

					<div id="MyTabContent" class="tab content">
						<div id="home">

							<form enctype="multipart/form-data" method="POST" action="{{url('/postCarsBikes')}}">
								{{csrf_field()}}
              <div class="row">
              	<div class="col-lg-6">
              		@if(count($errors)>0)
              		@foreach($errors->all() as $error)
              		
              		@endforeach
              		@endif
              	</div>
              </div>
			  <div class="form-row">
			    <div class="col">
			    	<input type="hidden" name="maincategoryid" value="{{Request::segment(3)}}">
			    	<label><strong>Select Subcategory</strong></label>
			      <select name="subcategoryid"class="form-control">
			      	<option value="">Select</option>
			      	@if(count($subcategories)>0)
			      	@foreach($subcategories as $subcategory)
                     <option value="{{$subcategory->id}}">{{$subcategory->subcategory}}</option>
                    @endforeach

                    @else

                    @endif


			      				      </select>
			      				      @if($errors->has('subcategoryid'))
			                          <span class="alert alert-danger">{{$errors->first('subcategoryid')}} </span>

			                          @endif
			    </div>

			    <div class="col">
			    	<label><strong>Your Product Name</strong></label>
			      <input type="text" name="productname"class="form-control" placeholder="Product name">
			    </div>
			  </div>
			  @if($errors->has('productname'))
			                          <span class="alert alert-danger">{{$errors->first('productname')}} </span>

			                          @endif
				  <div class="form-row">
				    <div class="col">
				    	<label><strong>Year of Purchase</strong></label>
				      <input type="text" name="yearofpurchase"class="form-control" placeholder="Year of purchase">
				    </div>
				    @if($errors->has('yearofpurchase'))
			                          <span class="alert alert-danger">{{$errors->first('yearofpurchase')}} </span>

			                          @endif
				    <div class="col">
				    	<label><strong>Expected Selling Price</strong></label>
				      <input type="text" name="expsellprice"class="form-control" placeholder="Expected Selling Price">
				    </div>
				    @if($errors->has('expsellprice'))
			                          <span class="alert alert-danger">{{$errors->first('expsellprice')}} </span>

			                          @endif
				  </div>

		  <div class="form-row">
		    <div class="col">
		    	<label><strong>Your Name</strong></label>
		      <input type="text" name="name"class="form-control" placeholder="Your name">
		    </div>
		    @if($errors->has('name'))
			                          <span class="alert alert-danger">{{$errors->first('name')}} </span>

			                          @endif
		    <div class="col">
		    	<label><strong>Your Product Model</strong></label>
		      <input type="text" name="mobile"class="form-control" placeholder="Your mobile">
		    </div>
		    @if($errors->has('mobile'))
			                          <span class="alert alert-danger">{{$errors->first('mobile')}} </span>

			                          @endif
		  </div>

			  <div class="form-row">
			    <div class="col">
			    	<label><strong>Your Email</strong></label>
			      <input type="text"name="email" class="form-control" placeholder="Your email">
			    </div>
			    @if($errors->has('email'))
			                          <span class="alert alert-danger">{{$errors->first('email')}} </span>

			                          @endif
			    <div class="col">
			    	<label><strong>Select Your State</strong></label>
			      <select name="state"class="form-control">
			      	<option value="">Select</option>
			      	@if(count($states)>0)
			      	@foreach($states as $state)
                     <option value="{{$state->id}}">{{$state->stateName}}</option>
                    @endforeach

                    @else

                    @endif
			      </select>
			      @if($errors->has('state'))
			                          <span class="alert alert-danger">{{$errors->first('state')}} </span>

			                          @endif
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="col">
			    	<label><strong>Enter Your City</strong></label>
			      <input type="text" name="city"class="form-control" placeholder="Enter your city">
			    </div>
			    @if($errors->has('city'))
			                          <span class="alert alert-danger">{{$errors->first('city')}} </span>

			                          @endif
			    <div class="col">
			    	<label><strong>Choose Picture </strong></label>
			      <input type="file"name="photos[]" class="form-control" placeholder="picture" multipart="true">
			    </div>
			    @if($errors->has('photos'))
			                          <span class="alert alert-danger">{{$errors->first('photos')}} </span>

			                          @endif
			  </div>
			   <div class="form-row">
			    <div class="col">
			    	<button type="submit" class="btn btn-primary btn-sm">Post your Ad</button>

			    	
			    </div>
			    <div class="col">
			    	<button type="button" id="reset"class="btn btn-secondary btn-sm">Reset</button>
			    </div>
			  </div>
</form>
							
						
				
							
						</div>
						
					</div>







				</div>
			</div>
		</div>
	</div>
</div>

@endsection