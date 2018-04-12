
	@extends('project/inc/header')
	@section('content')
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			
			<div class="about">
				
				<div class="samepost clear">
					
				<h2>{{ $in->title }}</h2>
				<h4>April 10, 2016, 12:30 PM, By {{ $in->author }}</h4>
				<img src="{{asset( $in->image )}}" alt="MyImage"/>
				

				<p>{{ $in->body }}</p>
				
				</div>
			
				<div class="relatedpost clear">
					<h2>Related articles</h2>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				</div>
				</div>	

			
	</div>

		@stop