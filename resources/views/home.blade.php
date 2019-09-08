@extends('layouts.master')

@section('content')
	<div class="container"> 
		@foreach ($categories as $category)
			<div class="row mb-5">
				<div class="col-md-12 mb-3">
					<h4>{{$category->name}}</h4>
				</div>
				@foreach ($category->posts as $post)	
					<div class="col-md-3">
						<a href="/post/{{$post->slug}}" target="_blank">
							<div class="card border-0">
								<img src="{{ Voyager::image( $post->image ) }}" class="card-img-top" alt="">
								<div class="card-body">
									<p class="card-text">{{$post->title}}</p>
								</div>
							</div>  
						</a>
					</div>
				@endforeach
			</div>
		@endforeach
	</div>
@endsection