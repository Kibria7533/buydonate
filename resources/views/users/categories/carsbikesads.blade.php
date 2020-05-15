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
                             <li><a href='{{url('/ViewAds/' .preg_replace('/\s+/','',$category->
                             	maincategory).'/'.$category->id)}}'>{!!html_entity_decode($category->icons)!!}{{$category->maincategory}}</a>
</li>

		                                @endforeach

		                        @else

                                @endif
						@endif



					</ul>
					
				</div>
			</div>
		</div>
		<div  class="col-md-9">
			<div id="Advertiesment"class="card">
				<div class="card-header">
					<strong>Advertiesment</strong>
				</div>
				<div class="card-body">
					<div class="row">
						@if(count($carsBikes)>0)
						@foreach($carsBikes as $row)
						<div class="col-md-3">
							<div class="productCard">
						<img src=<?php echo strtok($row->photos,',')?> style="padding:10px !importan;width:100%;height:182px;"/>
						<h3 style="margin-bottom:0px">{{$row->productname}}</h3>
						<h3 style="margin-bottom:0px">{{$row->city}}</h3>

						<button id="showunic" value="{{$row->id}}">VIEW</button>
								
							</div>
						</div>
						@endforeach
						@else
						@endif

						</div>
					
				</div>
			</div>
			
		</div>
	</div>
</div>

@endsection