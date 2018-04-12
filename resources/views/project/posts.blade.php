
		 	 	@extends('project/inc/header')

@section('content')
		<div class="contentsection contemplete clear">
		<div class="maincontent clear">
@foreach($input as $data)
	<div class="samepost clear">
<h2><a href="">{{ $data->title }}</a></h2>
				<h4>April 10, 2016, 12:30 PM, By <a href="#">{{ $data->author }}</a></h4>
				 <img src="{{asset( $data->image )}}" alt="post image"/>
				<p>
				{{str_limit($data->body,300,'.....') }}
				</p>
		
				<div class="readmore clear">
					<a href="post&{{ ($data->id)}}">Read More</a>
				</div>

			</div>
	@endforeach
		</div>		
										
		@stop
	