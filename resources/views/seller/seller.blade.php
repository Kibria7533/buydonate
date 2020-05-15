@extends('layouts.app')
@section('adpost')
<li style="margin-top: 9px ;"><a href="{{url('/post-classified-ads')}}" style="color: #fff; text-decoration: none;">Add post </a></li>
@endsection
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
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					<strong>Advertiesment</strong>
				</div>
				<div class="card-body">
					<div class="col-lg-12">
						@if(session('info'))
						<div class="alert alert-success" style="margin-top:5px;">
							{{session('info')}}
							
						</div>
							@endif
					</div>
					<div class="row" id="Advertiesment">
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection